<?php $this->load->view('header'); ?>
<!-- <?php # $this->load->view('Correctionheader'); ?> -->

<main>
 <article>
<script>
 var loggedIn="<?php echo !is_client_logged_in()?"false":"true"; ?>";

</script>
	 <!-- Start Multiform HTML -->
 <section class="multi_step_form">  
 
 <form id="msform" style="max-width:100%;"> 
   <!-- Tittle -->
   <!-- <div class="tittle">
	 <h2>Verification Process</h2>
	 <p>In order to use this service, you have to complete this verification process</p>
   </div> -->
   <!-- progressbar -->
   <ul id="progressbar">
	 <li class="active">1 Description</li>  
	 <li>2 Identification</li> 
	 <li>3 Success</li>
   </ul>
   <style>
	 .right-side{
		 right: 4px;
    background: #66B7F7;
    position: absolute;
    /* max-height: 400px; */
    top: 100px;
    width: 305px;
    /* overflow-y: scroll; */
    border-radius: 4px;
    margin-left: 7px;
		 /*
	   right: 0;
   background: lightblue;
   position: fixed;
   max-height: 421px;
   top: 300px;
   width: 330px;
   padding: 20px;
   overflow-y:scroll;*/
	 }
	 .right-side ul li{
	   list-style-type: none;
   text-align: left;
	 }
   </style>
   
   <!-- fieldsets -->
   <fieldset type="description" id="description">
	 <h3>Commandez votre correction</h3>
	<div class="col-12 pull-left">
	 <div class="form-row"> 	
   
	   <div class="form-group col-12">  
	  
	   <div class="alert alert-warning quality-alert text-left col-8 pull-left" style="display:none;margin-left:5px;" role="alert">
	   Qualité des textes obligatoire
	   </div>
	   <label style="text-align:left;" class="col-12">
	   Qualité des textes *
	   </label>
	  

			 <label class="card" style="float:left; margin-left: 5px; width: 18rem; background:#9e9ed9; text-align:left;">
			 <div class="card-body">
			 <span style="float:left;">

			 <input type="radio" name="quality" id="qualiltyinput" value='{"name":"premier prix","value":"<?php echo $basic_price ?>"}' >
			 </span>
			   <h5>Qualité premier prix</h5>
			   <p><?php echo $basic_desc ?></p>
			 <hr>
			   <div class="col-12">
			  
			   <span>Prix au mot :</span>
				 <span class="btn btn-default" style="color: black!important;">dès <?php echo $basic_price ?> €</span>
				 
			   </div>


			 <div class="col-12">
			 
				 <span>Protection </span>
			   <span   style="color: black!important;">anti-plagiat</span>
			 
			 </div>

			   <span>Choixdes rédacteurs </span>
			   <!-- <span  style="color: black!important;">anti-plagiat</span> -->
				 
			   
			  </div>    
   </label>  






			 <label class="card  " style="float:left; margin-left: 5px; width: 18rem; background:#9e9ed9; text-align:left;margin-left:10px;" >
			 <div class="card-body">
			 <span style="float:left;">

			 <input type="radio" name="quality" id="qualityinput"
			 value='{"name":"Standard","value":<?php echo $standard_price ?>}'
			 >
			 </span>
			   <h5>Qualité standard</h5>
			   <p><?php echo $standard_desc ?></p>
			   <hr>
			   <div class="col-12">
			  
			   <span>Prix au mot :</span>
				 <span class="btn btn-default" style="color: black!important;">dès <?php echo $standard_price ?> €</span>
			   </div>


			 <div class="col-12">
			 
				 <span>Protection </span>
			   <span   style="color: black!important;">anti-plagiat</span>
			 
			 </div>

			   <span>Grand Choixde rédacteurs </span>
			   <!-- <span  style="color: black!important;">anti-plagiat</span> -->
				 
			   <span>Expertise approfondie</span>
			   
				 
			  </div>    

   </label>  



   
   <label class="card  " style="float:left; margin-left: 5px; width: 18rem; background:#9e9ed9; text-align:left;margin-left:10px;" >
			 <div class="card-body">
			 <span style="float:left;">

			 <input type="radio" name="quality" id="qualityinput"
			 value='{"name":"Professionnelle","value":<?php echo $professional_price ?>}'>
			 </span>
			   <h5>Qualité professionnelle</h5>
			   <p><?php echo $professional_desc ?></p>
			   <hr>
			   <div class="col-12">
			  
			   <span>Prix au mot :</span>
				 <span class="btn btn-default" style="color: black!important;">dès <?php echo $professional_price ?> €</span>
			   </div>


			 <div class="col-12">
			 
				 <span>Protection </span>
			   <span   style="color: black!important;">anti-plagiat</span>
			 
			 </div>

			   <span>Grand Choixde rédacteurs </span>
			   <!-- <span  style="color: black!important;">anti-plagiat</span> -->
				 
			   <span>Expertise approfondie</span>
			   
				 
			  </div>    

   </label>  
<br>
   
   



   
		  



   <style>

	 .badge{
	   float: right;
	 }
   </style>
   <!-- <div class="alert alert-warning supplémentaires-alert text-left col-8 " style="display:none;" role="alert">
   Supplémentaires  obligatoire
	 </div>
   <div id="supplementariesCheckboxes" class="row">
   
   <label style="text-align:left;" class="col-12">
			 
   Options supplémentaires
				   </label>
	 
	   
				   <label class="card" style="width: 29rem;  text-align:left;  margin:5px;">
				   <div class="card-body">

				   <span style="float:left;">
				   <input type="checkbox"
				   name="supplementaries[]" id="formatedhtml"
			 value='{"name":"Formated HTML","value":10.00}'>
				   </span>

					 <h5 style="color:black;">Formatage HTML</h5>
					 <span class="badge badge-secondary">+ 10,00 €</span>
					 <p  style="color:black;">Votre texte sera formaté en HTML avec les balises de titre (H1, H2 etc.), 
					   des paragraphes (P), et si vous le souhaitez du gras ou de l'italique.</p>
					</div>    
		 </label>  

		 
		 <label class="card" style="width: 29rem;  text-align:left; margin:5px;">
				   <div class="card-body">

				   <span style="float:left;">
				   <input type="checkbox"  name="supplementaries[]" id="optimizedseo"
												 value='{"name":"Optimisation SEO","value":10.00}'>
				   </span>

					 <h5 style="color:black;">Optimisation SEO</h5>
					 <span class="badge badge-secondary">+ 10,00 €</span>
					 
					 <p  style="color:black;">Votre texte sera optimisé pour le référencement. Précisez jusqu'à 3 mots-clés ou champs lexicaux dans la description de chaque texte.</p>
				   
					   
					</div>    
	 
		 </label> 
		 
		 
		 <label class="card" style="width: 29rem;  text-align:left; margin:5px;">
				   <div class="card-body">

				   <span style="float:left;">
				   <input type="checkbox"  name="supplementaries[]" id="confidential"
												 value='{"name":"Commande confidentielle","value":10.00}'>
				   </span>

					 <h5 style="color:black;">Commande confidentielle</h5>
					 <span class="badge badge-secondary">+ 10,00 €</span>
					 <p  style="color:black;">Seuls les membres de Redacteur.com pourront consulter votre demande.</p>
				   
					   
					</div>    
	 
		 </label> 


		 <label class="card" style="width: 29rem;  text-align:left; margin:5px;">
				   <div class="card-body">

				   <span style="float:left;">
				   <input type="checkbox"  name="supplementaries[]" id="documentation"
												 value='{"name":"Recherche et documentation","value":10.00}'>
				   </span>

					 <h5 style="color:black;">Recherche et documentation</h5>
					 <span class="badge badge-secondary">+ 10,00 €</span>
					 
					 <p  style="color:black;">À choisir si le rédacteur doit effectuer une recherche documentaire approfondie pour rédiger vos textes.</p>
				   
					   
					</div>    
	 
		 </label> 



		 
		 <label class="card" style="width: 29rem;  text-align:left; margin:5px;">
				   <div class="card-body">

				   <span style="float:left;">
				   <input type="checkbox" name="supplementaries[]" id="relecture"
												 value='{"name":"Recherche et documentation","value":10.00}'>
				   </span>

					 <h5 style="color:black;">Relecture</h5>
					 <span class="badge badge-secondary">+ 20,00 €</span>
					 
					 <p  style="color:black;">Nos équipes assurent une relecture de votre/vos texte(s) afin de faire un point sur la cohérence globale avec vos consignes et éliminer d’éventuelles inattentions.</p>
				   
					   
					</div>    
	 
		 </label> 
	   


		 
		 <label class="card" style="width: 29rem;  text-align:left; margin:5px;">
				   <div class="card-body">

				   <span style="float:left;">
				   <input type="checkbox" name="supplementaries[]" id="personalized"
												 value='{"name":"Accompagnement personnalisé","value":20.00}'>
				   </span>

					 <h5 style="color:black;">Accompagnement personnalisé</h5>
					 <span class="badge badge-secondary">+ 20,00 €</span>
					 
					 <p  style="color:black;">Nos conseillères vous accompagneront et vous aideront tout au long de votre commande, du choix de vos rédacteurs jusqu'à la livraison des textes.</p>
				   
					   
					</div>    
	 
		 </label> 
</div> -->
	 <!-- <div class="done_text"> 
	   <a href="#" class="don_icon"><i class="ion-android-done"></i></a> 
	   <h6>A secret code is sent to your phone. <br>Please enter it here.</h6> 
	 </div>   -->
	 <!-- <div class="code_group"> 
	   <input type="text" class="form-control" placeholder="0">
	   <input type="text" class="form-control" placeholder="0">
	   <input type="text" class="form-control" placeholder="0">
	   <input type="text" class="form-control" placeholder="0">
	 </div>   -->
	</div>
	 </div>
	 
	 <div class="form-group col-8">
	<div class="alert alert-warning textarea-alert text-left col-8 " style="display:none;" role="alert">
	 Texte Reqis
	 </div>
	 <div class="alert alert-warning textarea-words-alert text-left col-8 " style="display:none;" role="alert">
	 les mots ne peuvent pas être inférieurs à 20
	 </div>
	   <label style="float:left;">Texte(s) à corriger</label>
	   <textarea class="form-control" id="textarea"></textarea><br>
	   <span id="display_count">0</span> words. 
	   <!-- Words left: <span id="word_left">200</span> -->
   </div>
		 
		 </div>


		 <div class="col-4 right-side" style="float:right;">
				 <ul>
				   <li><strong>Votre commande</strong></li>
				   
				   <!-- <li><label style='width:70%; float:left;'>Nombre de textes</label> 
				   <label style='width:30%; float:left;' id="textnumbers">0</label></li> -->
				   <!-- <li><label style='width:70%; float:left;'>Nombre de mots</label>
				   <label style='width:30%; float:left;' id="motsnumbers">0</label> -->
				 <!-- </li> -->







				   <li><label style='width:70%; float:left;'>Qualité</label>
				   <label style='width:30%; float:left;' id="quality">-</label>
				 </li>
				 <li><label style='width:70%; float:left;'>Words</label>
				   <span style='width:20%; float:left;' id="display_count_right">-</span>€
				 </li>
				 

				 <!-- <li><label style='width:70%; float:left;'>Option supplémentaires</label>
				 </li>
				 <div id="supplementarieslist">


				 </div> -->

				 <li><label style='width:70%; font-size:30px; float:left;'>Total</label>
				   
				 
				 <li><label style='width:70%; font-size:30px; float:left;' ><span id="total">0,00</span> €HT</label>
				   
				 </li>
				 </ul>
 </div>  
		 <!-- <div class="col-12" id="backbuttons"> -->
			   <button type="button" class="action-button previous_button">Back</button>
			   <button type="button" class="next action-button">Continue</button>  
		 <!-- </div> -->
   </fieldset>

   <fieldset type='identification'>
	 <h3>Identifiez-vous pour accéder au paiement de votre commande</h3>
   <div class="d-flex flex-row justify-content-between" id="progressBarAnimated" style="display:none!important;">
	  <div class="d-block w-100">
		 <div class="progress">
		   <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="width: 100%; background-color: rgb(52, 125, 241);"></div>
		 </div>
   </div>
   </div>

   <div class="alert alert-warning email-alert text-left col-8" style="display:none;" role="alert">
	   Email requis
	   </div>
	 <div class="form-group col-8">  
			 <label style="text-align:left; float:left;">
			 Email *
			 </label>
			 <input type="email"  id="email" name="email" class="form-control " placeholder="">
	 </div>

	   
	 <div class="alert alert-warning loginPassword-alert text-left col-8" style="display:none;" role="alert">
	 Mot de passe requis
	   </div>
	   <div class="alert alert-warning loginPassword-wrong-alert text-left col-8" style="display:none;" role="alert">
	   nom d'utilisateur ou mot de passe invalide
	   </div>
	   <div class="form-group col-8" id="passwordField" style="display:none;">  
			 <label style="text-align:left; float:left;">
			 Mot de passe* 
			 </label>
			 <input type="password"  id="loginPassword" name="password" class="form-control " placeholder="">
	   </div>

	   <div class="alert alert-warning firstname-alert text-left col-8" style="display:none;" role="alert">
	   Prénom requis
	   </div>
	   <div id="registerForm" style="display:none;">
	   <div class="form-group col-8">  
			 <label style="text-align:left; float:left;">
			 Prénom *
			 </label>
			 <input type="text"  id="firstname" name="firstname" class="form-control " placeholder="">
	   </div>

	   <div class="alert alert-warning name-alert text-left col-8" style="display:none;" role="alert">
	   Nom requis
	   </div>
	   <div class="form-group col-8">  
			 <label style="text-align:left; float:left;">
			 Nom *
			 </label>
			 <input type="text"  id="name" name="name" class="form-control " placeholder="">
	   </div>



	   <div class="alert alert-warning registerPassword-alert text-left col-8" style="display:none;" role="alert">
	   Mot de passe requis
	   </div>
	   <div class="form-group col-8">  
			 <label style="text-align:left; float:left;">
			 Mot de passe * 
			 </label>
			 <input type="password"  id="registerPassword" name="password" class="form-control " placeholder="">
	   </div>

	   <div class="alert alert-warning confirmpassword-alert text-left col-8" style="display:none;" role="alert">
	   le mot de passe ne correspond pas
	   </div>

	   <div class="form-group col-8">  
			 <label style="text-align:left; float:left;">
			 Répéter le mot de passe *
			 </label>
			 <input type="password"  id="confirmpassword"  class="form-control " placeholder="">
	   </div>


	   </div>


	   <!-- <div class="form-group col-8">  
			 <label style="text-align:left; float:left;">
			 Numéro de TVA (facultatif)
			 </label>
			 <input type="text"  id="tvanumber" name="tvanumber" class="form-control " placeholder="">
	   </div> -->
	 <!-- <div class="col-12" id="backbuttons"> -->
			   <button type="button" class="action-button previous previous_button">Back</button>
			   <button type="button" class="next action-button">Continue</button>  
	 <!-- </div> -->
   </fieldset>  
   <fieldset class="col-12" type="success">
      <div id="payment-form" >
       <h2>Complete Payment</h2><br><br>
       <div id="paypal-button-container" ></div>
      <br>
       Or <br>
       
      
       <button class="btn btn-primary" id="stripe-button">Stripe Checkout</button>
    </div>
      <div id="loading-form" style="display:none;">
      <img src="https://media1.giphy.com/media/3oEjI6SIIHBdRxXI40/200w.gif?cid=82a1493bl9zicw4fbydjdo05ebe6d0p3uffx5v089vp9gy4b&rid=200w.gif&ct=g" alt="Computer man" style="width:250px;height:200px;margin-top:-4%">
      
      <h3>Please wait while we are loading</h3>
      </div>
      <div id="success-form" style="display:none;">
<svg width="140px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 367.805 367.805" style="enable-background:new 0 0 367.805 367.805;" xml:space="preserve"> -->
<g>
	<path style="fill:#3BB54A;" d="M183.903,0.001c101.566,0,183.902,82.336,183.902,183.902s-82.336,183.902-183.902,183.902   S0.001,285.469,0.001,183.903l0,0C-0.288,82.625,81.579,0.29,182.856,0.001C183.205,0,183.554,0,183.903,0.001z"/>
	<polygon style="fill:#D4E1F4;" points="285.78,133.225 155.168,263.837 82.025,191.217 111.805,161.96 155.168,204.801    256.001,103.968  "/>
</g>
<g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
<g></g>
<g></g>
</svg>

<h3>Success</h3>
      </div>
      <!-- <div class="col-12" id="backbuttons"> -->
        <!-- <button type="button" class="action-button previous previous_button">Back</button> 
        <a href="#" class="action-button">Finish</a>  -->
      <!-- </div> -->
        
    </fieldset>  
  
   
 </form>  
 
</section> 
	 <!-- END Multiform HTML -->
 </article>
</main>

<script
    src="https://www.paypal.com/sdk/js?client-id=AThcVorTuRKyB_gHsXYRahjsF3OsfRxNOC_03IZvHPF5KuXZANTXoLG2dI__THi_g-caEpP-c_azFs7Y&currency=EUR"> // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
  </script>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="<?php echo base_url('/assets/js/scriptCorrection.js');?>"></script>

  <?php $this->load->view('footer'); ?>
<?php# $this->load->view('Correctionfooter'); ?>