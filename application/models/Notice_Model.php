<?php

class Notice_Model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getAllNotices(){
		$query = $this->db->get('notice');
		return $query->result_array();
	}

	public function insertNotice($notice){
		$flag = false;
		$this->db->insert('Notice',$notice);
		$affectedRows = $this->db->affected_rows();
		if($affectedRows==0){
			$flag = false;
		}else{
			$flag= true;
		}
		return $flag;
	}
	
	public function updateNotice($notice) {
	//return true/false depending on whether the update was successful or not
		if ($this->db->where('noticeId', $notice['noticeId']) && $this->db->update('notice',$notice))
			return true;
		else 
			return false;
	}

	//function to delete a notice based on its noticeid
	public function deleteNotice($noticeId) {
		//delete the notice based on its noticeid
		//if the deletion is successful return true (to the controller) otherwise return false
		if ($this->db->delete('notice',array('noticeId'=>$noticeId)))
			return true;
		else
			return false;
	}

	//function to retrieve a notice based on its noticeid
	public function getNotice($noticeId) {
		//query notice table using $noticeId as its search criteria
		$resultSet = $this->db->get_where('notice',array('noticeId'=>$noticeId));
		//if there are no rows in the resultSet then no notices matched the noticeId
		if ($resultSet->num_rows() > 0) {
			$row = $resultSet->row_array();   //return matching row from DB to controller
			return $row;
		}
		else
			return null; //return null indicating that no notices were found
	}
	
	//function to retrive a notice based on userid
	public function getNoticesByUserID($userid) {
		//query  notices  table using $userid as its search criteria
		$resultSet = $this->db->get_where('Notice',array('userid'=>$userid));
		//if there are no rows in the resultSet then no notices matched the userid
		if ($resultSet->num_rows() > 0) {
			return $resultSet->result_array(); //return resultSet as an array
		}
		else
			return null; //return null indicating that no notices were found
	}
}
?>