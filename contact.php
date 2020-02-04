<?php
include("header.html");
?>
<!--Consultation Section-->
<section class="consult-section" style="background-image:url(images/background/consult-form-bg.jpg);">
            <div class="auto-container">
            
                <!--Styled Heading-->
                <div class="styled-heading">
                    <h2>Envienos su consulta</h2>
                </div>
                
                <figure class="man-image hidden-xs"><img src="images\resource\man-image.png" alt=""></figure>
                
                <div class="default-form consultation-form">
                	<form method="post" action="index.html">
                    	<div class="row clearfix">
                        	<div class="form-group col-md-6 col-sm-12 col-xs-12">
                            	<input type="text" name="fname" value="" placeholder="First Name" required="">
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            	<input type="text" name="lname" value="" placeholder="Last Name" required="">
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            	<input type="text" name="phone" value="" placeholder="Phone" required="">
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            	<select name="subject">
                                	<option>Criminal Law</option>
                                    <option>Family Law</option>
                                    <option>Consumer Law</option>
                                    <option>Drug Control Law</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            	<textarea name="message" placeholder="Message" required=""></textarea>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            	<button type="submit" class="theme-btn btn-style-one">Send Now</button>
                            </div>
                        </div>
                    </form>
                </div>
    	  
        	</div>
        </section>
        <br>
        <!--Map Section--> 
        <section class="map-section">
        	<!--Map Container-->
            <div class="map-outer">
            	<!--Map Canvas-->
                <iframe width="100%"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.0665893769113!2d-76.96365807084086!3d-12.16226058845816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b8f86ba402ef%3A0x21eef93b2fff194c!2sAv.%20Guillermo%20Billinghurst%201089%2C%20San%20Juan%20de%20Miraflores%2015801!5e0!3m2!1ses-419!2spe!4v1580800675229!5m2!1ses-419!2spe"  height="450" frameborder="0" style="border:5; " allowfullscreen=""></iframe>
                
            </div>
        </section><br>
<?php
include("footer.html");
?>