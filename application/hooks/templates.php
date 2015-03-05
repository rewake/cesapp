<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template_hooks extends CI_Controller
{

    public function header()
    {
        if ($this->useTemplates())
            $this->load->view('templates/header');
    }

    public function footer()
    {
        if ($this->useTemplates())
            $this->load->view('templates/footer');
    }

    protected function useTemplates()
    {
        // This is a bit flawed, but will work for this test app
        return $this->uri->segment(1) != 'ajax';
    }
}