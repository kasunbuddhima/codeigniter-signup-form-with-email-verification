<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup_Controller extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
       
        $this->load->library('email');
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('Employee_Model');
		$this->load->library('email');
    }
    
    public function index(){
		$this->load->view('header');
        $this->load->view('signup_view');
        $this->load->view('footer');
	}
    
    
    public function signup(){
        
        $this->form_validation->set_rules('txt_empname','name', 'required');
        $this->form_validation->set_rules('txt_emp_addr','address', 'trim|required');
        $this->form_validation->set_rules('txt_email','Employee email', 'trim|required|valid_email|is_unique[employee.email]');
        $this->form_validation->set_rules('txt_username','Username', 'trim|required');
        $this->form_validation->set_rules('txt_password','Password', 'required');
        $this->form_validation->set_rules('txt_confirm_password', 'Password Confirmation', 'trim|required|matches[txt_password]');
        
        if($this->form_validation->run() == false){
            $this->load->view('header');
            $this->load->view('signup_view');
            $this->load->view('footer');
            
        }else{
            //call db
            $data = array(
                'emp_name' => $this->input->post('txt_empname'),
                'address' => $this->input->post('txt_emp_addr'),
                'email' => $this->input->post('txt_email'),
                'username' => $this->input->post('txt_username'),
                'password' => md5($this->input->post('txt_password'))
            );
            
            
            if($this->Employee_Model->insertEmployee($data)){
                
                //send confirm mail
                if($this->Employee_Model->sendEmail($this->input->post('txt_email'))){
                    //redirect('Login_Controller/index');
                    //$msg = "Successfully registered with the sysytem.Conformation link has been sent to: ".$this->input->post('txt_email');
                    $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully registered. Please confirm the mail that has been sent to your email. </div>');

                    $this->load->view('header');
                    $this->load->view('signup_view');
                    $this->load->view('footer');
                }else{
                    
                    //$error = "Error, Cannot insert new user details!";
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Failed!! Please try again.</div>');
                    $this->load->view('header');
                    $this->load->view('signup_view');
                    $this->load->view('footer');
                }
                
                
            }
        }
        
    }
    
    function confirmEmail($hashcode){
        if($this->Employee_Model->verifyEmail($hashcode)){
            $this->session->set_flashdata('verify', '<div class="alert alert-success text-center">Email address is confirmed. Please login to the system</div>');
            redirect('Login_Controller/index');
        }else{
            $this->session->set_flashdata('verify', '<div class="alert alert-danger text-center">Email address is not confirmed. Please try to re-register.</div>');
            redirect('Login_Controller/index');
        }
    }
    
}