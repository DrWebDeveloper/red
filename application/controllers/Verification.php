<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Verification extends ClientsController
{
    public function index()
    {
        if (is_contact_email_verified()) {
            redirect(site_url('clients'));
        }

        $data['title'] = _l('email_verification_required');

        $this->view('verification_required');
        $this->data($data);
        $this->layout();
    }

    public function userExistance(){

        
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            
        }
        else
        {
            show_404('not-a-POST!');
            exit;
        } 
        $table = db_prefix() . 'contacts';
        $this->db->select("id");
        $this->db->from($table);
        $this->db->where(db_prefix() . 'contacts.email', $_POST["email"]??"");
        $query=$this->db->get();
        if ($query) {
            if ($query->num_rows() == 1) {
                $user        = $query->row();
                echo json_encode([
                    "message"=>"User exists",
                    "status"=>200
                ]);
                exit;
            }
        }
        echo json_encode([
            "message"=>"User doesn't exists",
            "status"=>404
        ]);


    }


    public function RegisterUser(){

        if (get_option('allow_registration') != 1 || is_client_logged_in()) {
            echo json_encode([
                "message"=>"Client Already Logged in",
                "status"=>200
            ]);
            exit;
        }

        if (get_option('company_is_required') == 1) {
            $this->form_validation->set_rules('company', _l('client_company'), 'required');
        }

        if (is_gdpr() && get_option('gdpr_enable_terms_and_conditions') == 1) {
            $this->form_validation->set_rules(
                'accept_terms_and_conditions',
                _l('terms_and_conditions'),
                'required',
                    ['required' => _l('terms_and_conditions_validation')]
            );
        }

        $this->form_validation->set_rules('firstname', _l('client_firstname'), 'required');
        $this->form_validation->set_rules('lastname', _l('client_lastname'), 'required');
        $this->form_validation->set_rules('email', _l('client_email'), 'trim|required|is_unique[' . db_prefix() . 'contacts.email]|valid_email');
        $this->form_validation->set_rules('password', _l('clients_register_password'), 'required');
        $this->form_validation->set_rules('passwordr', _l('clients_register_password_repeat'), 'required|matches[password]');

        if (show_recaptcha_in_customers_area()) {
            $this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'callback_recaptcha');
        }

        $custom_fields = get_custom_fields('customers', [
            'show_on_client_portal' => 1,
            'required'              => 1,
        ]);

        $custom_fields_contacts = get_custom_fields('contacts', [
            'show_on_client_portal' => 1,
            'required'              => 1,
        ]);

        foreach ($custom_fields as $field) {
            $field_name = 'custom_fields[' . $field['fieldto'] . '][' . $field['id'] . ']';
            if ($field['type'] == 'checkbox' || $field['type'] == 'multiselect') {
                $field_name .= '[]';
            }
            $this->form_validation->set_rules($field_name, $field['name'], 'required');
        }
        foreach ($custom_fields_contacts as $field) {
            $field_name = 'custom_fields[' . $field['fieldto'] . '][' . $field['id'] . ']';
            if ($field['type'] == 'checkbox' || $field['type'] == 'multiselect') {
                $field_name .= '[]';
            }
            $this->form_validation->set_rules($field_name, $field['name'], 'required');
        }
        if ($this->input->post()) {
            if ($this->form_validation->run() !== false) {
                $data = $this->input->post();

                define('CONTACT_REGISTERING', true);

                $clientid = $this->clients_model->add([
                       'firstname'           => $data['firstname'],
                      'lastname'            => $data['lastname'],
                      'email'               => $data['email'],
                     'password'            => $data['passwordr'],
                    //   'phonenumber'         => $data['phonenumber'],
                      #'country'             => $data['country'],
                      #'city'                => $data['city'],
                      #'address'             => $data['address'],
                      #'zip'                 => $data['zip'],
                      #'state'               => $data['state'],
                      'custom_fields'       => isset($data['custom_fields']) && is_array($data['custom_fields']) ? $data['custom_fields'] : [],
                      'default_language'    => (get_contact_language() != '') ? get_contact_language() : get_option('active_language'),
                ], true);

                if ($clientid) {
                    hooks()->do_action('after_client_register', $clientid);

                    if (get_option('customers_register_require_confirmation') == '1') {
                        send_customer_registered_email_to_administrators($clientid);

                        $this->clients_model->require_confirmation($clientid);
                        // set_alert('success', _l('customer_register_account_confirmation_approval_notice'));
                        // $this->createCustomerFiles($data,$clientid);
                        // echo json_encode([
                        //     "message"=>_l('customer_register_account_confirmation_approval_notice'),
                        //     "status"=>200
                        // ]);
                        // exit;
                        // redirect(site_url('authentication/login'));
                    }

                    $this->load->model('authentication_model');

                    $logged_in = $this->authentication_model->login(
                        $this->input->post('email'),
                        $this->input->post('password', false),
                        false,
                        false
                    );

                    $redUrl = site_url();

                    if ($logged_in) {
                        hooks()->do_action('after_client_register_logged_in', $clientid);
                        // set_alert('success', _l('clients_successfully_registered'));
                        // $this->createCustomerFiles($data,$clientid);
                      
                        // echo json_encode([
                        //     "message"=>_l('clients_successfully_registered'),
                        //     "status"=>200
                        // ]);
                        // exit;
                    } else {
                        // set_alert('warning', _l('clients_account_created_but_not_logged_in'));
                        // $redUrl = site_url('authentication/login');
                        // $this->createCustomerFiles($data,$clientid);
                        
                        // echo json_encode([
                        //     "message"=>_l('clients_successfully_registered'),
                        //     "status"=>200
                        // ]);
                        // exit;
                    }

                    send_customer_registered_email_to_administrators($clientid);
                    // redirect($redUrl);
                    // $this->createCustomerFiles($data,$clientid);
                   
                    echo json_encode([
                        "message"=>_l('clients_successfully_registered'),
                        "status"=>200
                    ]);
                    exit;
                }
            }
        }

        // $data['title']     = _l('clients_register_heading');
        // $data['bodyclass'] = 'register';
        // $this->data($data);
        // $this->view('register');
        // $this->layout();


    }
    public function LogginUser(){
        $data = $this->input->post();
        
        $this->form_validation->set_rules('password', _l('clients_login_password'), 'required');
        $this->form_validation->set_rules('email', _l('clients_login_email'), 'trim|required|valid_email');

        // if (show_recaptcha_in_customers_area()) {
        //     $this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'callback_recaptcha');
        // }
        if ($this->form_validation->run() !== false) {
            $this->load->model('Authentication_model');

            $success = $this->Authentication_model->login(
                $this->input->post('email'),
                $this->input->post('password', false),
                false,
                false
            );

            if (is_array($success) && isset($success['memberinactive'])) {

                echo json_encode([
                    "message"=>  _l('inactive_account'),
                    "status"=>404
                ]);
                exit;
            } elseif ($success == false) {
                // set_alert('danger', _l('client_invalid_username_or_password'));
                // redirect(site_url('authentication/login'));
                echo json_encode([
                    "message"=> _l('client_invalid_username_or_password'),
                    "status"=>404
                ]);
                exit;
            }
            $table = db_prefix() . 'contacts';
            $this->db->select("id");
            $this->db->from($table);
            $this->db->where(db_prefix() . 'contacts.email', $this->input->post('email'));
            $query=$this->db->get();
            if ($query) {
                if ($query->num_rows() == 1) {
                    $user        = $query->row();
                }
            }
            
            // $this->createCustomerFiles($data,$user->id);
            $this->load->model('announcements_model');
            $this->announcements_model->set_announcements_as_read_except_last_one(get_contact_user_id());


            hooks()->do_action('after_contact_login');

            echo json_encode([
                "message"=> "login Successful",
                "status"=>200
            ]);
            /*maybe_redirect_to_previous_url();*/
            // redirect('/clients');
        }

    }

    public function saveAlreadyLoggedInUser(){
       $user_id=get_client_user_id();
        $data = $this->input->post();
        // $this->createCustomerFiles($data,$user_id);
        echo json_encode([
            "message"=> "Data Saved Successfully !",
            "status"=>200
        ]);   
    }
    public function saveCustomerOrder(){
        $user_id=get_client_user_id();
         $data = $this->input->post();
         $this->createCustomerFiles($data,$user_id);
         echo json_encode([
             "message"=> "Data Saved Successfully !",
             "status"=>200
         ]);   
     }


    public function createCustomerFiles($data,$user_id){
        $textNumbers=$data["descriptionData"]["textNumbers"]??"";
        $motsNumbers=$data["descriptionData"]["motsNumbers"]??"";
        $quantityName=$data["descriptionData"]["qualityValues"]["name"]??"";
        $quantityValue=$data["descriptionData"]["qualityValues"]["value"]??"";
        $supplementary_values=$data["descriptionData"]["supplementaryValues"]??"";
        $textarea=$data["descriptionData"]["textarea"]??"";
        $total=$data["descriptionData"]["amount"]??$data["amount"]??0;
        $source=$data["descriptionData"]["source"]??$data["source"];
        $supplementaries="Supplementaries values: \n";

        if(empty($textarea)){
foreach($supplementary_values as $key=>$value){
    $supplementaries.=$value["name"].": ".$value["value"]."\n";
}
$data="
Nombre de textes que vous souhaitez faire rédiger : $textNumbers\n
Nombre de mots par texte:$motsNumbers\n
Qualité des textes : $quantityName | $quantityValue\n
$supplementaries
";
        }else{

            $data="
Qualité des textes : $quantityName | $quantityValue\n
Text: $textarea
";

        }
$fileName="uploads/clients/6/".md5(time()).".txt";
        file_put_contents(
            $fileName,
           $data
        );



        // $this->db->select("id");
        $data = array(
            "rel_id"=>$user_id,
            'rel_type' => 'customer',
            "file_name"=>$fileName,
            'filetype' => 'text/plain',
            'visible_to_customer' => 1,
            "attachment_key"=>$fileName,
            "contact_id"=>$user_id,
            "payment_source"=>$source,
            "payment_amount"=>$total,
            "payment_status"=>"completed"
    );
    
    $this->db->insert(db_prefix() . 'files', $data);
        // $this->db->from($table);
        // $this->db->where(db_prefix() . 'contacts.email', $this->input->post('email'));
        
        
    }

    public function creatCheckoutSession(){
        \Stripe\Stripe::setApiKey('sk_test_51DYAOSDmbivqJo52uGkgJIONgAzevKBR7vXwj9LaKMgf01uF0sdLt9iStJ0O9KWEsgpGAlNCiqksverlvxX6UY8u00tGSzdHTl');

$session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'name' => 'Redacteur Online',
    'amount' => $this->input->post("amount")*100,
    'currency' => 'eur',
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => base_url("/Verification/stripePaymentSuccess"),
  'cancel_url' => 'https://example.com/failure',
]);
    echo json_encode(["url"=>$session->url]);
    }

    public function stripePaymentSuccess(){
        echo "<script>window.returnValue = true;
        window.close();</script>";
    }
    public function verify($id, $key)
    {
        $contact = $this->clients_model->get_contact($id);

        if (!$contact) {
            show_404();
        }

        if (!is_null($contact->email_verified_at)) {
            set_alert('info', _l('email_already_verified'));
            redirect(site_url('clients'));
        }

        if ($contact->email_verification_key !== $key) {
            show_error(_l('invalid_verification_key'));
        }

        $timestamp_now_minus_2_days = time() - (2 * 86400);
        $contact_registered         = strtotime($contact->email_verification_sent_at);

        if ($timestamp_now_minus_2_days > $contact_registered) {
            show_error(_l('verification_key_expired'));
        }

        $this->clients_model->mark_email_as_verified($contact->id);

        // User not yet confirmed
        // from option customers_register_require_confirmation
        if (total_rows(db_prefix() . 'clients', ['userid' => $contact->userid, 'registration_confirmed' => 0]) > 0) {
            set_alert('info', _l('email_successfully_verified_but_required_admin_confirmation'));

            hooks()->do_action('contact_email_verified_but_requires_admin_confirmation', $contact);
        } else {
            set_alert('success', _l('email_successfully_verified'));

            hooks()->do_action('contact_email_verified', $contact);
        }

        $redUri = is_client_logged_in() ? 'clients' : 'authentication';
        redirect(site_url($redUri));
    }

    public function resend()
    {
        if (is_contact_email_verified() || !is_client_logged_in()) {
            redirect(site_url('clients'));
        }

        if ($this->clients_model->send_verification_email(get_contact_user_id())) {
            set_alert('success', _l('email_verification_mail_sent_successully'));
        } else {
            set_alert('danger', 'Failed to sent email verification mail, contact webmaster for more information.');
        }

        redirect(site_url('verification'));
    }
}
