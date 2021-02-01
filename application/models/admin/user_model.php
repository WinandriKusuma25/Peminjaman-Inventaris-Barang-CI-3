<?php

defined('BASEPATH') or exit('No direct script access allowed');

class user_model extends CI_Model
{
    //menampilkan user
    public function showUser($email)
    {
        $this->db->select('user.*, dinas.nama_dinas');
        $this->db->join('dinas', 'user.id_dinas = dinas.id_dinas');
        return $this->db->get('user', ['email' => $email])->result();
    }

    //menampilkan user session
    public function getUser($email)
    {
        $this->db->select('user.*, dinas.nama_dinas ,user_role.role' );
        $this->db->join('dinas', 'user.id_dinas = dinas.id_dinas');
        $this->db->join('user_role', 'user.id_role = user_role.id_role');
        return $this->db->get_where('user', ['email' => $email])->result();
    }
    
    //menampilkan user detail
    public function getUserDetail($id_user)
    {
        $this->db->select('user.*, dinas.nama_dinas,user_role.role');
        $this->db->join('dinas', 'user.id_dinas = dinas.id_dinas');
        $this->db->join('user_role', 'user.id_role = user_role.id_role');
        return $this->db->get_where('user', ['id_user' => $id_user])->result();
    }


    public function tampilUserSaja()
    {
        $usersaja = '2';
        $query = $this->db->order_by('id_user', 'DESC')->get_where('user', array('id_role' => $usersaja));
        return $query->result();
    }
}