<?php

class Template extends MY_Controller {
    public function __construct()
    {
        parent:: __construct();
    }

    public function templateCall($data= NULL )
    {
        $this->load->view('Template/template-v',$data);
    }
}