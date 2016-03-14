<?php

class userModel extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    function login($username,$password){
        return $this->db->query("SELECT id FROM user WHERE username = '".$username."' AND password = '".$password."' AND status = 'active'")->row();
    }
}

?>