<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
	parent::__construct();
	$this->load->helper('url');
    }

    public function index()
    {
	$page_type = 'login';
	$data = array(
	    'empty_link' => TRUE,
	    'title' => 'Login',
	    'page_type' => $page_type
	);
	$this->load->view('header', $data);
	$this->load->view('navbar');
	$this->load->view($page_type);
	$this->load->view('footer');
    }

}