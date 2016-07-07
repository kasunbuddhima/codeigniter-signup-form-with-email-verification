<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task_Controller extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
       
        $this->load->library('email');
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('Employee_Model');
    }
    
    public function index(){
        
        
        if(isset($_SESSION['emp_id'])){
            echo $_SESSION['emp_id'];
            $this->load->view('header');
            $this->load->view('tasks_view');
            $this->load->view('footer');
        }else{
            redirect('Login_Controller/index');
        }
        
    }
    
    public function logout(){
        
        if($this->session->has_userdata('emp_id')){
            //$this->session->unset_userdata('user_data');
            $this->session->sess_destroy();
            //unset($_SESSION['user_data']);
            echo $_SESSION['emp_id'];
            redirect('Task_Controller');
        }
        
        
    }
}