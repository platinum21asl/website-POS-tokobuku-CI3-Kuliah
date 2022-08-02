<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Overview extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('admin/overview');
    }
    public function about()
    {
        $this->load->view('about');
    }
    public function contact()
    {
        $this->load->view('contact');
    }
    public function biodata()
    {
        $this->load->view('biodata');
    }
    public function deskripsi()
    {
        $this->load->view('deskripsi');
    }
    public function container()
    {
        $this->load->view('admin/container');
    }
}
