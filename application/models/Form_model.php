<?php
	class Form_model extends CI_Model
	{

	//**************form_control & table***********************
		public function form_control($data1)
		{
			if($data = $this->db->insert('control_from',$data1))
			{
				 return $this->db->insert_id();
			}
			else
			{
				return false;
			}
		
		}


		public function insert_table($record)
		{
			if($data = $this->db->insert('product',$record))
			{
				 return true;
			}
			else
			{
				return false;
			}
		
		}


//**************form_report ***********************

		public function form_report($data)
		{
			if($data = $this->db->insert('report_form',$data))
			{
				return true;
			}
			else
			{
				return false;
			}
			
		}


//**************vehicle_form & table ***********************


		public function form_vehicle($data1)
		{
			if($data = $this->db->insert('vehicle_log',$data1))
			{
				return $this->db->insert_id();
			}
			else
			{
				return false;
			}
		}



		public function vehicle_business_table($record)
		{
			if($data = $this->db->insert('vehicle_business',$record))
			{
				 return true;
			}
			else
			{
				return false;
			}
		
		}

		

//***********preview form_control**************


		public function getdata_preview1($id)
		{
			if($query = $this->db->get_where('control_from', ['id' => $id]))
			{	
				return $query->result_array();
			}
			else
			{
				return false;
			}
		}


		public function getdata_preview11($id)
		{
			if($query = $this->db->get_where('product', ['index_id' => $id]))
			{	
				return $query->result_array();
			}
			else
			{
				return false;
			}
		}


// ******************preview form_report************

		public function gedata_preview2($id)
		{
			if($query = $this->db->get_where('report_form', ['index_id' => $id]))
			{	
				return $query->result_array();
			}
			else
			{
				return false;
			}
			
		}
	
//********************preview vehicle_form****************

		public function getdata_vehicle_preview($id)
		{
			if($query = $this->db->get_where('vehicle_log', ['index_id' => $id]))
			{	
				return $query->result_array();
			}
			else
			{
				return false;
			}
		}


		public function get_vehc_tab_preview($id)
		{
			if($query = $this->db->get_where('vehicle_business', ['index_id' => $id]))
			{	
				return $query->result_array();
			}
			else
			{
				return false;
			}
		}

//---------------------update-----------------------------------------------------


//**************************update form1***************************

		public function update_form1($id,$data1)
		{
			$data =	$this->db->where('id',$id)
							 ->update('control_from',$data1);
			if($data > 0)
			{
				return true;
			}
			else
			{
				return false;
			}		
		}


		public function update_sub_form($record)
		{
			$data = $this->db->insert('product',$record);
			if($data > 0)
			{
				return true;
			}
			else
			{
				return false;
			}	
		}




//**************************update form2***************************
		public function update_form2($index_id,$data)
		{
			$data =	$this->db->where('index_id',$index_id)
							 ->update('report_form',$data);
			if($data > 0)
			{
				return true;
			}
			else
			{
				return false;
			}	
		}


//**************************update form1***************************

		public function update_form3($index_id,$data1)
		{
			$data =	$this->db->where('index_id',$index_id)
							 ->update('vehicle_log',$data1);
			if($data > 0)
			{
				return true;
			}
			else
			{
				return false;
			}		
		}


		public function update_sub_form3($record)
		{
			$data = $this->db->insert('vehicle_business',$record);
			if($data > 0)
			{
				return true;
			}
			else
			{
				return false;
			}	
		}



	}
	?>
