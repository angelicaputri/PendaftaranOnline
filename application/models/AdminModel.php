<?php

    class AdminModel extends CI_Model{
        const TABLE_NAME = 'admins';

        public function create($admin){
            $this->db->insert($this::TABLE_NAME,$admin);
        }

        public function update($admin){
            $this->db->update($this::TABLE_NAME,$admin,array('id_admin' => $admin['id_admin']));
        }

        public function findByEmail($email)
        {
            return $this->db
            ->where('email', $email)
            ->get($this::TABLE_NAME)->row_array();
        }
        public function findByUsername($username)
        {
            return $this->db
            ->where('username', $username)
            ->get($this::TABLE_NAME)->row_array();
        }

        
    }

?>