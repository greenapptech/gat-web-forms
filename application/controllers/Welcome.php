<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
        parent::__construct();
        $this->load->library('Pdf');
        $this->load->model('Form_model');
    }

	public function index()
	{	
		$this->load->view('index');
	}


//-----------------------index form insert data--------------------------


	public function control_form()
	{
		$data = $this->input->post();
				
		$this->form_validation->set_rules('transfer_type', 'transfer_type', 'required',array('required'=>'Move/Transfer type is Required!'));
		$this->form_validation->set_rules('releasing_assets', 'releasing_assets','required', array('required'=>'Department/Ministry Releasing assets/materials required!'));
		$this->form_validation->set_rules('requesting_assets', 'requesting_assets', 'required',array('required'=>'Department/Ministry requesting assets/materials Required!'));
		$this->form_validation->set_rules('loaner', 'loaner', 'required' , array('required'=>'Purpose of transfer/loaner Required!'));
		$this->form_validation->set_rules('sign', 'is_signature', 'required', array('required'=>'Signature Required!'));
		$this->form_validation->set_rules('sign1', 'desi_signature', 'required', array('required'=>'Signature Required!'));
 	 	if($this->form_validation->run() == TRUE)
 	 	{ 
 	 		$this->db->trans_start();

		    $imagedata1 = base64_decode($data['sign']);
			$filename1 = md5(date("dmYhisA"));
			$file_name1 = 'assets/doc_signs/'.$filename1.'.png';
			file_put_contents($file_name1,$imagedata1);
			
	 		$imagedata2 = base64_decode($data['sign1']);
			$filename2 = md5(date("dmYhisA"));
			$file_name2 ='assets/doc_signs/'.$filename2.'1'.'.png';
			file_put_contents($file_name2,$imagedata2);

	 		$value = array(
                'transfer_type'     => $data['transfer_type'],
                'releasing_assets'  => $data['releasing_assets'],
                'requesting_assets' => $data['requesting_assets'],
                'check_out_Date'    => $data['check_out_Date'],
                'return_date'       => $data['return_date'],
                'loaner'   			=> $data['loaner'],
                'comment'   		=> $data['comment'],
                'is_name'   		=> $data['is_name'],
                'is_signature'		=> $file_name1,
                'designee_name'		=> $data['designee_name'],
                'desi_signature' 	=> $file_name2,
	        );
        	$data1 = $this->security->xss_clean($value);
        	
        	$lastid = $this->Form_model->form_control($data1);
        	$this->session->set_userdata('id',$lastid);
        	$a = array_filter($data['model']);
			foreach ($a as $key => $value)
			{
	 			$arr = array(
	 				'model'   			=> $value,
					'serial'	   		=> $data['serial'][$key],
					'tg_tag'   			=> $data['tg_tag'][$key],
					'from'   			=> $data['from'][$key],
					'to'   				=> $data['to'][$key],
					'Price' 			=> $data['Price'][$key],
					'index_id'			=> $lastid,
	            );
	            $record = $this->security->xss_clean($arr);
	        	$rs = $this->Form_model->insert_table($record);
			}
			$this->db->trans_complete();
			if ($this->db->trans_status() === FALSE)
			{
			    $this->db->trans_rollback();
			}
			else
			{
			    $this->db->trans_commit();
			    redirect('welcome/next_form');
			}
        }
        else
        {
        	$this->load->view('index');
        } 
   
	}

//------------form2 insert data--------------------------------------

	public function next_form()
	{
		$this->load->view('form2');
	}


	public function report_form()
	{
		$data =	$this->input->post();
		$index_id = $this->session->userdata('id');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('inc_date', 'inc_date', 'required',array('required'=>'The Incident Date field is required!'));
		$this->form_validation->set_rules('re_date', 're_date', 'required', array('required'=>'The Reported field is required!'));
		$this->form_validation->set_rules('question', 'question', 'required',array('required'=>'The Reported to the Police field is required!'));
		$this->form_validation->set_rules('police_report', 'police_report', 'required',array('required'=>'The Police Report field is required!'));

		if($this->form_validation->run() == TRUE)
 	 	{ 
			$value = array(
				'index_id'	   => $index_id,
				'name'         => $data['name'],
				'title'        => $data['title'],
				'department'   => $data['department'],
				'phone'        => $data['phone'],
				'inc_date'     => $data['inc_date'],
				'time_inc'     => $data['time_inc'],			
				'type_inc'     => $data['type_inc'],
				're_date'      => $data['re_date'],
				'time_re'      => $data['time_re'],
				'list_item'    => $data['list_item'],
				'item_no'      => $data['item_no'],
				'item_loc'     => $data['item_loc'],
				'item_damaged' => $data['item_damaged'],
				'cost_repair'  => $data['cost_repair'],
				'parson_assets'=> $data['parson_assets'],
				'question'	   => $data['question'],
				'police_report'=> $data['police_report'],
				'city'         => $data['city'],
			);
			$data = $this->security->xss_clean($value);
	        if($rs = $this->Form_model->form_report($data))
	        {
	        	redirect('welcome/next_form3');
	        }
	        else
	        {
	        	$this->load->view('form2');
	        	
	        }
		}
		else
		{
			$this->load->view('form2');
		}

	}


//-------------form3 insert data--------------------------------------

	public function next_form3()
	{
		$this->load->view('form3');
	}

	public function vehicle_form()
	{
		$data = $this->input->post();
		$index_id = $this->session->userdata('id');		
		$this->form_validation->set_rules('tehicle_tag', 'tehicle_tag', 'required',array('required'=>'The Vehicle Tag field is required!'));
		$this->form_validation->set_rules('department', 'department', 'required',array('required'=>'The Department field is required!'));
		if(!empty($data['date'])){
			$a = array_filter($data['date']);
		foreach ($a as $key => $value) {
			$this->form_validation->set_rules("driver[".$key."]", 'driver', 'required',array('required'=>'field is required!'));
		}
		}
		
 	 	if($this->form_validation->run() == TRUE)
 	 	{ 
 	 		$this->db->trans_start();

	 		$value = array(
	 			'index_id'				 => $index_id,
                'vehicle_descrition'     => $data['vehicle_descrition'],
                'tehicle_tag'  			 => $data['tehicle_tag'],
                'department' 			 => $data['department'],
                'fuel_type'    			 => $data['fuel_type'],
	        );
        	$data1 = $this->security->xss_clean($value);
        	
        	$lastid = $this->Form_model->form_vehicle($data1);
        	$a = array_filter($data['date']);
			foreach ($a as $key => $value)
			{
	 			$arr = array(
	 				'index_id'			=> $index_id,
	 				'date'   			=> $value,
					'time_out'	   		=> $data['time_out'][$key],
					'time_in'   		=> $data['time_in'][$key],
					'milage_out'   		=> $data['milage_out'][$key],
					'milage_in'   		=> $data['milage_in'][$key],
					'destination' 		=> $data['destination'][$key],
					'purpose' 			=> $data['purpose'][$key],
					'driver' 			=> $data['driver'][$key],
					'gasoline_gals' 	=> $data['gasoline_gals'][$key],
					'gasoline_cost' 	=> $data['gasoline_cost'][$key],
					'weekly_check' 		=> $data['weekly_check'][$key],
					'vehicle_id'		=> $lastid,
	            );
	            $record = $this->security->xss_clean($arr);
	        	$rs = $this->Form_model->vehicle_business_table($record);
	        	
			}
			$this->db->trans_complete();
			if ($this->db->trans_status() === FALSE)
			{
			    $this->db->trans_rollback();
			}
			else
			{
			    $this->db->trans_commit();
			    redirect('welcome/preview_page1');
			}
        }
        else
        {
        	$this->load->view('form3');
        } 
	}



//---------------------preview page----------------

	public function preview_page1()
	{
		$id = $this->session->userdata('id');
		$rs['data'] = $this->Form_model->getdata_preview1($id);
		$rs['tab'] = $this->Form_model->getdata_preview11($id);
		$this->load->view('preview_index',$rs);
	}

	public function preview_page2()
	{
		$id = $this->session->userdata('id');
		$rs['data'] = $this->Form_model->gedata_preview2($id);
		$this->load->view('preview_form2',$rs);
	}


	public function preview_page3()
	{
		
		$id = $this->session->userdata('id');
		$rs['rs'] = $this->Form_model->getdata_vehicle_preview($id);
		$rs['trs'] = $this->Form_model->get_vehc_tab_preview($id);
        $this->load->view('preview_form3',$rs);

        // $this->session->unset_userdata('id');
        // $this->session->sess_destroy();

	}


//--------------------------edit form----------------------------------------
	public function edit_form1()
	{
		$id = $this->session->userdata('id');
		$rs['data'] = $this->Form_model->getdata_preview1($id);
		$rs['tab'] = $this->Form_model->getdata_preview11($id);
		$this->load->view('edit_form1',$rs);
	}



	public function edit_form2()
	{
		$id = $this->session->userdata('id');
		$rs['data'] = $this->Form_model->gedata_preview2($id);
		$this->load->view('edit_form2',$rs);
	}


	public function edit_form3()
	{
		$id = $this->session->userdata('id');
		$rs['rs'] = $this->Form_model->getdata_vehicle_preview($id);
		$rs['trs'] = $this->Form_model->get_vehc_tab_preview($id);
        $this->load->view('edit_form3',$rs);
	}

// ----------------------update form --------------------------------------------

// ----------------------update form1 --------------------------------------------

	public function update_form1()
	{
		$id = $this->session->userdata('id');
		$data = $this->input->post();
		$this->form_validation->set_rules('transfer_type', 'transfer_type', 'required',array('required'=>'Move/Transfer type is Required!'));
		$this->form_validation->set_rules('releasing_assets', 'releasing_assets','required', array('required'=>'Department/Ministry Releasing assets/materials required!'));
		$this->form_validation->set_rules('requesting_assets', 'requesting_assets', 'required',array('required'=>'Department/Ministry requesting assets/materials Required!'));
		$this->form_validation->set_rules('loaner', 'loaner', 'required' , array('required'=>'Purpose of transfer/loaner Required!'));
		$this->form_validation->set_rules('sign', 'is_signature', 'required', array('required'=>'Signature Required!'));
		$this->form_validation->set_rules('sign1', 'desi_signature', 'required', array('required'=>'Signature Required!'));
 	 	if($this->form_validation->run() == TRUE)
 	 	{ 
 	 		$this->db->trans_start();

		    $imagedata1 = base64_decode($data['sign']);
			$filename1 = md5(date("dmYhisA"));
			$file_name1 = 'assets/doc_signs/'.$filename1.'.png';
			file_put_contents($file_name1,$imagedata1);
			
	 		$imagedata2 = base64_decode($data['sign1']);
			$filename2 = md5(date("dmYhisA"));
			$file_name2 ='assets/doc_signs/'.$filename2.'1'.'.png';
			file_put_contents($file_name2,$imagedata2);

	 		$value = array(
                'transfer_type'     => $data['transfer_type'],
                'releasing_assets'  => $data['releasing_assets'],
                'requesting_assets' => $data['requesting_assets'],
                'check_out_Date'    => $data['check_out_Date'],
                'return_date'       => $data['return_date'],
                'loaner'   			=> $data['loaner'],
                'comment'   		=> $data['comment'],
                'is_name'   		=> $data['is_name'],
                'is_signature'		=> $file_name1,
                'designee_name'		=> $data['designee_name'],
                'desi_signature' 	=> $file_name2,
	        );
        	$data1 = $this->security->xss_clean($value);
        	
        	$lastid = $this->Form_model->update_form1($id,$data1);
        	$a = array_filter($data['model']);
        	$this->db->where('index_id',$id);
        	$this->db->delete('product');
			foreach ($a as $key => $value)
			{
	 			$arr = array(
	 				'model'   			=> $value,
					'serial'	   		=> $data['serial'][$key],
					'tg_tag'   			=> $data['tg_tag'][$key],
					'from'   			=> $data['from'][$key],
					'to'   				=> $data['to'][$key],
					'Price' 			=> $data['Price'][$key],
					'index_id'			=> $id,
	            );
	            $record = $this->security->xss_clean($arr);
	        	$rs = $this->Form_model->update_sub_form($record);
			}
			$this->db->trans_complete();
			if ($this->db->trans_status() === FALSE)
			{
			    $this->db->trans_rollback();
			}
			else
			{
			    $this->db->trans_commit();
			    redirect('welcome/preview_page1');
			}
        }
        else
        {
        	$id = $this->session->userdata('id');
			$rs['data'] = $this->Form_model->getdata_preview1($id);
			$rs['tab'] = $this->Form_model->getdata_preview11($id);
			$this->load->view('edit_form1',$rs);
        } 
	}


// ----------------------update form2--------------------------------------------


	public function update_form2()
	{
		$index_id = $this->session->userdata('id');
		$data =	$this->input->post();
		// echo '<pre>';
		// print_r($data);die;

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('inc_date', 'inc_date', 'required',array('required'=>'The Incident Date field is required!'));
		$this->form_validation->set_rules('re_date', 're_date', 'required', array('required'=>'The Reported field is required!'));
		$this->form_validation->set_rules('question', 'question', 'required',array('required'=>'The Reported to the Police field is required!'));
		$this->form_validation->set_rules('police_report', 'police_report', 'required',array('required'=>'The Police Report field is required!'));

		if($this->form_validation->run() == TRUE)
 	 	{ 
			$value = array(
				// 'index_id'	   => $index_id,
				'name'         => $data['name'],
				'title'        => $data['title'],
				'department'   => $data['department'],
				'phone'        => $data['phone'],
				'inc_date'     => $data['inc_date'],
				'time_inc'     => $data['time_inc'],			
				'type_inc'     => $data['type_inc'],
				're_date'      => $data['re_date'],
				'time_re'      => $data['time_re'],
				'list_item'    => $data['list_item'],
				'item_no'      => $data['item_no'],
				'item_loc'     => $data['item_loc'],
				'item_damaged' => $data['item_damaged'],
				'cost_repair'  => $data['cost_repair'],
				'parson_assets'=> $data['parson_assets'],
				'question'	   => $data['question'],
				'police_report'=> $data['police_report'],
				'city'         => $data['city'],
			);
			$data = $this->security->xss_clean($value);
	        if($rs = $this->Form_model->update_form2($index_id,$data))
	        {
	        	redirect('welcome/preview_page2');
	        }
	        else
	        {
	        	$id = $this->session->userdata('id');
				$rs['data'] = $this->Form_model->gedata_preview2($id);
				$this->load->view('edit_form2',$rs);
	        }
		}
		else
		{
			$id = $this->session->userdata('id');
			$rs['data'] = $this->Form_model->gedata_preview2($id);
			$this->load->view('edit_form2',$rs);
		}
	}



// ----------------------update form3--------------------------------------------
	public function update_form3()
	{
		$index_id = $this->session->userdata('id');		
		$data = $this->input->post();
		$this->form_validation->set_rules('tehicle_tag', 'tehicle_tag', 'required',array('required'=>'The Vehicle Tag field is required!'));
		$this->form_validation->set_rules('department', 'department', 'required',array('required'=>'The Department field is required!'));
		
 	 	if($this->form_validation->run() == TRUE)
 	 	{ 
 	 		$this->db->trans_start();

	 		$value = array(
	 			// 'index_id'				 => $index_id,
                'vehicle_descrition'     => $data['vehicle_descrition'],
                'tehicle_tag'  			 => $data['tehicle_tag'],
                'department' 			 => $data['department'],
                'fuel_type'    			 => $data['fuel_type'],
	        );
        	$data1 = $this->security->xss_clean($value);
        	
        	$lastid = $this->Form_model->update_form3($index_id,$data1);
        	$a = array_filter($data['date']);
            $this->db->where('index_id',$index_id);
    		$this->db->delete('vehicle_business');
			foreach ($a as $key => $value)
			{
	 			$arr = array(
	 				'index_id'			=> $index_id,
	 				'date'   			=> $value,
					'time_out'	   		=> $data['time_out'][$key],
					'time_in'   		=> $data['time_in'][$key],
					'milage_out'   		=> $data['milage_out'][$key],
					'milage_in'   		=> $data['milage_in'][$key],
					'destination' 		=> $data['destination'][$key],
					'purpose' 			=> $data['purpose'][$key],
					'driver' 			=> $data['driver'][$key],
					'gasoline_gals' 	=> $data['gasoline_gals'][$key],
					'gasoline_cost' 	=> $data['gasoline_cost'][$key],
					'weekly_check' 		=> $data['weekly_check'][$key],
					'vehicle_id'		=> $index_id,
	            );
	            $record = $this->security->xss_clean($arr);
	        	$rs = $this->Form_model->update_sub_form3($record);
			}
			$this->db->trans_complete();
			if ($this->db->trans_status() === FALSE)
			{
			    $this->db->trans_rollback();
			}
			else
			{
			    $this->db->trans_commit();
			    redirect('welcome/preview_page3');
			}
        }
        else
        {
        	$id = $this->session->userdata('id');
			$rs['rs'] = $this->Form_model->getdata_vehicle_preview($id);
			$rs['trs'] = $this->Form_model->get_vehc_tab_preview($id);
        	$this->load->view('edit_form3',$rs);
        } 
	}
	

//--------------------------create PDF file--------------


	public function create_pdf1()
	{
		$id = $this->session->userdata('id');
		$rs['data'] = $this->Form_model->getdata_preview1($id);
		$rs['tab'] = $this->Form_model->getdata_preview11($id);
		$this->load->view('pdf1',$rs);
	}


	public function create_pdf2()
	{
		$id = $this->session->userdata('id');
		$rs['data'] = $this->Form_model->gedata_preview2($id);
		$this->load->view('pdf2',$rs);
	}



	public function create_pdf3()
	{
		$id = $this->session->userdata('id');
		$rs['rs'] = $this->Form_model->getdata_vehicle_preview($id);
		$rs['trs'] = $this->Form_model->get_vehc_tab_preview($id);
        $this->load->view('pdf3',$rs);
	}


	public function create_pdf_all()
	{
		$id = $this->session->userdata('id');
		$rs['rs'] = $this->Form_model->getdata_vehicle_preview($id);
		$rs['trs'] = $this->Form_model->get_vehc_tab_preview($id);
		$rs['data1'] = $this->Form_model->gedata_preview2($id);
		$rs['data'] = $this->Form_model->getdata_preview1($id);
		$rs['tab'] = $this->Form_model->getdata_preview11($id);		
		$this->load->view('testpdf',$rs);
	}





	


















}
?>


