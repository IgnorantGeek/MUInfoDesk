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
		$this->load->view('backend/backendhome');
	}

	/**
	Uses Form Validation Library for validating fields. Creates data variable to insert into Identity table. Calls main model to insert data into table.
	*/
	public function identity_form_validation()


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
			redirect(base_url() . "Insert/identity");

		}
		else
		{
			//
			//if does not pass rules
			//create some array of the data entered
			// This is where we would need to send the data back to the new page, then autofill in the fields
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
			redirect(base_url() . "Insert/checkout");

		}
		else
		{
			//if does not pass rules
		}
	}

	public function key_list_form_validation()
	{
		$this->load->library('form_validation');
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
			redirect(base_url() . "Insert/key_list");
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
			redirect(base_url() . "Insert/available");
		}
	}

	public function item_type_form_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('typeid', 'TypeID', 'required');

		if($this->form_validation->run())
		{
			$this->load->model("main_model");
			$data = array(
				"typeid"		=>$this->input->post("typeid"),
				"description"   =>$this->input->post("description"),
			);
			$this->main_model->insert_item_types_data($data);
			redirect(base_url() . "Insert/item_type");
		}
	}
	
	public function auth_key_form_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('uid', 'UID', 'required');
		$this->form_validation->set_rules('listid', 'ListID', 'required');

		if($this->form_validation->run())
		{
			$this->load->model("main_model");
			$data = array(
				"uid"		=>$this->input->post("uid"),
				"listid"    =>$this->input->post("listid"),
			);
			$this->main_model->insert_authorized_key_data($data);
			redirect(base_url() . "Insert/auth_key");
		}
	}

	public function auth_preset_form_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('uid', 'UID', 'required');
		$this->form_validation->set_rules('presetid', 'PresetID', 'required');

		if($this->form_validation->run())
		{
			$this->load->model("main_model");
			$data = array(
				"uid"		=>$this->input->post("uid"),
				"presetid"	=>$this->input->post("presetid"),
			);
			$this->main_model->insert_authorized_preset_data($data);
			redirect(base_url() . "Insert/auth_preset");
		}
	}

	public function preset_item_form_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('presetid', 'PresetID', 'required');
		$this->form_validation->set_rules('itemid', 'ItemID', 'required');

		if($this->form_validation->run())
		{
			$this->load->model("main_model");
			$data = array(
				"presetid"	=>$this->input->post("presetid"),
				"itemid"	=>$this->input->post("itemid"),
			);
			$this->main_model->insert_preset_item_data($data);
			redirect(base_url() . "Insert/preset_item");
		}
	}

	public function preset_form_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('presetid', 'PresetID', 'required');

		if($this->form_validation->run())
		{
			$this->load->model("main_model");
			$data = array(
				"presetid"		=>$this->input->post("presetid"),
				"description"	=>$this->input->post("description"),
			);
			$this->main_model->insert_preset_data($data);
			redirect(base_url() . "Insert/preset");
		}
	}

	public function auth_key()
	{
		$this->load->view('backend/newauthorizedkey');
	}

	public function available()
	{
		$this->load->view('backend/newitem');
	}

	public function item_type()
	{
		$this->load->view('backend/newitemtype');
	}

	public function identity()
	{
		$this->load->view('backend/newuser');
	}

	public function checkout()
	{
		$this->load->view('backend/newcheckout');
	}

	public function key_list()
	{
		$this->load->view('backend/newkeylist');
	}

	public function auth_preset()
	{
		$this->load->view('backend/newauthpreset');
	}

	public function preset_item()
	{
		$this->load->view('backend/newpreset_item');
	}

	public function preset()
	{
		$this->load->view('backend/newpreset');
	}
}
