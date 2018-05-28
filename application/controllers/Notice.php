<?php 

class Notice extends CI_Controller {
	var $imageName;
    var $lowIncome = FALSE;
	public function __construct(){
		parent::__construct();
		$this->load->model('Notice_Model');
		$this->load->model('User_Model');
		$this->load->library('session');
		$this->load->helper('url');
	}
	
	public function index() {
		$this->load->view('index');
	}
	
	public function saveNoticeDetails($noticeId) {
		$status = $this->doUpload();
		//if the status = 1 there has been a problem uploading the image
		if ($status == 1 ) {
			$data['msg'] = "Problem Uploading Image"; //prepare the appropriate message
			//load the view with the appropriate message		
			$this->load->view('msgpage', $data);
			exit(); //exit the script
		}
		//if the status = 1 there has been a problem creating the thumbnail
		else if ($status == 2 ) {
			$data['msg'] =  "Problem With Thumbnail Creation"; //prepare the appropriate message
			exit(); //exit the script
		}
		
		if($this->session->userdata('user')){
			$user = $this->session->userdata('user');
			$userId = $user['UserID'];
		}
		$notice = array(
			"albumName" => $_POST["albumName"],
            "artistName" => $_POST["artistName"],
            "shortDescription"=> $_POST["shortDescription"],
			"longDescription"=>$_POST["longDescription"],
			"largeImage"=>$this->imageName,
			"area"=>$_POST["area"],
			"dateExp"=>$_POST["dateExp"],
			"userId"=>$userId,
			"noticeId"=>$noticeId
		);
	
		//call the function in the model to do the update and get back a boolean flag	
	    //$flag holds true/false value depending on whether the update was successful or not
        $flag = $this->Notice_Model->updateNotice($notice);
		//pass $flag to function to determine whether success/failure page should be displayed
        if($flag){
			//update session to pick up new notice data
			$data["AllNotices"] = $this->Notice_Model->getNoticesByUserID($user['UserID']);	
			$noticeData = array('noticeData'  => $data["AllNotices"]);
			$this->session->set_userdata($noticeData);
			$this->load->view("usersHomePage",$data);
		} else {
			$data['msg'] = "error on update to user details";
			$this->load->view('msgpage', $data);
        }
	}
	
	public function doEditNotice($noticeId){   
		$data['notice'] = $this->Notice_Model->getNotice($noticeId);
        if ($data['notice'] != null){
			$this->load->view("editNotice",$data);
		}
		else {
			$data['msg'] = "Error on notice update ";
		 	$this->load->view('msgpage', $data);
		 }
     }

	// function to allow the deletion of a notice based on the $noticeid
	public function deleteNotice($noticeId) {
		//call the deleteNotice function in the model
		//if the deletion has been successful prepare a success message
		//otherwise prepare a failure message
	   if($this->session->userdata('user')){
			$user = $this->session->userdata('user');
			$userId = $user['UserID'];
		}
	   if ($this->Notice_Model->deleteNotice($noticeId)){
	   		//update session to pick up new notice data
			$data["AllNotices"] = $this->Notice_Model->getNoticesByUserID($user['UserID']);	
			$noticeData = array('noticeData'  => $data["AllNotices"]);
			$this->session->set_userdata($noticeData);
			$this->load->view('usersHomePage');
		}else{
			$data['msg']= "error on delete in notice";
			$this->load->view('msgpage');
		}
    }
	
	public function doInsertNotice(){
		$this->load->view("insertNotice");
	}
	
	public function getDrillDownNoticeAndUser($noticeId) {
        $data['notice'] = $this->Notice_Model->getNotice($noticeId);
		$notice= $data['notice'];
		$data['userNotice'] = $this->User_Model->getUserByID($notice['userId']);
        if ( $data['notice'] != null)
            $this->load->view('noticeUserDetails', $data);
        else {
			$data['msg'] = "The Notice  You Searched For Could Not Be Found, Please Try Again";
		 	$this->load->view('msgpage', $data);
		 }
	}
	
	public function getDrillDownNotice($noticeId) {
        $data['notice'] = $this->Notice_Model->getNotice($noticeId);
		if ( $data['notice'] != null)
            $this->load->view('noticeDetails', $data);
        else {
			$data['msg'] = "The Notice  You Searched For Could Not Be Found, Please Try Again";
		 	$this->load->view('msgpage', $data);
		 }
    }
    
    
    public function insertAppointment(){
        echo "In Insert Appointment";
        
        
          $location = $_POST['location'];
        
        $officer = "";
        
        switch($location)
        {
            case "Limerick": $officer = "Steve von Till";
                break;
            case "Cork": $officer = "Matt Pike";
                break; 
            case "Galway": $officer = "Aaroon Turner";
                break; 
            case "Dublin": $officer = "Mark Lanegan";
                break;
                
        }
        echo $location;
        
        
        //call internal function doUpload and get back a status from it
		//$status = $this->doUpload();
		//if the status = 1 there has been a problem uploading the image
		/*if ($status == 1 ) {
			$data['msg'] = "Problem Uploading Image"; //prepare the appropriate message
			//load the view with the appropriate message		
			$this->load->view('msgpage', $data);
			exit(); //exit the script
		}
		//if the status = 1 there has been a problem creating the thumbnail
		else if ($status == 2 ) {
			$data['msg'] =  "Problem With Thumbnail Creation"; //prepare the appropriate message
			exit(); //exit the script
		} */ 
		
        
        
        $image = $_POST['location'].".jpg";
		//get user id out of session
		if($this->session->userdata('user')){
			$user = $this->session->userdata('user');
			$userId = $user['UserID'];
			$data['User'] = $user;
			$notice = array(
				"shortDescription"=> $officer,
				"longDescription"=>$location,
				"largeImage"=>$image,
				"area"=>$user['AddressLine1'],
                "dateUploaded" => $_POST["dayOfAppointment"],
				"dateExp"=>$_POST["timeOfAppointment"],
				"userId"=>$userId
			);
			$flag = $this->Notice_Model->insertNotice($notice);
		
			//update session to pick up new notice data
			$data["AllNotices"] = $this->Notice_Model->getNoticesByUserID($user['UserID']);	
			$noticeData = array('noticeData'  => $data["AllNotices"]);
			$this->session->set_userdata($noticeData);
			if($flag){
				$this->load->view('usersHomePage',$data);
			}else{
				$this->handleflag($flag);
			}
		}else{
			echo "error on user id in notice";
			exit();
		}
	}
 
	public function insertNotice(){
		//call internal function doUpload and get back a status from it
		$status = $this->doUpload();
		//if the status = 1 there has been a problem uploading the image
		if ($status == 1 ) {
			$data['msg'] = "Problem Uploading Image"; //prepare the appropriate message
			//load the view with the appropriate message		
			$this->load->view('msgpage', $data);
			exit(); //exit the script
		}
		//if the status = 1 there has been a problem creating the thumbnail
		else if ($status == 2 ) {
			$data['msg'] =  "Problem With Thumbnail Creation"; //prepare the appropriate message
			exit(); //exit the script
		}
		
		//get user id out of session
		if($this->session->userdata('user')){
			$user = $this->session->userdata('user');
			$userId = $user['UserID'];
			$data['User'] = $user;
			$notice = array(
				"shortDescription"=> $_POST["shortDescription"],
				"longDescription"=>$_POST["longDescription"],
				"largeImage"=>$this->imageName,
				"area"=>$_POST["area"],
				"dateExp"=>$_POST["dateExp"],
				"userId"=>$userId
			);
			$flag = $this->Notice_Model->insertNotice($notice);
		
			//update session to pick up new notice data
			$data["AllNotices"] = $this->Notice_Model->getNoticesByUserID($user['UserID']);	
			$noticeData = array('noticeData'  => $data["AllNotices"]);
			$this->session->set_userdata($noticeData);
			if($flag){
				$this->load->view('usersHomePage',$data);
			}else{
				$this->handleflag($flag);
			}
		}else{
			echo "error on user id in notice";
			exit();
		}
	}
	

    
	//internal function to allow the upload of an image as part of a product insertion/update
	public function doUpload() {
		//set config options for upload
		$config = array(
			'upload_path' 	=> './assets/images/notices/', //where the uploaded imgs are going
			'allowed_types' => 'gif|jpg|png', //only allow the user to upload 1 of three file types
			'overwrite'		=> 	'TRUE', //overwrite the file if it already exists
			'max_size'		=> '2000',
			'max_width'		=> '1024',
			'max_height'	=> '768'
		);
			
		//load upload library with the appropriate config options
		$this->load->library('upload', $config);
		
		//do upload and check for errors
		if ( ! $this->upload->do_upload()){
			echo "upload image";
			echo $this->upload->display_errors();
			return 1; //function stops executing here if theres a problem and returns 1
		}
		//get information from the upload function
		//all we really need from this is the image name so it can
		//be saved to the db.
		$upload_data = $this->upload->data();
		$this->imageName = $upload_data['file_name'];
		//set config options for thumbnail creation
		$config = array(
			'source_image' 		=> $upload_data['full_path'],
			'new_image' 		=> './assets/images/thumbs/',
			'width'				=> '140',
			'height'			=> '88'
		);	
				
		//load library to do the resizing and thumbnail creation
        $this->load->library('image_lib', $config);
			
		//call function resize in the image library to physically create the thumbnail	
		if (! $this->image_lib->resize()) {
			echo "make thumb nail";
			echo $this->image_lib->display_errors();
			return 2; //function stops executing here if theres a problem and returns 2
		}
		return 0; //if the upload has executed correctly the function returns 0
    
	}
	
	public function handleflag($flag){
		if($flag){
			$data["msg"] = "update saved in database";
		}else{
			$data["msg"] = "Error in database";
		}
	$this->load->view("msgpage",$data);
	}
}