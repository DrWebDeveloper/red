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
		$this->load->model('Forms_model');
		$data = $this->Forms_model->get(2);
		$this->load->view('correction',[
		"basic_desc" => $data->basic_desc,
		"basic_price" => $data->basic_price,
		"standard_desc" => $data->standard_desc,
		"standard_price" => $data->standard_price,
		"professional_desc" => $data->professional_desc,
		"professional_price" => $data->professional_price,
		]);
	}
	public function redaction()
	{
		$this->load->model('Forms_model');
		$data = $this->Forms_model->get(1);
		$no_texts = explode(',', $data->no_texts);
		$no_words = explode(',', $data->no_words);
		// $basic_desc = $data->basic_desc;
		// $basic_price = $data->basic_price;
		// $standard_desc = $data->standard_desc;
		// $standard_price = $data->standard_price;
		// $professional_desc = $data->professional_desc;
		// $professional_price = $data->professional_price;
		// $box1_title = $data->box1_title;
		// $box1_desc = $data->box1_desc;
		// $box1_price = $data->box1_price;
		// $box2_title = $data->box2_title;
		// $box2_desc = $data->box2_desc;
		// $box2_price = $data->box2_price;
		// $box3_title = $data->box3_title;
		// $box3_desc = $data->box3_desc;
		// $box3_price = $data->box3_price;
		// $box4_title = $data->box4_title;
		// $box4_desc = $data->box4_desc;
		// $box4_price = $data->box4_price;
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
		$this->load->view('forms/redaction', [
			"no_texts" => $no_texts,
			"no_words" => $no_words,
			"basic_desc" => $data->basic_desc,
			"basic_price" => $data->basic_price,
			"standard_desc" => $data->standard_desc,
			"standard_price" => $data->standard_price,
			"professional_desc" => $data->professional_desc,
			"professional_price" => $data->professional_price,
			"box1_title" => $data->box1_title,
			"box1_desc" => $data->box1_desc,
			"box1_price" => $data->box1_price,
			"box2_title" => $data->box2_title,
			"box2_desc" => $data->box2_desc,
			"box2_price" => $data->box2_price,
			"box3_title" => $data->box3_title,
			"box3_desc" => $data->box3_desc,
			"box3_price" => $data->box3_price,
			"box4_title" => $data->box4_title,
			"box4_desc" => $data->box4_desc,
			"box4_price" => $data->box4_price,
			"box5_title" => $data->box5_title,
			"box5_desc" => $data->box5_desc,
			"box5_price" => $data->box5_price,
			"box6_title" => $data->box6_title,
			"box6_desc" => $data->box6_desc,
			"box6_price" => $data->box6_price
		]);
	}
	public function packs_marketing()
	{
		$this->load->view('packs-marketing');
	}
}
