<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Umar extends ClientsController
{
	public function index()
	{

		if (!is_client_logged_in()) {
			$this->load->view('homee');
		} else {
			redirect(site_url('clients'));
		}

		/*        if (is_client_logged_in()) {
            redirect('/clients');
        }else{
            $this->load->view('homee');
        } 
		*/
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function correction()
	{
		$this->load->view('correction');
	}
	public function redaction()
	{
		$this->load->model('Forms_model');
		$data = $this->Forms_model->get(1);
		$no_texts = explode(',',$data->no_texts);    
		$no_words = explode(',',$data->no_words);    
		$prix_desc = $data->prix_desc;
		$prix_price = $data->prix_price;
		$standard_desc = $data->standard_desc;
		$standard_price = $data->standard_price;
		$professional_desc = $data->professional_desc;
		$professional_price = $data->professional_price;
		// echo "<pre>";
		// $array = json_decode(json_encode($data), true);
		// print_r($array);
		// echo "</pre>";
		// $query = $this->db->get('tblforms');
		// foreach ($query->result() as $row) {
		// 	echo "<pre>";
		// 	$array = json_decode(json_encode($row), true);
		// 	print_r($array);
		// 	echo "</pre>";
		//   }
		$this->load->view('forms/redaction',[
			"no_texts"=>$no_texts,
			"no_words"=>$no_words,
			"prix_desc"=>$prix_desc,
			"prix_price"=>$prix_price,
			"standard_desc"=>$standard_desc,
			"standard_price"=>$prix_desc,
			"professional_desc"=>$professional_desc,
			"professional_price"=>$professional_price
		]);
	}
	public function packs_marketing()
	{
		$this->load->view('packs-marketing');
	}
}
