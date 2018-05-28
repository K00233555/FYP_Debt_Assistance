<?php

class User_Model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	//function to insert a complete user record all updated info contained in $user 
	public function insertUser($User){
		$flag = false;
		$this->db->insert('User',$User);
		$affectedRows = $this->db->affected_rows();
	
		if($affectedRows==0){
			$flag = false;
		}else{
			$flag= true;
		}
		return $flag;
	}

	public function getUser($UserName, $password) {                           
		$this->db->where('UserName', $UserName);
		$this->db->where('password', $password);       
		$resultSet = $this->db->get('User'); //get resultSet
		if ($resultSet->num_rows() > 0) {
			$row = $resultSet->row_array();   //return matching row from DB to controller
			return $row;
        }
        else
            return null;
	}

	//function to update a complete user record all updated info contained in $user 
	public function updateUser($user) {
		//return true/false depending on whether the update was successful or not
        if ($this->db->where('UserID', $user['UserID']) && $this->db->update('user',$user))
            return true;
        else 
            return false;
    }

	//function to retrive a user based on its userid
	public function getUserByID ($userid) {
		//query  user table using $userid as its search criteria
		$resultSet = $this->db->get_where('user',array('userid'=>$userid));
	    //if there are no rows in the resultSet then no user matched the userid
        if ($resultSet->num_rows() > 0) {
            $row = $resultSet->row_array();   //return matching row from DB to controller
            return $row;
        }
        else
            return null; //return null indicating that no users were found
	 }
}
?>