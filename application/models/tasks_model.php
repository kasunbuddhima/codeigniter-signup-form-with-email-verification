<?php

class Tasks_Model extends CI_Model{
    
    function __construc(){
        parent::__construct();
        $this->load->database();
    }
    
    
    //get all tasks assigned to a particular employee
    public function getAllTasks($empId){
        $query = $this->db->get_where('tasks',array('assigned_user' => $empID));
        
        if($query->num_rows() > 0){
            return $query->result();
        }else
            return 0;
    }
}

?>