<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{


    public function __construct()
    {
        //memanggil method kosntrukter di CI Controller
        parent::__construct();
        is_logged_in();
        $this->load->model('admin/user_model');
        $this->load->model('admin/dinas_model');
    }

    public function index()
    {
        $data['title'] = 'Diskominfo Batu | Admin Users';
        // $data['user'] = $this->user_model->showUser($this->session->userdata('id_user'));
        $data['user'] = $this->user_model->getUser($this->session->userdata('email'));
        $data['users'] = $this->db->get('user')->result();
        // $data2['users'] = $this->user_model->tampilUserSaja();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        //$this->load->view('templates/datatables', $data);
        $this->load->view('admin/users/index', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/footer_dark', $data);
    }

    public function detail($id_user)
    {
        $data['title'] = 'Diskominfo Batu | Detail Users';
        $data['user'] = $this->user_model->getUser($this->session->userdata('email'));
        $data['users'] = $this->user_model->getUserDetail($id_user);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/users/detail', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/footer_dark', $data);
    }
}