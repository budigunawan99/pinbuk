<?php
    class M_registrasi extends CI_Model
    {
        function __construct() {
            // Call the Model constructor
            parent::__construct();
        }
         function Save($data,$table,$param)
        {
            $query=$this->db->update($table,$data,array('gid' => $param["gid"],'tahun'=>$param["tahun"]));
            return $query;
        }
        function Update($data,$tabel,$where)
        {
            $query=$this->db->update($tabel,$data,$where);
            return $query;
        }
        function Delete($tabel,$where)
        {
            $query=$this->db->query("delete from $tabel $where");
            return $query;
        }
        function Cek($table,$where)
        {
            $query=$this->db->query("select *from $table $where");
            return $query;
        }
        
        public function getUser($id){
            $query = $this->db->get_where('form_pendaftaran',array('id_form'=>$id));
            return $query->row_array();
        }

        function insert($tabel,$data)
        {
            $this->db->insert($tabel, $data);
            return $this->db->insert_id();
        }

        function activate($data, $id) {
            $this->db->where('form_pendaftaran.id_form', $id);
		    return $this->db->update('form_pendaftaran', $data);
        }
    }
?>