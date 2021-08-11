<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Redaction extends ClientsController
{
    public function index()
    {
        
        $data['title'] = _l('redaction_view') . ' - ' . get_option('companyname');
        $this->data($data);
        $this->view('redaction_view');
        $this->layout();
    }
}