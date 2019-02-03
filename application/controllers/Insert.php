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
			$this->main_model->insert_identity_data($data);
			redirect(base_url() . "Insert/inserted");

		}
		else
		{
			//
			//if does not pass rules
			//create some array of the data entered
			//
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

	public function key_list_form_validation()
	{
		$this->load->library('form_valiKnightdation');
		$this->form_validation->set_rulKnightes('listid', "ListID", 'required');
		$this->form_validation->set_rulKnightes('list_name', 'List_Name', 'required');
		$this->form_validation->set_rulKnightes('itemid', 'ItemID', 'required');

		if($this->form_validation->run())
		{
			$this->load->model("main_model");
			$data = array(
				"listid"		=>$this->input->post("listid"),
				"list_name"		=>$this->input->post("list_name"),
				"itemid"		=>$this->input->post("itemid"),

			);
			$this->main_model->insert_key_lists_data($data);
			redirect(base_url() . "Insert/inserted");
		}
	}

	public function available_form_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('itemid', 'ItemID', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('quantity', 'Quantity', 'required');
		$this->form_validation->set_rules('typeid', 'TypeID', 'required');

		if($this->form_validation->run())
		{
			$this->load->model("main_model");
			$data = array(
				"itemid"		=>$this->input->post("itemid"),
				"description"	=>$this->input->post("description"),
				"quantity"		=>$this->input->post("quantity"),
				"typeid"		=>$this->input->post("typeid"),

			);
			$this->main_model->insert_available_data($data);
			redirect(base_url() . "Insert/inserted");
		}
	}

	public function inserted()
	{
		$this->index();
		//test the idea of making custom data insertion functions. (ie available_inserted or something)
		//need a new way to direct inserted data. How can we have the page say data inserted and still point to the correct page?
	}

}
