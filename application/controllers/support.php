<?php
class Support extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('support');
	}
	
	function validate()
	{
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger" style="padding: 3px;">', '</div>');
		
		$this->form_validation->set_rules('fname', 'Full Name', 'trim|required');
		$this->form_validation->set_rules('orgname', 'Organisation Name', 'trim|required');
		$this->form_validation->set_rules('telno', 'Tel No.', 'trim|required');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('message', 'Messages', 'trim|required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			$this->surestep_model->insert_support();
			echo 'Success';
		}
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */