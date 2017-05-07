<?php

class TestCrudController extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        //load database default
        $this->load->database('default');
        //load  helper url and helper form
        $this->load->helper(array('url','form'));
        
        //load library form_validation
        $this->load->library(array('form_validation'));
        //load model crud_model
        $this->load->model('test_crud_model');
        
    }

    public function index(){
        $this->load->view('TestCrudView');
    }
    
    public function saveData(){
        /* Set validation rule for name field in the form */ 
        $this->form_validation->set_rules('pname', 'Name', 'required');
	$this->form_validation->set_rules('pdob', 'Dob', 'required');
	$this->form_validation->set_rules('pemail', 'Email', 'required|valid_email', array('valid_email' => 'Must be a valid email'));
        $this->form_validation->set_rules('pfavoritecolor', 'Favorite Color', 'required');
	
         if ($this->form_validation->run() == FALSE) { 
            echo json_encode ( array('message'=>false, "error_array"=>$this->form_validation->error_array()));
         } else
         {
            $pName = $this->input->post('pname');
            $pDob = $this->input->post('pdob');
            $pEmail = $this->input->post('pemail');
            $pFavoriteColor = $this->input->post('pfavoritecolor');
            $this->load->model('test_crud_model'); 
            $pDob2 = date('Y-m-d',strtotime($pDob));
            // Save data
            $status = $this->test_crud_model->addPerson($pName, $pDob2, $pEmail, $pFavoriteColor);
            echo json_encode ( array('message'=>$status) );
        
         }
    }
}