<?php
//elabora query database
    class Negozio_model extends CI_Model
    {
        public function get_utente($user)
        {
            $sql= "SELECT user FROM user where user = ?"; 
            
            $query = $this->db->query($sql, array($user));
            
            return $query->row();
        }

        public function get_password($user)
        {
            $sql= "SELECT password FROM user where user = ?"; 
            
            $query = $this->db->query($sql, array($user));
            
            return $query->row();
        }

        public function get_money($user)
        {
            $sql= "SELECT icoins FROM user where user = ?"; 
            
            $query = $this->db->query($sql, array($user));
            
            return $query->row();
        }

        public function set_utente($user, $password)
        {
            $sql = "INSERT INTO user(user, password, icoins) VALUES(?,?,?)";

            $query = $this->db->query($sql, array($user, $password, 1000));
        }
    }
?>