<?php 

	include '../../controller/conexion.php';

?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
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
							<div id="colorlib-logo"><a href="../../">Booze Cruise</a></div>
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
									<a href="#top" class="hotel-img" style="background-image: url(images/2.jpg);">
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
															<p>Simply the MOST popular and successful excursions in Punta Cana. Bebe Catamaran party boat is only for people who love great music, friendly people, delicious tropical rum cocktails and a great party under the tropical sun! An awesome catamaran passes along the Punta Cana coastline with splendid views of locals’ hotels, white sands and swaying palm trees.</p>
															<p><a href="#formulariocompratour" class="btn btn-primary">BOOK NOW!</a></p>
															<p>The catamarans bar is well stocked with an endless supply of traditional Dominican drinks such as rum, mamajuana, local Presidente beer (drinks are included and UNLIMITED), fresh fruit and nachos are also provided while the DJ will have the catamaran rocking with great music. Whether you’re looking for something the whole family can enjoy or just a fun time for the two of you, your Catamaran tour is sure to be a memorable highlight during your stay, here, in Punta Cana. Sailing along the pristine waters of Bavaro, you’ll enjoy a fun filled day of sailing, snorkeling, and a visit to our unique natural pool.</p>
															<h3>INCLUDES:</h3>
															<p>
																- Round trip transportation<br>
																- Professional guide <br>
																- Snacks, Lunch and open bar
															</p>
															<h3>THINGS TO TAKE ON THE TOUR:</h3>
															<p>
																- Beach towels<br>
																- Sunblock <br>
																- Sunglasses <br>
																- Money (*Picture & video may be available) <br>
																- Activity/tour voucher 
															</p>
															<h3>NEVER FORGET:</h3>
															<p>
																- Be at the meeting point 10 minutes before the set pick up time.<br>
																- Present your voucher to our tour provider guide only. <br>
																- Call us from Guest Service if transportation for your activity is already 10 minutes late. <br>
																<strong>
																	- Remark: * On this tour you may be offered Pictures, Videos and souvenirs, please note WingDing Travel is not responsible for, nor sell or promote this/these items.
																</strong>
															</p>
															<p style="color: red;">
																<strong>
																	- OPERATION DAYS: MONDAY TO SUNDAY<br>
																	- PICK-UP FROM HOTELS: THIS TOUR IS AVAILABLE ON 3 SHIFTS (DEPENDING ON YOUR HOTEL LOCATION). <br>
																	- DURATION: HALF DAY (3 HOURS APPROX.)
																</strong>
															</p>
															<p style="color: red;">
																<strong>
																	**NOT AVAILABLE FOR PREGNANT.<br>
																	Note: You may be picked-up from your hotel on a minivan the transferred to a larger bus to hit to Tour.
																</strong>
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
					                     <label id="colortoursform">AMOUNT OF PEOPLE</label>
					                     <select class="form-control" name="cantidadpersonas" id="cantidadpersonas" onchange="calculartour();">
					                     	<option selected value="1">Private Booze Cruise up to 10 Pax</option>
					                     	<option value="2">Private Booze Cruise up to 25 Pax</option>
					                     	<option value="3">Private Booze Cruise up to 40 Pax or more...</option>
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
					                     <select class="form-control" name="tourInfantes" id="tourInfantes" onchange="calculartour();">
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
					                     <input type="checkbox" id="tourTerminos" name="tourTerminos">
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

		if (tourTurno == '8:00AM') {
			document.getElementById('tourRecogidadelhotel').value = '6:40AM TO 8:00AM';
		}else if (tourTurno == '12:00PM') {
			document.getElementById('tourRecogidadelhotel').value = '10:40AM TO 12:00PM';
		}
		else if (tourTurno == '3:00PM') {
			document.getElementById('tourRecogidadelhotel').value = '1:40PM TO 3:00PM';
		}

		var tourHotel1 = document.getElementById('tourHotel1').value;
		var cantidadpersonas = document.getElementById('cantidadpersonas').value;

		var adultos = document.getElementById('tourAdultos').value;
		var ninos = document.getElementById('tourNinos').value;
		var infantes = document.getElementById('tourInfantes').value;

		if ( (tourHotel1 == 'bav') && (cantidadpersonas == '1') ){
		    if (tourHotel1 != "") {
		      var price0 = document.getElementById('tourAdultos').value;
		      var price1 = 59;
		      var price2 = document.getElementById('tourNinos').value;
		      var price3 = 59;
		      var price4 = document.getElementById('tourInfantes').value;
		      var price5 = 0;
		      var totalpersons = (parseFloat(price0)+parseFloat(price2)+parseFloat(price4));

		      var totaladults = (price0*price1);
		      var totalchild = (price2*price3);
		      var totalinfants = (price4*price5);
		      var totalgeneral = (totaladults + totalchild + totalinfants);

		      document.getElementById('tourTotal').value = '$' + (totalgeneral) + ' USD';
		      document.getElementById('tournombre').value = 'Booze Cruise';
		      document.getElementById('item_name').value = 'tour';
		      document.getElementById('item_number').value = document.getElementById('tourid').value;
		      document.getElementById('amount').value = (totalgeneral);

		      document.getElementById('tourHotel').value = $('select[name="tourHotel1"] option:selected').text();

		      if (adultos >= 11 ) {
		      	document.getElementById('tourAdultos').value = '1';
		      }
		      if (ninos >= 11 ) {
		      	document.getElementById('tourNinos').value = '0';
		      }
		      if (infantes >= 11 ) {
		      	document.getElementById('tourInfantes').value = '0';
		      }

		    }
		}
		if ( (tourHotel1 == 'bav') && (cantidadpersonas == '2') ){
		    if (tourHotel1 != "") {
		      var price0 = document.getElementById('tourAdultos').value;
		      var price1 = 59;
		      var price2 = document.getElementById('tourNinos').value;
		      var price3 = 59;
		      var price4 = document.getElementById('tourInfantes').value;
		      var price5 = 0;
		      var totalpersons = (parseFloat(price0)+parseFloat(price2)+parseFloat(price4));

		      var totaladults = (price0*price1);
		      var totalchild = (price2*price3);
		      var totalinfants = (price4*price5);
		      var totalgeneral = (totaladults + totalchild + totalinfants);

		      document.getElementById('tourTotal').value = '$' + (totalgeneral) + ' USD';
		      document.getElementById('tournombre').value = 'Booze Cruise';
		      document.getElementById('item_name').value = 'boozecruise';
		      document.getElementById('item_number').value = document.getElementById('tourid').value;
		      document.getElementById('amount').value = (totalgeneral);

		      document.getElementById('tourHotel').value = $('select[name="tourHotel1"] option:selected').text();

		      if (adultos >= 26 ) {
		      	document.getElementById('tourAdultos').value = '1';
		      }
		      if (ninos >= 26 ) {
		      	document.getElementById('tourNinos').value = '0';
		      }
		      if (infantes >= 26 ) {
		      	document.getElementById('tourInfantes').value = '0';
		      }

		    }
		}
		if ( (tourHotel1 == 'bav') && (cantidadpersonas == '3') ){
		    if (tourHotel1 != "") {
		      var price0 = document.getElementById('tourAdultos').value;
		      var price1 = 59;
		      var price2 = document.getElementById('tourNinos').value;
		      var price3 = 59;
		      var price4 = document.getElementById('tourInfantes').value;
		      var price5 = 0;
		      var totalpersons = (parseFloat(price0)+parseFloat(price2)+parseFloat(price4));

		      var totaladults = (price0*price1);
		      var totalchild = (price2*price3);
		      var totalinfants = (price4*price5);
		      var totalgeneral = (totaladults + totalchild + totalinfants);

		      document.getElementById('tourTotal').value = '$' + (totalgeneral) + ' USD';
		      document.getElementById('tournombre').value = 'Booze Cruise';
		      document.getElementById('item_name').value = 'boozecruise';
		      document.getElementById('item_number').value = document.getElementById('tourid').value;
		      document.getElementById('amount').value = (totalgeneral);

		      document.getElementById('tourHotel').value = $('select[name="tourHotel1"] option:selected').text();

		    }
		}
		if ( (tourHotel1 == 'ua') && (cantidadpersonas == '1') ){
		    if (tourHotel1 != "") {
		      var price0 = document.getElementById('tourAdultos').value;
		      var price1 = 69;
		      var price2 = document.getElementById('tourNinos').value;
		      var price3 = 69;
		      var price4 = document.getElementById('tourInfantes').value;
		      var price5 = 0;
		      var totalpersons = (parseFloat(price0)+parseFloat(price2)+parseFloat(price4));

		      var totaladults = (price0*price1);
		      var totalchild = (price2*price3);
		      var totalinfants = (price4*price5);
		      var totalgeneral = (totaladults + totalchild + totalinfants);

		      document.getElementById('tourTotal').value = '$' + (totalgeneral) + ' USD';
		      document.getElementById('tournombre').value = 'Booze Cruise';
		      document.getElementById('item_name').value = 'boozecruise';
		      document.getElementById('item_number').value = document.getElementById('tourid').value;
		      document.getElementById('amount').value = (totalgeneral);

		      document.getElementById('tourHotel').value = $('select[name="tourHotel1"] option:selected').text();

		      if (adultos >= 11 ) {
		      	document.getElementById('tourAdultos').value = '1';
		      }
		      if (ninos >= 11 ) {
		      	document.getElementById('tourNinos').value = '0';
		      }
		      if (infantes >= 11 ) {
		      	document.getElementById('tourInfantes').value = '0';
		      }

		    }
		}
		if ( (tourHotel1 == 'ua') && (cantidadpersonas == '2') ){
		    if (tourHotel1 != "") {
		      var price0 = document.getElementById('tourAdultos').value;
		      var price1 = 69;
		      var price2 = document.getElementById('tourNinos').value;
		      var price3 = 69;
		      var price4 = document.getElementById('tourInfantes').value;
		      var price5 = 0;
		      var totalpersons = (parseFloat(price0)+parseFloat(price2)+parseFloat(price4));

		      var totaladults = (price0*price1);
		      var totalchild = (price2*price3);
		      var totalinfants = (price4*price5);
		      var totalgeneral = (totaladults + totalchild + totalinfants);

		      document.getElementById('tourTotal').value = '$' + (totalgeneral) + ' USD';
		      document.getElementById('tournombre').value = 'Booze Cruise';
		      document.getElementById('item_name').value = 'boozecruise';
		      document.getElementById('item_number').value = document.getElementById('tourid').value;
		      document.getElementById('amount').value = (totalgeneral);

		      document.getElementById('tourHotel').value = $('select[name="tourHotel1"] option:selected').text();

		      if (adultos >= 26 ) {
		      	document.getElementById('tourAdultos').value = '1';
		      }
		      if (ninos >= 26 ) {
		      	document.getElementById('tourNinos').value = '0';
		      }
		      if (infantes >= 26 ) {
		      	document.getElementById('tourInfantes').value = '0';
		      }

		    }
		}
		if ( (tourHotel1 == 'ua') && (cantidadpersonas == '3') ){
		    if (tourHotel1 != "") {
		      var price0 = document.getElementById('tourAdultos').value;
		      var price1 = 69;
		      var price2 = document.getElementById('tourNinos').value;
		      var price3 = 69;
		      var price4 = document.getElementById('tourInfantes').value;
		      var price5 = 0;
		      var totalpersons = (parseFloat(price0)+parseFloat(price2)+parseFloat(price4));

		      var totaladults = (price0*price1);
		      var totalchild = (price2*price3);
		      var totalinfants = (price4*price5);
		      var totalgeneral = (totaladults + totalchild + totalinfants);

		      document.getElementById('tourTotal').value = '$' + (totalgeneral) + ' USD';
		      document.getElementById('tournombre').value = 'Booze Cruise';
		      document.getElementById('item_name').value = 'boozecruise';
		      document.getElementById('item_number').value = document.getElementById('tourid').value;
		      document.getElementById('amount').value = (totalgeneral);

		      document.getElementById('tourHotel').value = $('select[name="tourHotel1"] option:selected').text();

		    }
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

