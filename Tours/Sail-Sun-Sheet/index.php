<?php 

	include '../../controller/conexion.php';

?>
<!DOCTYPE HTML>
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<title>WingdingTravel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Wingding Travel Company - Transfers & Tours">
	<meta name="keywords" content="Wingding Travel & Tours" />
	<meta name="author" content="Wingding Travel & Tours" />
	<link rel="shortcut icon" type="image/x-icon" href="../../images/logo/logo_wing.png">

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../../css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../../css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="../../css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="../../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../../css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="../../css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="../../fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../../css/style.css">

	<!-- Modernizr JS -->
	<script src="../../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body onload="calculartour();" oncontextmenu="return false">
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation" style="background: #2d2f3f;">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="../../">ATV's Buggies</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="../../">Home</a></li>
								<li><a href="../../Tour/">Tours</a></li>
								<li><a href="../../Transfers/">Transportation</a></li>
								<li><a href="../../About-Us/">About Us</a></li>
								<li><a href="../../Faq/">Faq</a></li>
								<li><a href="../../#colorlib-contact">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div id="colorlib-hotel" style="padding-top: 10em;padding-bottom: 0;">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Photos</h2>
						<p>ALL excursions are only available to clients staying at hotels in Bavaro Punta Cana and Uvero Alto, not for customers of ROMANA, SANTO DOMINGO or any other area of the country.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="owl-carousel">
							<div class="item">
								<div class="hotel-entry">
									<a href="#top" class="hotel-img" style="background-image: url(images/1.jpg);">
									</a>
								</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a href="#top" class="hotel-img" style="background-image: url(images/2.JPG);">
									</a>
								</div>
							</div>
							<div class="item">
								<div class="hotel-entry">
									<a href="#top" class="hotel-img" style="background-image: url(images/3.jpg);">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-wrap" style="padding-top: 0;">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
								<div class="wrap-division">
									<div class="row">

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-12 col-sm-12">
														<div class="desc">
															<h2>Description</h2>
															<p>The guests board a beautiful sailing catamaran and receive a non-alcoholic
                                        welcome cocktail. Soon after boarding the catamaran the crew will be
                                        introduced to the passengers and give a short briefing about the cruise,
                                        including the safety rules of the boat. The boat will be sailing along the
                                        coast of Bavaro to stop in an unspoiled natural reef, where the guests will
                                        enjoy a spectacular snorkeling experience in pristine water, observing
                                        colorful fishes and coral formations.<br><br>
                                        Back on board, the bar is open for everyone. After another short
navigation, the catamaran will stop in a breathtaking natural pool. In this
chest-deep natural shallow sand bank, the guests will engage in fun
entertaining activities, sip their drinks served on our floating bar while
enjoying the fantastic scenery, or dance to the music coming from the
catamaran.<br><br>
Some more sailing will follow the natural pool visit, spiced-up with music
and dances to party up the end of the afternoon.<br><br>
A true and unique sailing experience that combines a comfortable
catamaran cruise with fun water activities and party.<br><br>
You will experience outstanding animation on board, a perfect starter for
your evening and a true Dominican way of partying.</p>
															<p><a href="#formulariocompratour" class="btn btn-primary">BOOK NOW!</a></p>
															<p>Be ready to have fun on this exhilarating adventure and live your unforgettable experience!!</p>
															<h3>Activities/destinations included:</h3>
															<p>
																- Snorkeling<br>                         - Natural pool<br> - Water games.<br>
															</p>
															<h3>ITEMS NOT INCLUDED / ADDITIONAL COSTS:</h3>
															<p>
																- Video<br>
																- Photo service
																<br></p>
																<h3>RECOMMENDED AGE TO PARTICIPATE</h3>
															<p>
																+ 3
																<br></p>
																<h3>SERVICES:</h3>
															
															<p style="color: red;">
																<strong>
																	- OPERATION DAYS: MONDAY, WEDNESDAY, FRIDAY.<br>
																	- PICK-UP FROM HOTELS: THIS TOUR IS AVAILABLE ON 3 SHIFTS (DEPENDING ON YOUR HOTEL LOCATION) <br>
																	- DURATION: 3 HOURS APPROX.<br>
																	- TIMES AVAILABLE: 3:00 PM.<BR>
																	   - DRESS CODE: SWINSUITS, BEACHWEAR<BR>
																	       - WHAT TO BRING: TOWEL, SUNBLOCK<BR>
																	            - MEALS / SNACKS INCLUDE: YES<BR>
																	                 - BEVERAGES INCLUDED: BEER, RUM, MAMAJUANA, SODAS, WATER.<BR>
																	                - BEVERAGES DESCRIPTION: (TYPE OF BEVERAGES INCLUDING BRANDS): LOCAL BEER, LOCAL RUM, COCA COLA, SPRITE, FANTA
																</strong>
															</p>
															<p style="color: red;">
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- SIDEBAR-->
					<div class="col-md-4" id="formulariocompratour">
						<div class="sidebar-wrap">
							<div class="side search-wrap animate-box">
								<h3 class="sidebar-heading">BOOK THIS TOUR</h3>
								<form name="reservartour" id="reservartour">
					              	<div class="row">
					                <div class="col-md-12">
					                  <div class="form-group">
					                    <div class="form-field">
					                      <input type="hidden" class="form-control" name="fecha" id="fecha" value="<?php echo date('m/d/Y'); ?>" readonly>
					                      <input type="hidden" class="form-control" name="tourid" id="tourid" readonly placeholder="ID">
					                      <input type="hidden" class="form-control" name="tournombre" id="tournombre" readonly>
					                      <input type="text" name="tourname" id="tourname" class="form-control" placeholder="Name">
					                    </div>
					                  </div>
					                </div>
					                <div class="col-md-12">
					                  <div class="form-group">
					                    <div class="form-field">
					                      <input type="text" name="tourApellido" id="tourApellido" class="form-control" placeholder="Lastname">
					                    </div>
					                  </div>
					                </div>
					                <div class="col-md-12">
					                  <div class="form-group">
					                    <div class="form-field">
					                      <input type="text" name="tourEmail" id="tourEmail" class="form-control" placeholder="E-mail">
					                    </div>
					                  </div>
					                </div>
					                <div class="col-md-12">
					                  <div class="form-group">
					                    <div class="form-field">
					                      <input type="text" name="tourTelefono" id="tourTelefono" class="form-control" placeholder="Phone">
					                    </div>
					                  </div>
					                </div>
					                <div class="col-md-12">
					                  <div class="form-group">
					                    <div class="form-field">
					                      <input type="text" name="tourFecha" id="tourFecha" class="form-control" placeholder="Date">
					                    </div>
					                  </div>
					                </div>
					                <div class="col-md-12">
					                  <div class="form-group">
					                    <div class="form-field">
					                     <label id="colortoursform">HOTEL</label>
					                     <select class="form-control" name="tourHotel1" id="tourHotel1" onchange="calculartour();">
					                     	<option selected disabled>==SELECT==</option>
					                     	<option style="font-weight: bold;" disabled>BAVARO</option>
					                     	<?php 

		                                      $sql_hoteles = "SELECT * FROM hoteles WHERE zona = 'bav' AND estatus = '1'";
		                                            
		                                      $resultado_sql_hoteles = $db->query($sql_hoteles);

		                                      while($hoteles=mysqli_fetch_array($resultado_sql_hoteles))
		                                      {
		                                      ?>
		                                        <option value="<?php echo $hoteles['zona'] ?>"><?php echo $hoteles['hotel'] ?></option>
		                                      <?php 

		                                        }
		                                    ?>
		                                    <option disabled></option>
		                                    <option style="font-weight: bold;" disabled>UVERO ALTO</option>
					                     	<?php 

		                                      $sql_hoteles = "SELECT * FROM hoteles WHERE zona = 'ua' AND estatus = '1'";
		                                            
		                                      $resultado_sql_hoteles = $db->query($sql_hoteles);

		                                      while($hoteles=mysqli_fetch_array($resultado_sql_hoteles))
		                                      {
		                                      ?>
		                                        <option value="<?php echo $hoteles['zona'] ?>"><?php echo $hoteles['hotel'] ?></option>
		                                      <?php 

		                                        }
		                                    ?>
					                     </select>
					                     <input type="hidden" name="tourHotel" id="tourHotel" class="form-control" readonly>
					                    </div>
					                  </div>
					                </div>
					                <div class="col-md-12">
					                  <div class="form-group">
					                    <div class="form-field">
					                     <label id="colortoursform">TYPE OF TOUR</label>
					                     <select class="form-control" name="cantidadpersonas" id="cantidadpersonas" onchange="calculartour();">
					                     	<option selected value="1">BUGGY INDIVIDUAL</option>
					                     	<option value="2">BUGGY DOBLE</option>
					                     	<option value="3">MOTO FOURWHEEL INDIVIDUAL</option>
					                     	<option value="4">MOTO FOURWHEEL DOBLE</option>
					                     	<option value="5">BUGGY FAMILIAR (3PAX)</option>
					                     	<option value="6">BUGGY FAMILIAR (4PAX)</option>
					                     	<option value="7">TERRACROSS INDIVIDUAL (Polaris)</option>
					                     </select>
					                    </div>
					                  </div>
					                </div>
					                <div class="col-md-12">
					                  <div class="form-group">
					                    <div class="form-field">
					                     <label id="colortoursform">TURN</label>
					                     <select class="form-control" name="tourTurno" id="tourTurno" onchange="calculartour();">
					                     	<option selected>8:00AM</option>
					                     	<option>12:00PM</option>
					                     	<option>3:00PM</option>
					                     </select>
					                    </div>
					                  </div>
					                </div>
					                <div class="col-md-12">
					                  <div class="form-group">
					                    <div class="form-field">
					                      <label id="colortoursform">Pick-Up from Hotels (Depending on your hotel location)</label>
					                      <input type="text" name="tourRecogidadelhotel" id="tourRecogidadelhotel" class="form-control" readonly>
					                    </div>
					                  </div>
					                </div>
					                <div class="col-md-12">
					                  <div class="form-group">
					                    <div class="form-field">
					                     <label id="colortoursform">ADULTS</label>
					                     <select class="form-control" name="tourAdultos" id="tourAdultos" onchange="calculartour();">
					                     	<?php 

		                                      $sql_adultos = "SELECT * FROM adultos WHERE estatus = '1'";
		                                            
		                                      $resultado_sql_adultos = $db->query($sql_adultos);

		                                      while($adultos=mysqli_fetch_array($resultado_sql_adultos))
		                                      {
		                                      ?>
		                                        <option><?php echo $adultos['cantidad'] ?></option>
		                                      <?php 

		                                        }
		                                    ?>		                      
					                     </select>
					                    </div>
					                  </div>
					                </div>
					                <div class="col-md-12">
					                  <div class="form-group">
					                    <div class="form-field">
					                     <label id="colortoursform">CHILDREN</label>
					                     <select class="form-control" name="tourNinos" id="tourNinos" onchange="calculartour();">
					                     	<?php 

		                                      $sql_ninos = "SELECT * FROM ninos WHERE estatus = '1'";
		                                            
		                                      $resultado_sql_ninos = $db->query($sql_ninos);

		                                      while($ninos=mysqli_fetch_array($resultado_sql_ninos))
		                                      {
		                                      ?>
		                                        <option><?php echo $ninos['cantidad'] ?></option>
		                                      <?php 

		                                        }
		                                    ?>		                      
					                     </select>
					                    </div>
					                  </div>
					                </div>
					                <div class="col-md-12">
					                  <div class="form-group">
					                    <div class="form-field">
					                     <label id="colortoursform">INFANTS</label>
					                     <select class="form-control" name="tourInfantes" id="tourInfantes">
					                     	<?php 

		                                      $sql_infantes = "SELECT * FROM infantes WHERE estatus = '1'";
		                                            
		                                      $resultado_sql_infantes = $db->query($sql_infantes);

		                                      while($infantes=mysqli_fetch_array($resultado_sql_infantes))
		                                      {
		                                      ?>
		                                        <option><?php echo $infantes['cantidad'] ?></option>
		                                      <?php 

		                                        }
		                                    ?>		                      
					                     </select>
					                    </div>
					                  </div>
					                </div>
					                <div class="col-md-12">
					                  <div class="form-group">
					                    <div class="form-field">
					                     <label id="colortoursform">TOTAL</label>
					                     <input type="text" name="tourTotal" id="tourTotal" class="form-control" readonly>
					                    </div>
					                  </div>
					                </div>
					                <div class="col-md-12">
					                  <div class="form-group">
					                    <div class="form-field">
					                     <input type="checkbox" id="tourTerminos" name="tourTerminos" onclick="calculartour();">
					                     <label for="tourTerminos" id="tourTerminos">I have read carefully and accept the terms and conditions of Wingding Travel.</label>
					                    </div>
					                  </div>
					                </div>
					                <div class="col-md-12">
					                  <input type="button" name="botonpago" id="botonpago" value="PAY NOW" class="btn btn-primary btn-block" onclick="JavaScript:generar(document.aleatorio.long.value);calculartour();">
					                </div>
					                <div id="resultadotour"></div>
					              </div>
				            	</form>
				            	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					                <input name="cmd" type="hidden" value="_xclick">
					                <input name="business" type="hidden" value="ladorableelga@gmail.com">
					                <input type="hidden" name="item_name" id="item_name">
					                <input type="hidden" name="item_number" id="item_number">
					                <input type="hidden" name="amount" id="amount">
					                <input name="currency_code" type="hidden" value="USD">
					                <input type="hidden" name="notify_url" value="https://www.wingdingtravel.com/notify.php">
					                <input class="btn btn-primary" id="paypalboton" type="submit" value="PAY NOW WITH PAYPAL" style="display: none;">
					            </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<a href="https://www.wingdingtravel.com/"><img src="../../images/logo/logo_wing_footer.png" id="logo_wingFooter"></a>
						<p>WingDing Travel is a Tour Operator based in the Dominican Republic. We are a team of passioned and professional people working and seeking for spreading the joy of living, traveling and simply smiling. We are here to make it easy for all of our customers and partners.</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="https://twitter.com/wingdingtravel" target="_blank"><i class="icon-twitter"></i></a></li>
								<li><a href="https://www.facebook.com/wingdingtravel/" target="_blank"><i class="icon-facebook"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Payment Options</h4>
						<p>We accept all major credit cards (Visa, MasterCard & American Express), you can also pay through PayPal and Stripe.</p><br>
						<h4>Price Guarantee</h4>
						<p>All prices are express in US dollar, taxes included, no hidden fee, not extra charge once at the destination.</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>About Us</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="../../Local-Market/"><i class="fa fa-chevron-circle-right"></i> Local Market</a></li>
								<li><a href="../../How-to-Book/"><i class="fa fa-chevron-circle-right"></i> How to Book</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2">
						<h4>Support</h4>
						<ul class="colorlib-footer-links">
							<li><a href="../../#colorlib-contact"><i class="fa fa-chevron-circle-right"></i> Contact</a></li>
							<li><a href="../../Faq/"><i class="fa fa-chevron-circle-right"></i> FAQ & Help</a></li>
							<li><a href="../../Terms-and-Conditions/"><i class="fa fa-chevron-circle-right"></i> Terms & Conditions</a></li>
						</ul>
					</div>

					<div class="col-md-3">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>Duverge # 53, Higüey, La Altagracia,<br> Dominican Republic</li>
							<li>Phone: +1(829)-860-3847</li>
							<li><a href="mailto:info@wingdingtravel.com">Email: info@wingdingtravel.com</a></li>
							<li><img src="../../images/pago/1.png" style="width: 15em;"></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
						Powered by <a href="https://domtecno.com/"><span style="color:#FFFFFF;">Domtecno</span></a> Copyright &copy;<script>document.write(new Date().getFullYear());</script> | All rights reserved. WingDing Travel.</span> 
						</p>
						<p style="display: none;">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> | All rights reserved | This template is made with <i class="icon-heart2" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
							<span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a href="http://pexels.com/" target="_blank">Pexels.com</a></span>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- jQuery -->
	<script src="../../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../../js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="../../js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="../../js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="../../js/jquery.magnific-popup.min.js"></script>
	<script src="../../js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="../../js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="../../js/jquery.stellar.min.js"></script>
	<!-- dependencias -->
	<script src="../../custom_js/guardarTour.js"></script>

	<!-- Main -->
	<script src="../../js/main.js"></script>

	<!-- WhatsHelp.io widget -->
	<script type="text/javascript">
	    (function () {
	        var options = {
	            facebook: "334046613632788", // Facebook page ID
	            whatsapp: "+1(829)-860-3847", // WhatsApp number
	            call: "+1(829)-860-3847", // Call phone number
	            company_logo_url: "//storage.whatshelp.io/widget/fa/fad1/fad1e42a65778650af2545fb0cc9de78/15284967_334049516965831_4846524888880441013_n.jpg", // URL of company logo (png, jpg, gif)
	            greeting_message: "Hello, how may we help you?", // Text of greeting message
	            call_to_action: "", // Call to action
	            button_color: "#FF6550", // Color of button
	            position: "left", // Position may be 'right' or 'left'
	            order: "facebook,whatsapp,call", // Order of buttons
	        };
	        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
	        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
	        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
	        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
	    })();
	</script>
	<!-- /WhatsHelp.io widget -->
	<!-- traductor de google estatico -->
		<div id="google_translate_element"></div><script type="text/javascript">
			function googleTranslateElementInit() {
				new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'es,pt', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
							}
			</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<!-- traductor de google estatico -->
	<!-- precios media luna -->
	<input type="hidden" name="precioA" id="precioA">
	<input type="hidden" name="precioN" id="precioN">
	<input type="hidden" name="precioI" id="precioI">

	<script>

		$(document).ready(function(){
			$("#tourFecha").datepicker({ startDate: "+0d" });
		});

		function calculartour(){

			//obtengo el horario para calcular la hora de recogida
			var tourTurno = document.getElementById('tourTurno').value;

			var cantidadpersonas = document.getElementById('cantidadpersonas').value;

			var price0 = document.getElementById('tourAdultos').value;
			var price2 = document.getElementById('tourNinos').value;
			var price4 = document.getElementById('tourInfantes').value;

			switch(tourTurno){
				case '8:00AM':
					document.getElementById('tourRecogidadelhotel').value = '6:40AM TO 8:00AM';
				break;
				case '12:00PM':
					document.getElementById('tourRecogidadelhotel').value = '10:40AM TO 12:00PM';
				break;
				case '3:00PM':
					document.getElementById('tourRecogidadelhotel').value = '1:40PM TO 3:00PM';
				break;
			}

			switch(cantidadpersonas){
				case '1':
					var price1 = 85;
					var price3 = 85;
					var price5 = 0;
					var totalpersons = (parseFloat(price0)+parseFloat(price2)+parseFloat(price4));

					var totaladults = (price0*price1);
			        var totalchild = (price2*price3);
			        var totalinfants = (price4*price5);
			        var totalgeneral = (totaladults + totalchild + totalinfants);

			        document.getElementById('tourTotal').value = '$' + (totalgeneral) + ' USD';
			        document.getElementById('tournombre').value = 'BUGGIE INDIVIDUAL';
			        document.getElementById('item_name').value = 'tour';
			        document.getElementById('item_number').value = document.getElementById('tourid').value;
			        document.getElementById('amount').value = (totalgeneral);

			        document.getElementById('tourHotel').value = $('select[name="tourHotel1"] option:selected').text();
				break;
				case '2':
					var price1 = 55;
					var price3 = 35;
					var price5 = 0;
					var totalpersons = (parseFloat(price0)+parseFloat(price2)+parseFloat(price4));

					var totaladults = (price0*price1);
			        var totalchild = (price2*price3);
			        var totalinfants = (price4*price5);
			        var totalgeneral = (totaladults + totalchild + totalinfants);

			        document.getElementById('tourTotal').value = '$' + (totalgeneral) + ' USD';
			        document.getElementById('tournombre').value = 'BUGGIE DOBLE';
			        document.getElementById('item_name').value = 'atvsbuggies';
			        document.getElementById('item_number').value = document.getElementById('tourid').value;
			        document.getElementById('amount').value = (totalgeneral);

			        document.getElementById('tourHotel').value = $('select[name="tourHotel1"] option:selected').text();

			        if (totalpersons % 2 != 0 ) {
					    alert('This excursion is only for couples.');
					    document.getElementById('tourAdultos').selectedIndex = '0';
					    document.getElementById('tourNinos').selectedIndex = '0';
					    document.getElementById('tourInfantes').selectedIndex = '0';
					    document.getElementById('amount').value = '0';
					    document.getElementById('tourTotal').value = '0';
					}
				break;
				case '3':
					var price1 = 85;
					var price3 = 85;
					var price5 = 0;
					var totalpersons = (parseFloat(price0)+parseFloat(price2)+parseFloat(price4));

					var totaladults = (price0*price1);
			        var totalchild = (price2*price3);
			        var totalinfants = (price4*price5);
			        var totalgeneral = (totaladults + totalchild + totalinfants);

			        document.getElementById('tourTotal').value = '$' + (totalgeneral) + ' USD';
			        document.getElementById('tournombre').value = 'MOTO FOURWHEEL INDIVIDUAL';
			        document.getElementById('item_name').value = 'atvsbuggies';
			        document.getElementById('item_number').value = document.getElementById('tourid').value;
			        document.getElementById('amount').value = (totalgeneral);

			        document.getElementById('tourHotel').value = $('select[name="tourHotel1"] option:selected').text();
				break;
				case '4':
					var price1 = 55;
					var price3 = 35;
					var price5 = 0;
					var totalpersons = (parseFloat(price0)+parseFloat(price2)+parseFloat(price4));

					var totaladults = (price0*price1);
			        var totalchild = (price2*price3);
			        var totalinfants = (price4*price5);
			        var totalgeneral = (totaladults + totalchild + totalinfants);

			        document.getElementById('tourTotal').value = '$' + (totalgeneral) + ' USD';
			        document.getElementById('tournombre').value = 'MOTO FOURWHEEL DOBLE';
			        document.getElementById('item_name').value = 'atvsbuggies';
			        document.getElementById('item_number').value = document.getElementById('tourid').value;
			        document.getElementById('amount').value = (totalgeneral);

			        document.getElementById('tourHotel').value = $('select[name="tourHotel1"] option:selected').text();

			        if (totalpersons % 2 != 0 ) {
					    alert('This excursion is only for couples.');
					    document.getElementById('tourAdultos').selectedIndex = '0';
					    document.getElementById('tourNinos').selectedIndex = '0';
					    document.getElementById('tourInfantes').selectedIndex = '0';
					    document.getElementById('amount').value = '0';
					    document.getElementById('tourTotal').value = '0';
					}
				break;
				case '5':
					var price1 = 50;
					var price3 = 50;
					var price5 = 0;
					var totalpersons = (parseFloat(price0)+parseFloat(price2)+parseFloat(price4));

					var totaladults = (price0*price1);
			        var totalchild = (price2*price3);
			        var totalinfants = (price4*price5);
			        var totalgeneral = (totaladults + totalchild + totalinfants);

			        document.getElementById('tourTotal').value = '$' + (totalgeneral) + ' USD';
			        document.getElementById('tournombre').value = 'BUGGY FAMILIAR (3PAX)';
			        document.getElementById('item_name').value = 'atvsbuggies';
			        document.getElementById('item_number').value = document.getElementById('tourid').value;
			        document.getElementById('amount').value = (totalgeneral);

			        document.getElementById('tourHotel').value = $('select[name="tourHotel1"] option:selected').text();

			        if (totalpersons % 3 != 0 ) {
					    alert('This tour is only for three people.');
					    document.getElementById('tourAdultos').selectedIndex = '0';
					    document.getElementById('tourNinos').selectedIndex = '0';
					    document.getElementById('tourInfantes').selectedIndex = '0';
					    document.getElementById('amount').value = '0';
					    document.getElementById('tourTotal').value = '0';
					}
				break;
				case '6':
					var price1 = 69;
					var price3 = 69;
					var price5 = 0;
					var totalpersons = (parseFloat(price0)+parseFloat(price2)+parseFloat(price4));

					var totaladults = (price0*price1);
			        var totalchild = (price2*price3);
			        var totalinfants = (price4*price5);
			        var totalgeneral = (totaladults + totalchild + totalinfants);

			        document.getElementById('tourTotal').value = '$' + (totalgeneral) + ' USD';
			        document.getElementById('tournombre').value = 'BUGGY FAMILIAR (4PAX)';
			        document.getElementById('item_name').value = 'atvsbuggies';
			        document.getElementById('item_number').value = document.getElementById('tourid').value;
			        document.getElementById('amount').value = (totalgeneral);

			        document.getElementById('tourHotel').value = $('select[name="tourHotel1"] option:selected').text();

			        if (totalpersons % 4 != 0 ) {
					    alert('This tour is only for three people.');
					    document.getElementById('tourAdultos').selectedIndex = '0';
					    document.getElementById('tourNinos').selectedIndex = '0';
					    document.getElementById('tourInfantes').selectedIndex = '0';
					    document.getElementById('amount').value = '0';
					    document.getElementById('tourTotal').value = '0';
					}
				break;
				case '7':
					var price1 = 80;
					var price3 = 80;
					var price5 = 0;
					var totalpersons = (parseFloat(price0)+parseFloat(price2)+parseFloat(price4));

					var totaladults = (price0*price1);
			        var totalchild = (price2*price3);
			        var totalinfants = (price4*price5);
			        var totalgeneral = (totaladults + totalchild + totalinfants);

			        document.getElementById('tourTotal').value = '$' + (totalgeneral) + ' USD';
			        document.getElementById('tournombre').value = 'TERRACROSS INDIVIDUAL (Polaris)';
			        document.getElementById('item_name').value = 'atvsbuggies';
			        document.getElementById('item_number').value = document.getElementById('tourid').value;
			        document.getElementById('amount').value = (totalgeneral);

			        document.getElementById('tourHotel').value = $('select[name="tourHotel1"] option:selected').text();
				break;
			}
	  	}
	</script>
	<!--GENERADOR DE RESERVA -->
	<script>
		function generar(longitud){
		    long=parseInt(longitud);
		    var caracteres = "ABCDEFGHIJKLMNPQRTUVWXYZ12346789";
		    var contraseña = "";
		    for (i=0; i<long; i++) contraseña += caracteres.charAt(Math.floor(Math.random()*caracteres.length));
		    document.getElementById("tourid").value=contraseña;
		}
	</script>
      	<p id="reservekey" style="display: none;"></p>
        <form id="Form" name="aleatorio" method="post" action="JavaScript:generar(document.aleatorio.long.value)" >
          <input name="long" type="number" id="texto" autocomplete="off" required="" value="12" style="display: none;">
          <button type="submit" id="Form" style="display: none;">Generar</button>
        </form>
    <!--FIN GENERADOR DE RESERVA -->

	</body>
</html>

