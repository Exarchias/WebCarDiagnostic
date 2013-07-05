<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Overview extends CI_Controller
{

    public function __construct()
    {
	parent::__construct();
	$this->load->helper('url');
    }

    public function index()
    {
	$page_type = 'overview';
	$data = array(
	    'empty_link' => FALSE,
	    'title' => 'Overview',
	    'page_type' => $page_type
	);
	$this->load->view('header', $data);
	$this->load->view('navbar');
	$this->load->view($page_type);
	$this->load->view('footer');
    }

}