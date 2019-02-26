<?php

class Database_view extends CI_Model
{
	/**
	The following function is called to insert data into identity table.
	$data variable is array prepared in newuser.php under form_validation function.
	*/

	function can_login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('identity');

		if($query->num_rows() > 0)
		{
			//this is where the login validation will happen.
			return;
		}
		else
		{
			return false;
		}
	}

	//need to look into multiparameter delete functions. 
	//For example, when deleting from List Editors, you might want to delete
	//one entry for a single person's (UID) access to a list, but leave their 
	//access to another list. The current implementation deletes all entries with that
	//UID

	function fetch_identity()
	{
		$query = $this->db->get("identity");
		return $query;
	}

	function delete_data($id){
		$this->db->where("UID", $id);
		$this->db->delete("identity");
	}

	function fetch_checkout()
	{
		$query = $this->db->get("checked_out_items");
		return $query;
	}

	function delete_data_checkout($id)
	{
		$this->db->where("timeout", $id);
		$this->db->delete("checked_out_items");
	}

	function fetch_available()
	{
		$query = $this->db->get("available_inventory");
		return $query;
	}

	function delete_data_available($id){
		$this->db->where("itemID", $id);
		$this->db->delete("available_inventory");
	}

	function fetch_key_lists()
	{
		$query = $this->db->get("key_lists");
		return $query;
	}

	function delete_data_key_lists($id){
		$this->db->where("listID", $id);
		$this->db->delete("key_lists");
	}

	function fetch_authorized_keys()
	{
		$query = $this->db->get("authorized_keys");
		return $query;
	}

	//here is where you might want a two argument delete function. Need to see if the built in
	//delete functionality accepts 2 inpute deletes. How can we get the echo statement in this view
	//to echo two values of the row we selected to delete?

	//I have inserted a test feature that would delete an entry based on two parameters. Needs testing. Probably broken
	function delete_data_authorized_keys($id){
		$this->db->where("UID", $id);
		$this->db->delete("authorized_keys");
	}

	function fetch_list_editors()
	{
		$query = $this->db->get("list_editors");
		return $query;
	}

	function delete_data_list_editors($id){
		$this->db->where("UID", $id);
		$this->db->delete("list_editors");
	}

	function fetch_presets()
	{
		$query = $this->db->get("presets");
		return $query;
	}

	function delete_data_presets($id){
		$this->db->where("presetID", $id);
		$this->db->delete("presets");
	}

	function fetch_preset_items()
	{
		$query = $this->db->get("preset_items");
		return $query;
	}

	function delete_data_preset_items($id){
		$this->db->where("itemID", $id);
		$this->db->delete("preset_items");
	}

	function fetch_authorized_presets()
	{
		$query = $this->db->get("authorized_presets");
		return $query;
	}

	function delete_data_authorized_presets($id){
		$this->db->where("UID", $id);
		$this->db->delete("authorized_presets");
	}

	function fetch_item_types()
	{
		$query = $this->db->get("item_types");
		return $query;
	}

	function delete_data_item_types($id){
		$this->db->where("typeID", $id);
		$this->db->delete("item_types");
	}
}
?>