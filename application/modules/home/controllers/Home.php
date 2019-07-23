<?php 

class Home extends MY_Controller {
    function __construct()
    {
        parent:: __construct();
    }

    public function index()
    {
       $data['viewContent']='home/home-v';
       $this->template->templateCall($data);
    }
}