(function($) {
    "use strict";  
    
    var base_url="/r";
    // var base_url="";
    for(var i=0;i<10;i++){
        $("#textnumbersinput").append(`<option value='${i}'>${i}</option>`)
    }
    for(var i=0;i<10;i++){
        $("#motsnumbersinput").append(`<option value='${i}'>${i}</option>`)
    }

    $("input[type='radio']").on("change",function(e){
        $(".card").css({"border":"inherit"})
        $(this).parent().parent().parent().css({"border":"2px solid blue"})
    })

    var total=0;
    var textNumbers=0;
    var motsNumbers=0;
    var supplementaryValue=0;
    var qualityValue=0;
    var qualityValues=[];
    var supplementaryValues=[];
    var words = 0;
    var wordsTotal=0;
    
    var userExistanceCheck=false;
    

    //* Form js
    function verificationForm(){
        //jQuery time
        var current_fs, next_fs, previous_fs; //fieldsets
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches

        $(".next").on("click",function () {
            
            // if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            if(loggedIn=="true"){
                next_fs = $(this).parent().next().next();
                }else{
                    // alert("this is the nexst")
                next_fs = $(this).parent().next();
            }
            
            $(".textnumbers-alert").css({
                "display":"none"
            });
            $(".motsnumbers-alert").css({
                "display":"none"
            });
            $(".textarea-alert").css({
                "display":"none"
            });
          var  return_top=false;
        
            if(current_fs.attr("type")=="description"){
                // alert($("#textnumbersinput").val())
               
                
                if($("#qualityinput").val()==""){
                    $(".quality-alert").show();
                    return_top=true;
                }

                if($("#textarea").val()==""){
                    $(".textarea-alert").show();
                    return_top=true;
                }
                if(words<=20){
                    $(".textarea-words-alert").show();
                    return_top=true;
                }

                if(return_top){
                    $("html, body").animate({ scrollTop: 200 }, "slow");
                
                     return;
                }
                total=total+wordsTotal;
            }


            if(current_fs.attr("type")=="identification"){
                $(".email-alert,.firstname-alert,.name-alert,registerPassword-alert,confirmpassword-alert").css({
                    "display":"none"
                });
                
                if($("#email").val()==""){
                    $(".email-alert").show();
                    $("html, body").animate({ scrollTop: 200 }, "slow");
                    return;
                }
                if($("#loginPassword").val()=="" && login){
                    $(".loginPassword-alert").show();
                    $("html, body").animate({ scrollTop: 200 }, "slow");
                    return;
                }
                
                if($("#firstname").val()=="" && !login){
                    $(".firstname-alert").show();
                    $("html, body").animate({ scrollTop: 200 }, "slow");
                    return;
                }
                if($("#name").val()==""  && !login){
                    $(".name-alert").show();
                    $("html, body").animate({ scrollTop: 200 }, "slow");
                    return;
                }
                if($("#registerPassword").val()=="" && !login){
                    $(".registerPassword-alert").show();
                    $("html, body").animate({ scrollTop: 200 }, "slow");
                    return;
                }
                if($("#confirmpassword").val()!==$("#confirmpassword").val() && !login){
                    $(".confirmpassword-alert").show();
                    $("html, body").animate({ scrollTop: 200 }, "slow");
                    return;
                }
                
                $("#progressBarAnimated").css({"display":"none","visibility":"hidden"});
                    loginOrRegister(current_fs,next_fs);
                    return;
            }
            
            if(current_fs.attr("type")=="description" && loggedIn=="true"){
                loginOrRegister(current_fs,next_fs);
                return;
                // alert("user already logged in")
            }
           
            // console.log(current_fs.parent().find("fieldset"))
            
            if(next_fs.attr("type")=="success"){
                $(".right-side").css({"display":"none"})
                console.log("successs");
            }
            // console.log(current_fs)
            //activate next step on progressbar using the index of next_fs
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function (now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale current_fs down to 80%
                    scale = 1 - (1 - now) * 0.2;
                    //2. bring next_fs from the right(50%)
                    left = (now * 50) + "%";
                    //3. increase opacity of next_fs to 1 as it moves in
                    opacity = 1 - now;
                    
                    current_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'left': left,
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function () {
					console.log("dosrii");
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".previous").click(function () {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            
            if(loggedIn=="true"){
            previous_fs = $(this).parent().prev().prev();
            }else{
                
                previous_fs = $(this).parent().prev();
            }

            //de-activate current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function (now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale previous_fs from 80% to 100%
                    scale = 0.8 + (1 - now) * 0.2;
                    //2. take current_fs to the right(50%) - from 0%
                    left = ((1 - now) * 50) + "%";
                    //3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        'left': left
                    });
                    previous_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function () {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".submit").click(function () {
            return false;
        })
    }; 
    
    //* Add Phone no select
    // function phoneNoselect(){
    //     if ( $('#msform').length ){   
    //         $("#phone").intlTelInput(); 
    //         $("#phone").intlTelInput("setNumber", "+880"); 
    //     };
    // }; 
    //* Select js
    // function nice_Select(){
    //     if ( $('.product_select').length ){ 
    //         $('select').niceSelect();
    //     };
    // }; 
    /*Function Calls*/  

    verificationForm ();
    // phoneNoselect ();
    // nice_Select ();

    
    function validateEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
    var login=0;

    $("#email").on("keyup",function(){
        var value=this.value;
            if(validateEmail(value)){
 $("#progressBarAnimated").css({"display":"block","visibility":"visible"});

                    var request = $.ajax({
                            url:base_url+"/verification/userExistance",
                   // url: "http://localhost:8080/r/verification/userExistance",
                    type: "POST",
                    data: {email: value},
                    dataType:"json"
                    });
                    request.done(function(msg) {
                        console.log(msg.status)
                        if(msg.status==200){
                            login=true;
                            $("#registerForm").hide();
                            $("#passwordField").show();
                        }else{
                            login=false;
                            $("#passwordField").hide();
                            $("#registerForm").show()
                        }
                $("#progressBarAnimated").css({"display":"none","visibility":"hidden"});

                    });

                    request.fail(function(jqXHR, textStatus) {
                    alert( "Request failed: " + textStatus );
                    });
            }
    })

    function loginOrRegister(current_fs,next_fs){
        var url;
        var data;
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches

        var descriptionData={
            textarea:$("#textarea").val(),
            qualityValues
        }

        

        if(login==true && loggedIn=="false"){
             url=base_url+"/Verification/LogginUser";
            //url="http://localhost:8080/r/Verification/LogginUser";
            data={
                "email":$("#email").val(),
                "password":$("#loginPassword").val(),
                descriptionData
            }
        }else if(login==false && loggedIn=="false"){
               url=base_url+"/Verification/RegisterUser";
            //url="http://localhost:8080/r/Verification/RegisterUser";
            $("#confirmpassword").val();
            data={
                "email":$("#email").val(),
                "password":$("#registerPassword").val(),
                "passwordr":$("#confirmpassword").val(),
                "firstname":$("#firstname").val(),
                "lastname":$("#name").val(),
                descriptionData
            }
        }
        else if(loggedIn=="true"){
                url=base_url+"/Verification/saveAlreadyLoggedInUser";
                data={
                    descriptionData
                }
            }


        // console.log({url,data});
        $(".loginPassword-wrong-alert").css({"display":"none"});
        var request = $.ajax({
            url:url,
            type: "POST",
            data: data,
            dataType:"json"
            });
            request.done(function(msg) {
                // console.log(msg.status)
                if(msg.status==404){
                    // if($("#confirmpassword").val()!==$("#confirmpassword").val() && !login){
                        $(".loginPassword-wrong-alert").show();
                        $("html, body").animate({ scrollTop: 200 }, "slow");
                        // return;
                    // }
                    // nom d'utilisateur ou mot de passe invalide
                }else{
                    $(".right-side").css({"display":"none"})
                    next_fs.show();
                    current_fs.animate({
                        opacity: 0
                    }, {
                        step: function (now, mx) {
                            //as the opacity of current_fs reduces to 0 - stored in "now"
                            //1. scale current_fs down to 80%
                            scale = 1 - (1 - now) * 0.2;
                            //2. bring next_fs from the right(50%)
                            left = (now * 50) + "%";
                            //3. increase opacity of next_fs to 1 as it moves in
                            opacity = 1 - now;
                            
                            current_fs.css({
                                'transform': 'scale(' + scale + ')',
                                'position': 'relative'
                            });
                            next_fs.css({
                                'left': left,
                                'opacity': opacity
                            });
                        },
                        duration: 800,
                        complete: function () {
                            current_fs.hide();
                            animating = false;
                        },
                        //this comes from the custom easing plugin
                        easing: 'easeInOutBack'
                    });
                }
                // if(msg.status==200){
                //     login=true;
                //     $("#registerForm").hide();
                //     $("#passwordField").show();
                // }else{
                //     login=false;
                //     $("#passwordField").hide();
                //     $("#registerForm").show()
                // }
        $("#progressBarAnimated").css({"display":"none","visibility":"hidden"});

            });

            request.fail(function(jqXHR, textStatus) {
            alert( "Request failed: " + textStatus );
            });
    }



    function completeOrder(source){
        var url;
        var data;
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches
        $("#loading-form").css({"display":"block"})
        var descriptionData={
 
            textarea:$("#textarea").val(),
            qualityValues
        }
            data={
                "amount":parseFloat(total).toFixed(2),
                "source":source,
                descriptionData
            }

        // console.log({url,data});
        $(".loginPassword-wrong-alert").css({"display":"none"});
        var request = $.ajax({
            url:base_url+"/Verification/saveCustomerOrder",
            type: "POST",
            data: data,
            dataType:"json"
            });
            request.done(function(msg) {
				// console.log("script main aya");
        $("#loading-form").css({"display":"none"})
        $("#payment-form").css({"display":"none"})
        $("#success-form").css({"display":"block"})
        window.location.replace(base_url + "/clients");
            
                
               

            });

            request.fail(function(jqXHR, textStatus) {
            alert( "Request failed: " + textStatus );
            });
    }

    $("#description input,#description select,textarea").on("change",function(e){
            // console.log({name:e.target.name,value:e.target.value})
            // console.log(e.target.name=="quality")
            if(e.target.name!="supplementaries[]" && e.target.name!="quality"){
                $("#"+e.target.name).html(e.target.value)
                if(e.target.name=="textnumbers"){   
                    textNumbers=e.target.value;
                }
                if(e.target.name=="motsnumbers"){   
                    motsNumbers=e.target.value;
                }
            }
            else if(e.target.name=="quality"){
                var value=JSON.parse(e.target.value );
                qualityValues=value;
                $("#"+e.target.name).html(value.name)
                qualityValue=value.value;
                console.log(qualityValue);
            }
            else if(e.target.name=="supplementaries[]"){
                console.log(supplementaryValue)
                supplementaryValue=0;
                $("#supplementarieslist").html("");
                supplementaryValues=[];
                    $('#supplementariesCheckboxes input:checked').each(function(name,element) {
                        var val=JSON.parse(element.value);
                        supplementaryValues.push(val);
                        supplementaryValue+=val.value;
                        $("#supplementarieslist").append(`
                <li><label style='width:70%; float:left;'>${val.name}</label>
                <label style='width:30%; float:left;' id="quality">${val.value} €</label>
                  </li>`)
                    });
                    
            //     var value=JSON.parse(e.target.value);
            //     supplementaries[value.name]=value.value;
            //     console.log(supplementaries)
            //    supplementaries.forEach(function( name, value ) {
            //     $("#supplementarieslist").append(`
            //     <li><label style='width:70%; float:left;'>${name}</label>
            //     <label style='width:30%; float:left;' id="quality">${value}</label>
            //       </li>
            //     `)
            //    })
                
            }
            
            total=parseFloat(qualityValue)+wordsTotal;
            console.log(total)

            $("#total").html(parseFloat(total).toFixed(2))
    })
    
paypal.Buttons({
    onClick: function() {
        // alert("cclilckls")
 
        // Show a validation error if the checkbox is not checked
        // if (!document.querySelector('#check').checked) {
        //   document.querySelector('#error').classList.remove('hidden');
        // }
      },
    createOrder: function(data, actions) {
     
      return actions.order.create({
        purchase_units: [{
          amount: {
              "currency_code": "EUR",
            value: parseFloat(total).toFixed(2),
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
          
        completeOrder("paypal");
        // This function shows a transaction success message to your buyer.
        // alert('Transaction completed by ' + details.payer.name.given_name);
      });
    }
  }).render('#paypal-button-container');


  $("#stripe-button").on("click",function(e){

e.preventDefault()
    var request = $.ajax({
        url: base_url+'/Verification/creatCheckoutSession',
//url: "http://localhost:8080/r/verification/userExistance",
type: "POST",
data: {amount: parseFloat(total).toFixed(2)},
});
request.done(function(session) {
//    return stripe.redirectToCheckout({ sessionId: session.id });
console.log(session)

var data=JSON.parse(session)
var win =window.open(data.url, 'Google', 'width=500,height=500')
var timer = setInterval(function ()
{
    if (win.closed)
    {
        clearInterval(timer);
        // alert(win.returnValue)
        if(win.returnValue==true){
        completeOrder("stripe");
        }
    }
}, 500);
});


request.fail(function(jqXHR, textStatus) {
    console.log(textStatus)
    // alert( "Request failed: " + textStatus );
    });
//     fetch(base_url+'/Verification/creatCheckoutSession', {
//         method: 'POST',
//       })
//       .then(function(response) {
//           console.log(response)
//         return response.json();
//       })
//       .then(function(session) {
//           console.log(session)
//         return stripe.redirectToCheckout({ sessionId: session.id });
//       })
//       .then(function(result) {
//         // If `redirectToCheckout` fails due to a browser or network
//         // error, you should display the localized error message to your
//         // customer using `error.message`.
//         console.log(result)
//         if (result.error) {
//           alert(result.error.message);
//         }
//       });
  })


  $("#textarea").on('keyup', function() {
    
    wordsTotal=this.value.length/100
    $("#total").html(parseFloat(total+wordsTotal).toFixed(2))

    $('#display_count_right').html(parseFloat(this.value.length/100).toFixed(2));
    if ((this.value.match(/\S+/g)) != null) {
        
      words = this.value.match(/\S+/g).length;
    }

    // if (words > 200) {
    //   // Split the string on first 200 words and rejoin on spaces
    //   var trimmed = $(this).val().split(/\s+/, 200).join(" ");
    //   // Add a space at the end to make sure more typing creates new words
    //   $(this).val(trimmed + " ");
    // }
    // else {
      $('#display_count').text(words);
    //   $('#word_left').text(200-words);
    // }
  });

})(jQuery);