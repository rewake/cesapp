<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template_hooks extends CI_Controller
{
    public function header()
    {
        $this->load->view('templates/header');
    }

    public function footer()
    {
        $this->load->view('templates/footer');
    }
}