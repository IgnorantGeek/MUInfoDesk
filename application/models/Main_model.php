<?php

class Main_model extends CI_Model
{
	/**
	The following function is called to insert data into identity table.
	$data variable is array prepared in newuser.php under form_validation function.
	*/
	function insert_identity_data($data)
	{
		$this->db->insert("identity", $data);
	}

	//add function here to insert to other tables
	function insert_checkout_data($data)
	{
		$this->db->insert("checked_out_items", $data);
	}

	function insert_key_lists_data($data)
	{
		$this->db->insert("key_lists", $data);
	}

	function insert_authorized_key_data($data)
	{
		$this->db->insert("authorized_keys", $data);
	}

	function insert_available_data($data)
	{
		$this->db->insert("available_inventory", $data);
	}

	function insert_item_types_data($data)
	{
		$this->db->insert("item_types", $data);
	}
}
?>