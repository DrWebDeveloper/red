
<footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-content-logo">
                    <a href="index.html"><img src="./images/logo-footer.svg" alt="Brand-Logo"></a>
                    <p>Redacteur Online est une plateforme specialisée dans la redaction de texte. Nous vous mettons en relation avec nos rédacteur afin de vous proposer le meilleurs?</p>
                </div>
                <ul class="footer-navbar">
                    <li class="footer-ul-heading"><a href="#">Nos Services</a></li>
                    <li><a href="#">Redaction</a></li>
                    <li><a href="#">Correction</a></li>
                    <li><a href="#">Traduction</a></li>
                    <li><a href="#">Transcription</a></li>
                </ul>
                <ul>
                    <li class="footer-ul-heading"><a href="#">Nous contacter</a></li>
                    <li><a href="mailto:contact@redacteuronline.com">contact@redacteuronline.com</a></li>
                    <li><a href="tel:+33699985225211">+336 99985 225211</a></li>
                    <li><a href="#">Termes et conditions</a></li>
                </ul>
            </div>
            <p class="copyright-text">Copyright 2021, All Rights Reserved</p>
        </div>
    </footer>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
 

    <script>
        $(document).ready(function () {
            $("#order_text_num").change(function (e) { 
                e.preventDefault();
                $("#t").text(" : "+ $(this).val());
                $("#ttl").text($("#order_word_num").val()* $(this).val());
            });
            $("#order_word_num").change(function (e) { 
                e.preventDefault();
                $("#w").text(" : "+ $(this).val());
                $("#ttl").text($("#order_text_num").val()* $(this).val());
            });
            $("input:radio").change(function (e) { 
                e.preventDefault();
                $("#q").text(" : "+ $(this).val());
                // alert("changed to "+ $(this).val());
            });

        });
        const navIcon = document.querySelector('.nav-icon');
        const navBar = document.querySelector('.navbar');

        navIcon.addEventListener('click', function() {
            navBar.classList.toggle('show-nav');
        });
    </script>
</body>

</html>