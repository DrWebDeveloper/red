<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rédacteur</title>
    <script src="<?php echo base_url('/assets/js/jquery.js');?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('/assets/style.css'); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <a href="<?php echo base_url(); ?>">
                    <img src="<?php echo base_url('/assets/images/logo.svg'); ?>" alt="Redacteur Online" class="brand-logo">
                </a>
                <ul class="navbar">
                    <li><a href="<?php echo base_url('/packs-marekting'); ?>">Nos Packs Marketing</a></li>
                    <li><a href="<?php echo base_url('/'); ?>">Nos Services</a></li>
                    <li><a href="<?php echo base_url('/contact'); ?>">Contact</a></li>
                    <li><a href="<?php echo base_url('/register'); ?>">S’inscrire</a></li>
                    <li><a href="<?php echo base_url('/login'); ?>">Se Connecter</a></li>
                </ul>

                <img class="nav-icon" src="./images/icon-hamburger.svg" alt="nav-icon">
            </div>
        </div>
    </header>

    <!-- Main Container -->
    <main>

        <div class="container">
            <h1>Sélectionnez vos besoins</h3>
                <div class="main-content">
                    <!-- Middle Section -->
                    <section class="middle-section">
                        <div class="text-input">
                            <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <label>Nombre de texte à rediger *</label>
                                <select required="required" aria-required="true" name="order_text_num" id="order_text_num">
                                    <option value="" label=" "></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="50">50</option>
                                    <option value="51">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="56">56</option>
                                    <option value="57">57</option>
                                    <option value="58">58</option>
                                    <option value="59">59</option>
                                    <option value="60">60</option>
                                    <option value="61">61</option>
                                    <option value="62">62</option>
                                    <option value="63">63</option>
                                    <option value="64">64</option>
                                    <option value="65">65</option>
                                    <option value="66">66</option>
                                    <option value="67">67</option>
                                    <option value="68">68</option>
                                    <option value="69">69</option>
                                    <option value="70">70</option>
                                    <option value="71">71</option>
                                    <option value="72">72</option>
                                    <option value="73">73</option>
                                    <option value="74">74</option>
                                    <option value="75">75</option>
                                    <option value="76">76</option>
                                    <option value="77">77</option>
                                    <option value="78">78</option>
                                    <option value="79">79</option>
                                    <option value="80">80</option>
                                    <option value="81">81</option>
                                    <option value="82">82</option>
                                    <option value="83">83</option>
                                    <option value="84">84</option>
                                    <option value="85">85</option>
                                    <option value="86">86</option>
                                    <option value="87">87</option>
                                    <option value="88">88</option>
                                    <option value="89">89</option>
                                    <option value="90">90</option>
                                    <option value="91">91</option>
                                    <option value="92">92</option>
                                    <option value="93">93</option>
                                    <option value="94">94</option>
                                    <option value="95">95</option>
                                    <option value="96">96</option>
                                    <option value="97">97</option>
                                    <option value="98">98</option>
                                    <option value="99">99</option>
                                    <option value="100">100</option>
                                    <option value="101">101</option>
                                    <option value="102">102</option>
                                    <option value="103">103</option>
                                    <option value="104">104</option>
                                    <option value="105">105</option>
                                    <option value="106">106</option>
                                    <option value="107">107</option>
                                    <option value="108">108</option>
                                    <option value="109">109</option>
                                    <option value="110">110</option>
                                    <option value="111">111</option>
                                    <option value="112">112</option>
                                    <option value="113">113</option>
                                    <option value="114">114</option>
                                    <option value="115">115</option>
                                    <option value="116">116</option>
                                    <option value="117">117</option>
                                    <option value="118">118</option>
                                    <option value="119">119</option>
                                    <option value="120">120</option>
                                    <option value="121">121</option>
                                    <option value="122">122</option>
                                    <option value="123">123</option>
                                    <option value="124">124</option>
                                    <option value="125">125</option>
                                    <option value="126">126</option>
                                    <option value="127">127</option>
                                    <option value="128">128</option>
                                    <option value="129">129</option>
                                    <option value="130">130</option>
                                    <option value="131">131</option>
                                    <option value="132">132</option>
                                    <option value="133">133</option>
                                    <option value="134">134</option>
                                    <option value="135">135</option>
                                    <option value="136">136</option>
                                    <option value="137">137</option>
                                    <option value="138">138</option>
                                    <option value="139">139</option>
                                    <option value="140">140</option>
                                    <option value="141">141</option>
                                    <option value="142">142</option>
                                    <option value="143">143</option>
                                    <option value="144">144</option>
                                    <option value="145">145</option>
                                    <option value="146">146</option>
                                    <option value="147">147</option>
                                    <option value="148">148</option>
                                    <option value="149">149</option>
                                    <option value="150">150</option>
                                    <option value="151">151</option>
                                    <option value="152">152</option>
                                    <option value="153">153</option>
                                    <option value="154">154</option>
                                    <option value="155">155</option>
                                    <option value="156">156</option>
                                    <option value="157">157</option>
                                    <option value="158">158</option>
                                    <option value="159">159</option>
                                    <option value="160">160</option>
                                    <option value="161">161</option>
                                    <option value="162">162</option>
                                    <option value="163">163</option>
                                    <option value="164">164</option>
                                    <option value="165">165</option>
                                    <option value="166">166</option>
                                    <option value="167">167</option>
                                    <option value="168">168</option>
                                    <option value="169">169</option>
                                    <option value="170">170</option>
                                    <option value="171">171</option>
                                    <option value="172">172</option>
                                    <option value="173">173</option>
                                    <option value="174">174</option>
                                    <option value="175">175</option>
                                    <option value="176">176</option>
                                    <option value="177">177</option>
                                    <option value="178">178</option>
                                    <option value="179">179</option>
                                    <option value="180">180</option>
                                    <option value="181">181</option>
                                    <option value="182">182</option>
                                    <option value="183">183</option>
                                    <option value="184">184</option>
                                    <option value="185">185</option>
                                    <option value="186">186</option>
                                    <option value="187">187</option>
                                    <option value="188">188</option>
                                    <option value="189">189</option>
                                    <option value="190">190</option>
                                    <option value="191">191</option>
                                    <option value="192">192</option>
                                    <option value="193">193</option>
                                    <option value="194">194</option>
                                    <option value="195">195</option>
                                    <option value="196">196</option>
                                    <option value="197">197</option>
                                    <option value="198">198</option>
                                    <option value="199">199</option>
                                    <option value="200">200</option>
                                    <option value="250">250</option>
                                    <option value="300">300</option>
                                    <option value="350">350</option>
                                    <option value="400">400</option>
                                    <option value="450">450</option>
                                    <option value="500">500</option>
                                    <option value="550">550</option>
                                    <option value="600">600</option>
                                    <option value="650">650</option>
                                    <option value="700">700</option>
                                    <option value="750">750</option>
                                    <option value="800">800</option>
                                    <option value="850">850</option>
                                    <option value="900">900</option>
                                    <option value="950">950</option>
                                    <option value="1000">1000</option>
                                </select>
                                <label>Nombre de mots par texte *</label>
                                <select required="required" aria-required="true" name="order_word_num" id="order_word_num">
                                    <option value="" label=" "></option>
                                    <option value="50">50</option>
                                    <option value="60">60</option>
                                    <option value="70">70</option>
                                    <option value="80">80</option>
                                    <option value="90">90</option>
                                    <option value="100">100</option>
                                    <option value="120">120</option>
                                    <option value="140">140</option>
                                    <option value="150">150</option>
                                    <option value="160">160</option>
                                    <option value="180">180</option>
                                    <option value="200">200</option>
                                    <option value="220">220</option>
                                    <option value="240">240</option>
                                    <option value="260">260</option>
                                    <option value="280">280</option>
                                    <option value="300">300</option>
                                    <option value="320">320</option>
                                    <option value="340">340</option>
                                    <option value="360">360</option>
                                    <option value="380">380</option>
                                    <option value="400">400</option>
                                    <option value="420">420</option>
                                    <option value="440">440</option>
                                    <option value="460">460</option>
                                    <option value="480">480</option>
                                    <option value="500">500</option>
                                    <option value="520">520</option>
                                    <option value="540">540</option>
                                    <option value="560">560</option>
                                    <option value="580">580</option>
                                    <option value="600">600</option>
                                    <option value="620">620</option>
                                    <option value="640">640</option>
                                    <option value="660">660</option>
                                    <option value="680">680</option>
                                    <option value="700">700</option>
                                    <option value="720">720</option>
                                    <option value="740">740</option>
                                    <option value="760">760</option>
                                    <option value="780">780</option>
                                    <option value="800">800</option>
                                    <option value="820">820</option>
                                    <option value="840">840</option>
                                    <option value="860">860</option>
                                    <option value="880">880</option>
                                    <option value="900">900</option>
                                    <option value="920">920</option>
                                    <option value="940">940</option>
                                    <option value="960">960</option>
                                    <option value="970">970</option>
                                    <option value="980">980</option>
                                    <option value="1000">1000</option>
                                    <option value="1050">1050</option>
                                    <option value="1100">1100</option>
                                    <option value="1150">1150</option>
                                    <option value="1200">1200</option>
                                    <option value="1250">1250</option>
                                    <option value="1300">1300</option>
                                    <option value="1350">1350</option>
                                    <option value="1400">1400</option>
                                    <option value="1450">1450</option>
                                    <option value="1500">1500</option>
                                    <option value="1550">1550</option>
                                    <option value="1600">1600</option>
                                    <option value="1650">1650</option>
                                    <option value="1700">1700</option>
                                    <option value="1750">1750</option>
                                    <option value="1800">1800</option>
                                    <option value="1850">1850</option>
                                    <option value="1900">1900</option>
                                    <option value="1950">1950</option>
                                    <option value="2000">2000</option>
                                    <option value="2100">2100</option>
                                    <option value="2200">2200</option>
                                    <option value="2300">2300</option>
                                    <option value="2400">2400</option>
                                    <option value="2500">2500</option>
                                    <option value="2600">2600</option>
                                    <option value="2700">2700</option>
                                    <option value="2800">2800</option>
                                    <option value="2900">2900</option>
                                    <option value="3000">3000</option>
                                    <option value="3300">3300</option>
                                    <option value="3500">3500</option>
                                    <option value="3800">3800</option>
                                    <option value="4000">4000</option>
                                    <option value="4500">4500</option>
                                    <option value="5000">5000</option>
                                    <option value="5500">5500</option>
                                    <option value="6000">6000</option>
                                    <option value="6500">6500</option>
                                    <option value="7000">7000</option>
                                    <option value="7500">7500</option>
                                    <option value="8000">8000</option>
                                    <option value="8500">8500</option>
                                    <option value="9000">9000</option>
                                    <option value="9300">9300</option>
                                    <option value="9500">9500</option>
                                    <option value="10000">10000</option>
                                    <option value="15000">15000</option>
                                    <option value="18000">18000</option>
                                    <option value="20000">20000</option>
                                    <option value="30000">30000</option>
                                    <option value="50000">50000</option>
                                    <option value="100000">100000</option>
                                </select>
                                <label>Qualité des textes *</label>
                                <input type="radio" name="quality" id="q1" value="prix">
                                <span>
                                    <h3>Qualité premier prix</h3>
                                        <p>Textes de qualité basique destinés à des descriptions simples et des rédactions de remplissage.</p>
                                        <h4>Prix au mot :</h4>
                                        <h5 class="word-price">dès 0,028 €</h5>
                                        <br>
                                        <h4>Protection</h4>
                                        <h5>anti-plagiat</h5>
                                        <br>
                                        <h4 class="choice">Choix<span>des rédacteurs</span></h4>
                                    </span>
                                <input type="radio" name="quality" id="q2" value="standard">
                                <span>
                                <h3>Qualité standard</h3>
                                        <p>Textes de qualité standard pour lecteurs humains et moteurs de recherche : billets de blog, fiches articles, descriptions etc.</p>
                                        <h4>Prix au mot :</h4>
                                        <h5 class="word-price word-price-two">dès 0,042 €</h5>
                                        <br>
                                        <h4>Protection</h4>
                                        <h5>anti-plagiat</h5>
                                        <br>
                                        <h4 class="choice">Grand Choix<span>de rédacteurs</span></h4>
                                        <h6>Expertise approfondie</h6>
                                </span>
                                <input type="radio" name="quality" id="q3" value="professionnelle">
                               <span>
                               <img src="./images/Bookmark.svg" alt="Bookmark">
                                        <h3>Qualité professionnelle</h3>
                                        <p>Textes de qualité supérieure pour lecteurs professionnels : billets de blog, textes marketing, textes d'actualité, rapports etc.</p>
                                        <h4>Prix au mot :</h4>
                                        <h5 class="word-price">dès 0,056 €</h5>
                                        <br>
                                        <h4>Protection</h4>
                                        <h5>anti-plagiat</h5>
                                        <br>
                                        <h4 class="choice">Meilleur Choix<span>de rédacteurs</span></h4>
                                        <br>
                                        <h4 class="choice">Service client <span>privilégié</span></h4>
                                        <br>
                                        <h6>Expertise approfondie</h6>
                               </span>
                            
                        <div class="additional-options">
                            <h2>Options supplémentaires</h2>
                            <div class="additional-options-cards">
                                <div class="additional-options-card">
                                    <div class="additional-card-heading">
                                        <h3>Formatage HTML</h3>
                                        <p>+ 10,00 €</p>
                                    </div>
                                    <p>Votre texte sera formaté en HTML avec les balises de titre (H1, H2 etc.), des paragraphes (P), et si vous le souhaitez du gras ou de l'italique.</p>
                                </div>

                                <div class="additional-options-card">
                                    <div class="additional-card-heading">
                                        <h3>Formatage HTML</h3>
                                        <p>+ 10,00 €</p>
                                    </div>
                                    <p>Votre texte sera formaté en HTML avec les balises de titre (H1, H2 etc.), des paragraphes (P), et si vous le souhaitez du gras ou de l'italique.</p>
                                </div>

                                <div class="additional-options-card">
                                    <div class="additional-card-heading">
                                        <h3>Formatage HTML</h3>
                                        <p>+ 14,90 €</p>
                                    </div>
                                    <p>Votre texte sera formaté en HTML avec les balises de titre (H1, H2 etc.), des paragraphes (P), et si vous le souhaitez du gras ou de l'italique.</p>
                                </div>

                                <div class="additional-options-card">
                                    <div class="additional-card-heading">
                                        <h3>Formatage HTML</h3>
                                        <p>+ 10,00 €</p>
                                    </div>
                                    <p>Votre texte sera formaté en HTML avec les balises de titre (H1, H2 etc.), des paragraphes (P), et si vous le souhaitez du gras ou de l'italique.</p>
                                </div>

                            </div>
                            <a href="#" class="additional-options-btn">Continuez</a>
                        </div>
                        </form>
                        </div>
                    </section>

                    <!-- SideBar -->
                    <section class="sidebar-section">
                        <div class="your-order-container">
                            <div class="your-order-container-top">
                                <h2>Votre commande</h2>
                                <h4>Nombre de textes<span id="t"></span></h4>
                                <h4>Nombre de mots<span id="w"></span></h4>
                                <div class="your-order-container-top-number">
                                    <p>Qualité </p>
                                    <p><span id="q"></span></p>
                                </div>
                                <h4>Options supplémentaires</h4>
                            </div>

                            <div class="your-order-container-bottom">
                                <h4>Total</4>
                                    <h5><span id="ttl"></span> €<span>HT</span></h5>
                                    <h6>0,00 €<span>TTC</span></h6>
                            </div>
                        </div>
                        <div class="promo-section">
                            <h3>J'ai un code promotion</h3>
                            <form>
                                <label>Code promotion</label>
                                <input type="text">

                            </form>
                        </div>
                    </section>
                </div>
        </div>
    </main>

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