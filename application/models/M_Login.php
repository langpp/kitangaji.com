<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Login extends CI_Model{ 

    var $TABLE = "tbl_user";
    var $COLUMN = array(
        "id_user",
        "username",
        "email",
        "password",
        "status_user"
    );

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function read(){
        $this->db->select("*");
        $this->db->from($this->TABLE);
        $query = $this->db->get();
        return $query->result();
    }

    public function readBy($email, $password){
        $this->db->select($this->COLUMN[0].",".$this->COLUMN[1].",".$this->COLUMN[2].",".$this->COLUMN[3].",".$this->COLUMN[4]);
        $this->db->from($this->TABLE);
        $this->db->where($this->COLUMN[2], $email);
        $this->db->where($this->COLUMN[3], $password);
        $query = $this->db->get();
        return $query->row();
    }
}