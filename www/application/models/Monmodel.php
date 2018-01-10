<?php
class Monmodel extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function get_all_data()
        {
			$query=$this->db->query("SELECT *
                                 FROM Table_Users
								 ");
                return $query->row_array();
        }

        public function insert_data($data){
            $this->db->insert('Table_Users', $data);
        }
}
