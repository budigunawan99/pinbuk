<?php
    class M_admin extends CI_Model
    {
        function __construct() {
            // Call the Model constructor
            parent::__construct();
        }

        public function masuk($email, $password){
            $query = $this->db->get_where('user',array('email'=>$email,'password' => hash('SHA256',$password)));
            return $query->num_rows();
        }

    }
