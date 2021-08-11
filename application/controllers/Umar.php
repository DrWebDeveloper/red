<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Umar extends ClientsController
{
    public function index()
    {
		
    if(!is_client_logged_in()) {
		$this->load->view('homee');
        
    }else{
	redirect(site_url('clients'));
	}
        
/*        if (is_client_logged_in()) {
            redirect('/clients');
        }else{
            $this->load->view('homee');
        } 
		*/
    }
	    public function contact(){
			$this->load->view('contact');
		}
		    public function correction(){
			$this->load->view('correction');
		}
		    public function redaction(){
			$this->load->view('forms/redaction');
		}
			    public function packs_marketing(){
			$this->load->view('packs-marketing');
		}

}
