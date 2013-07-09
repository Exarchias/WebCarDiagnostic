<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Diagnostic extends CI_Controller
{

    public function __construct()
    {
	parent::__construct();
	$this->load->helper('url');
    }

    public function index()
    {
	redirect(base_url('overview'));
    }
    
    public function id($vehicle_id = '', $fun = '')
    {
	if (empty($vehicle_id))
	{
	    redirect(base_url('overview'));
	    return;
	}
	$page_type = 'diagnostic';
	$data = array(
	    'vehicle_id' => $vehicle_id,
	    'empty_link' => FALSE,
	    'function' => $fun,
	    'title' => 'Diagnostic',
	    'page_type' => $page_type
	);
	if ($fun == '')
	{
	    $fun = 'index';
	}
	$this->load->view('header', $data);
	$this->load->view('navbar');
	$this->load->view('diagnostic/nav');
	$this->load->view('diagnostic/'.$fun);
	$this->load->view('footer');
    }
}