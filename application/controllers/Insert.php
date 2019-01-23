<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
BACKEND
Controller mainly used to insert data 
*/
class Insert extends CI_Controller 
{

	public function index()
	{
		$this->load->view('backend/newuser');
	}

	/**
	Uses Form Validation Library for validating fields. Creates data variable to insert into Identity table. Calls main model to insert data into table.
	*/
	public function form_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', "name", 'required');
		$this->form_validation->set_rules('uid', 'UID', 'required');

		if($this->form_validation->run())
		{
			//if passes rules
			$this->load->model("main_model");
			$data = array(
				"name"		=>$this->input->post("name"),
				"uid"		=>$this->input->post("uid"),
				"phone_number"		=>$this->input->post("ph"),
				"shirt_size"		=>$this->input->post("shirt"),

			);
			$this->main_model->insert_checkout_data($data);
			redirect(base_url() . "Insert/inserted");

		}
		else
		{
			//if does not pass rules
			$this->index();
		}
	}

	public function checkout_form_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('itemid', "ItemID", 'required');
		$this->form_validation->set_rules('uid', 'UID', 'required');
		$this->form_validation->set_rules('timeout', 'Timeout', 'required');

		if($this->form_validation->run())
		{
			//if passes rules
			$this->load->model("main_model");
			$data = array(
				"itemid"		=>$this->input->post("itemid"),
				"uid"			=>$this->input->post("uid"),
				"timeout"		=>$this->input->post("timeout"),

			);
			$this->main_model->insert_checkout_data($data);
			redirect(base_url() . "Insert/inserted");

		}
		else
		{
			//if does not pass rules
			$this->index();
		}
	}

	public function inserted()
	{
		$this->index();
	}

}
