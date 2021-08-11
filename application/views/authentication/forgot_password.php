<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php $this->load->view('authentication/includes/head.php'); ?>
<body class="authentication forgot-password">
 <div class="container">
  <div class="row">
   <div class="col-md-4 col-md-offset-4 authentication-form-wrapper">
	   
    <div class="company-logo">
		    <?php 
		
      $umar = $_SERVER['SERVER_NAME'];
		if($umar == "redacteuronline.com"){
			header("Location: https://ikoproject.com/admin");
				die();
		}
		if($umar == "ikoproject.com"){
            echo '<img src="https://ikoproject.com/uploads/ikoproject.png" class="img-responsive" alt="IkoProject">';
        }else{
		// <img src="https://ikoproject.com/uploads/company/85f427ebe540bb546cd90e489058e3df.png" class="img-responsive" alt="Redacteur Online">
		get_company_logo();
        } 
		?>
    

     <?php # echo get_company_logo(); ?>
	   </div>
   </div>
   <!--<div class="mtop40 authentication-form"> -->
	   <div class="col-md-4 col-md-offset-4 authentication-form">
	   
    <h1><?php echo _l('admin_auth_forgot_password_heading'); ?></h1>
    <?php echo form_open($this->uri->uri_string()); ?>
    <?php echo validation_errors('<div class="alert alert-danger text-center">', '</div>'); ?>
    <?php $this->load->view('authentication/includes/alerts'); ?>
    <?php echo render_input('email','admin_auth_forgot_password_email',set_value('email'),'email'); ?>
    <div class="form-group">
      <button type="submit" class="btn btn-info btn-block"><?php echo _l('admin_auth_forgot_password_button'); ?></button>
    </div>
    <?php echo form_close(); ?>
  </div>
</div>
</div>
</div>
</body>
</html>
