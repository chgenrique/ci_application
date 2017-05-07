<?php

class test_crud_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function addPerson($pName, $pDob, $pEmail, $pFavoriteColor){
        $dataToSave = array(
            "name"=>$pName, 
            "dob"=>$pDob, 
            "email"=>$pEmail, 
            "favoriteColor"=>$pFavoriteColor);
        try{
            $this->db->insert('person', $dataToSave);
            return 1;
        } catch (Exception $e){
            return false;
        }
    }
}

