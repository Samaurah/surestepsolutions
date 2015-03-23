<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Surestep_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function insert_support()
    {
		$data = array(
	   'fname' =>  $this->input->post('fname'),
	   'orgname' => $this->input->post('orgname'),
	   'telno' => $this->input->post('telno'),
	   'subject' => $this->input->post('subject'),
	   'email' => $this->input->post('email'),
	   'messages' => $this->input->post('messages')
	);
	
	$this->db->insert('support', $data); 
    }

}