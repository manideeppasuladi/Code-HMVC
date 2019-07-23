<?php 

class Students extends MY_Controller {
    function __construct()
    {
        parent:: __construct();
    }

    public function index()
    {
        $data['viewContent']='students/students-v';
        $this->template->templateCall($data);
    }
}