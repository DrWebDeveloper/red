<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Forms extends AdminController
{


    public function __construct()
    {
        parent::__construct();
        $this->forms = $this->load->model('Forms_model');
    }

    public function redaction()
    {
        if($this->input->post('submitted') == "Yes"){
            $data['no_texts']= $this->input->post('no_texts');
            $data['no_words']= $this->input->post('no_words');
            $data['basic_desc']= $this->input->post('basic_desc');
            $data['basic_price']= $this->input->post('basic_price');
            $data['standard_desc']= $this->input->post('standard_desc');
            $data['standard_price']= $this->input->post('standard_price');
            $data['professional_desc']= $this->input->post('professional_desc');
            $data['professional_price']= $this->input->post('professional_price');

            $data['box1_title']= $this->input->post('box1_title');
            $data['box1_desc']= $this->input->post('box1_desc');
            $data['box1_price']= $this->input->post('box1_price');

            $data['box2_title']= $this->input->post('box2_title');
            $data['box2_desc']= $this->input->post('box2_desc');
            $data['box2_price']= $this->input->post('box2_price');

            $data['box3_title']= $this->input->post('box3_title');
            $data['box3_desc']= $this->input->post('box3_desc');
            $data['box3_price']= $this->input->post('box3_price');

            $data['box4_title']= $this->input->post('box4_title');
            $data['box4_desc']= $this->input->post('box4_desc');
            $data['box4_price']= $this->input->post('box4_price');
            
            $data['box5_title']= $this->input->post('box5_title');
            $data['box5_desc']= $this->input->post('box5_desc');
            $data['box5_price']= $this->input->post('box5_price');
            
            $data['box6_title']= $this->input->post('box6_title');
            $data['box6_desc']= $this->input->post('box6_desc');
            $data['box6_price']= $this->input->post('box6_price');

        	$response=$this->Forms_model->saverecords($data, 1);
        	if($response==true){
                set_alert('success', _l('Redaction Form Updated Successfully'));
            $this->load->helper('url');
            redirect('admin/forms/redaction', 'refresh');
            unset($this->$data['submitted']);
            unset($data['submitted']);
            unset($_POST);
        	}
        	else{
        			echo "Insert error !";
        	}
            
        }
        // $tb = $this->load->model('Forms_model')->get('id');
        $result['data'] = $this->Forms_model->display_records(1);
        $this->load->view('admin/forms/redaction', $result);
        // $data = $tb->result();

        // foreach ($query->result() as $row) {
        //     print_r($row);
        // }
        // $umar = $this->db->query('SELECT * FROM tblforms');
        // $umar =  $this->db->table('my_table')->countAll();
        // $this->load->view('admin/forms/redaction', ["data" => $data]);
    }

    
    public function correction()
    {
        if($this->input->post('submitted') == "Yes"){
            $data['no_texts']= $this->input->post('no_texts');
            $data['no_words']= $this->input->post('no_words');
            $data['basic_desc']= $this->input->post('basic_desc');
            $data['basic_price']= $this->input->post('basic_price');
            $data['standard_desc']= $this->input->post('standard_desc');
            $data['standard_price']= $this->input->post('standard_price');
            $data['professional_desc']= $this->input->post('professional_desc');
            $data['professional_price']= $this->input->post('professional_price');

            $data['box1_title']= $this->input->post('box1_title');
            $data['box1_desc']= $this->input->post('box1_desc');
            $data['box1_price']= $this->input->post('box1_price');

            $data['box2_title']= $this->input->post('box2_title');
            $data['box2_desc']= $this->input->post('box2_desc');
            $data['box2_price']= $this->input->post('box2_price');

            $data['box3_title']= $this->input->post('box3_title');
            $data['box3_desc']= $this->input->post('box3_desc');
            $data['box3_price']= $this->input->post('box3_price');

            $data['box4_title']= $this->input->post('box4_title');
            $data['box4_desc']= $this->input->post('box4_desc');
            $data['box4_price']= $this->input->post('box4_price');
            
            $data['box5_title']= $this->input->post('box5_title');
            $data['box5_desc']= $this->input->post('box5_desc');
            $data['box5_price']= $this->input->post('box5_price');
            
            $data['box6_title']= $this->input->post('box6_title');
            $data['box6_desc']= $this->input->post('box6_desc');
            $data['box6_price']= $this->input->post('box6_price');

        	$response=$this->Forms_model->saverecords($data, 2);
        	if($response==true){
                set_alert('success', _l('Correction Form Updated Successfully'));
            $this->load->helper('url');
            redirect('admin/forms/correction', 'refresh');
            unset($this->$data['submitted']);
            unset($data['submitted']);
            unset($_POST);
        	}
        	else{
        			echo "Insert error !";
        	}
            
        }
        // $tb = $this->load->model('Forms_model')->get('id');
        $result['data'] = $this->Forms_model->display_records(2);
        $this->load->view('admin/forms/correction', $result);
        // $data = $tb->result();

        // foreach ($query->result() as $row) {
        //     print_r($row);
        // }
        // $umar = $this->db->query('SELECT * FROM tblforms');
        // $umar =  $this->db->table('my_table')->countAll();
        // $this->load->view('admin/forms/correction', ["data" => $data]);
    }

    /* List all custom fields */
    public function index()
    {

        $this->load->view('admin/forms/index');
        // if ($this->input->is_ajax_request()) {
        //     $this->app->get_table_data('custom_fields');
        // }
        // $data['title'] = _l('custom_fields');
        // $this->load->view('admin/forms/manage', $data);
    }
    public function update()
    {

        echo "Update";
    }
    public function pred()
    {
        var_dump($_POST);
        exit();
        if ($this->input->post()) {
            var_dump($_POST);
            exit();
            var_dump($this->input->post());
            $data['no_texts'] = $this->input->post('no_texts');
            $data['no_words'] = $this->input->post('no_words');
            $data['basic_desc'] = $this->input->post('basic_desc');
            $data['standard_desc'] = $this->input->post('standard_desc');
            $data['professional_desc'] = $this->input->post('professional_desc');
            $data['basic_price'] = $this->input->post('basic_price');
            $data['standard_price'] = $this->input->post('standard_price');
            $data['professional_price'] = $this->input->post('professional_price');
            $this->db->where('name', 'redaction');
            $success = $this->db->update(db_prefix() . 'forms', [$data]);
            if ($success) {
                set_alert('success', _l('updated_successfully', _l('custom_field')));
                $this->load->view('admin/forms');
            }
        }
    }

    public function field($id = '')
    {
        if ($this->input->post()) {
            if ($id == '') {
                $id = $this->forms->add($this->input->post());
                set_alert('success', _l('added_successfully', _l('custom_field')));
                echo json_encode(['id' => $id]);
                die;
            }
            $success = $this->forms->update($this->input->post(), $id);
            if (is_array($success) && isset($success['cant_change_option_custom_field'])) {
                set_alert('warning', _l('cf_option_in_use'));
            } elseif ($success === true) {
                set_alert('success', _l('updated_successfully', _l('custom_field')));
            }
            echo json_encode(['id' => $id]);
            die;
        }

        if ($id == '') {
            $title = _l('add_new', _l('custom_field_lowercase'));
        } else {
            $data['custom_field'] = $this->forms->get($id);
            $title                = _l('edit', _l('custom_field_lowercase'));
        }

        $data['pdf_fields']             = $this->pdf_fields;
        $data['client_portal_fields']   = $this->client_portal_fields;
        $data['client_editable_fields'] = $this->client_editable_fields;
        $data['title']                  = $title;
        $this->load->view('admin/custom_fields/customfield', $data);
    }

    /* Delete announcement from database */
    public function delete($id)
    {
        if (!$id) {
            redirect(admin_url('custom_fields'));
        }
        $response = $this->forms->delete($id);
        if ($response == true) {
            set_alert('success', _l('deleted', _l('custom_field')));
        } else {
            set_alert('warning', _l('problem_deleting', _l('custom_field_lowercase')));
        }
        redirect(admin_url('custom_fields'));
    }

    /* Change custom field status active or inactive */
    public function change_custom_field_status($id, $status)
    {
        if ($this->input->is_ajax_request()) {
            $this->forms->change_custom_field_status($id, $status);
        }
    }

    public function validate_default_date()
    {
        $date = strtotime($this->input->post('date'));
        $type = $this->input->post('type');

        echo json_encode([
            'valid'  => $date !== false,
            'sample' => $date ? $type == 'date_picker' ? _d(date('Y-m-d', $date)) : _dt(date('Y-m-d H:i', $date)) : null,
        ]);
    }
}
