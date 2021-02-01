<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{


    public function __construct()
    {
        //memanggil method kosntrukter di CI Controller
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Dinas Kominfo Batu | Home';
        $this->load->view('user/index', $data);
    
    }
}