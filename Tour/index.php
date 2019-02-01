<?php 

	include '../controller/conexion.php';

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
	<link rel="shortcut icon" type="image/x-icon" href="../images/logo/logo_wing.png">

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
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="../css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="../css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../iconos/font-awesome/css/font-awesome.min.css">

	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body oncontextmenu="return false">
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="../"><img src="../images/logo/logo_wing.png" id="logoPrincipal"></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="../">Home</a></li>
								<li><a href="../Tour/">Tours</a></li>
								<li><a href="../Transfers/">Transportation</a></li>
								<li><a href="../About-Us/">About Us</a></li>
								<li><a href="../Faq/">Faq</a></li>
								<li><a href="../#colorlib-contact">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/1.png);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2></h2>
				   					<h1></h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>   	
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-reservation" style="border-bottom: 1px solid #ead2d2;">
			<!-- <div class="container"> -->
				<div class="row">
					<div class="search-wrap">
						<div class="container">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#flight"><i class="flaticon-car"></i> TRANSPORTATION</a></li>
								<!--<li><a data-toggle="tab" href="#hotel"><i class="flaticon-boat"></i> TOURS</a></li>
								<li><a data-toggle="tab" href="#car"><i class="flaticon-car"></i> Car Rent</a></li>
								<li><a data-toggle="tab" href="#cruises"><i class="flaticon-boat"></i> Cruises</a></li>-->
							</ul>
						</div>
						<div class="tab-content">
							<div id="flight" class="tab-pane fade in active">
								<form method="post" class="colorlib-form">
				              	<div class="row">
				              	<div class="col-md-2">
				                  <div class="form-group">
				                    <label for="guests">FROM</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="desdetransfer" id="desdetransfer" class="form-control">
				                      	<option selected disabled>== SELECT ==</option>
				                     	<?php 

		                                    $sql_aeropuerto = "SELECT * FROM aeropuertos WHERE estatus = '1'";
		                                            
		                                    $resultado_sql_aeropuerto = $db->query($sql_aeropuerto);

		                                    while($aeropuerto=mysqli_fetch_array($resultado_sql_aeropuerto))
		                                    {
		                                    ?>
		                                    <option value="<?php echo $aeropuerto['zona'] ?>"><?php echo $aeropuerto['aeropuerto'] ?></option>
		                                    <?php 

		                                    }
		                                ?>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="guests">TO</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="hastatransfer" id="hastatransfer" class="form-control">
				                        <option selected disabled>== SELECT ==</option>
				                        <option disabled></option>
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
		                                    <option style="font-weight: bold;" disabled>SANTO DOMINGO</option>
				                        	<?php 

		                                      $sql_hoteles = "SELECT * FROM hoteles WHERE zona = 'sd' AND estatus = '1'";
		                                            
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
		                                    <option disabled></option>
		                                    <option style="font-weight: bold;" disabled>LA ROMANA</option>
				                        	<?php 

		                                      $sql_hoteles = "SELECT * FROM hoteles WHERE zona = 'lr' AND estatus = '1'";
		                                            
		                                      $resultado_sql_hoteles = $db->query($sql_hoteles);

		                                      while($hoteles=mysqli_fetch_array($resultado_sql_hoteles))
		                                      {
		                                      ?>
		                                        <option value="<?php echo $hoteles['zona'] ?>"><?php echo $hoteles['hotel'] ?></option>
		                                      <?php 

		                                        }
		                                    ?>
		                                    <option disabled></option>
		                                    <option style="font-weight: bold;" disabled>BAYAHIBE</option>
				                        	<?php 

		                                      $sql_hoteles = "SELECT * FROM hoteles WHERE zona = 'bh' AND estatus = '1'";
		                                            
		                                      $resultado_sql_hoteles = $db->query($sql_hoteles);

		                                      while($hoteles=mysqli_fetch_array($resultado_sql_hoteles))
		                                      {
		                                      ?>
		                                        <option value="<?php echo $hoteles['zona'] ?>"><?php echo $hoteles['hotel'] ?></option>
		                                      <?php 

		                                        }
		                                    ?>
		                                    <option disabled></option>
		                                    <option style="font-weight: bold;" disabled>BOCA CHICA</option>
				                        	<?php 

		                                      $sql_hoteles = "SELECT * FROM hoteles WHERE zona = 'bc' AND estatus = '1'";
		                                            
		                                      $resultado_sql_hoteles = $db->query($sql_hoteles);

		                                      while($hoteles=mysqli_fetch_array($resultado_sql_hoteles))
		                                      {
		                                      ?>
		                                        <option value="<?php echo $hoteles['zona'] ?>"><?php echo $hoteles['hotel'] ?></option>
		                                      <?php 

		                                        }
		                                    ?>
		                                    <option disabled></option>
		                                    <option style="font-weight: bold;" disabled>JUAN DOLIO</option>
				                        	<?php 

		                                      $sql_hoteles = "SELECT * FROM hoteles WHERE zona = 'jd' AND estatus = '1'";
		                                            
		                                      $resultado_sql_hoteles = $db->query($sql_hoteles);

		                                      while($hoteles=mysqli_fetch_array($resultado_sql_hoteles))
		                                      {
		                                      ?>
		                                        <option value="<?php echo $hoteles['zona'] ?>"><?php echo $hoteles['hotel'] ?></option>
		                                      <?php 

		                                        }
		                                    ?>
		                                    <option disabled></option>
		                                    <option style="font-weight: bold;" disabled>AILA</option>
		                                    <?php 

		                                      $sql_hoteles = "SELECT * FROM hoteles WHERE zona = 'ai' AND estatus = '1'";
		                                            
		                                      $resultado_sql_hoteles = $db->query($sql_hoteles);

		                                      while($hoteles=mysqli_fetch_array($resultado_sql_hoteles))
		                                      {
		                                      ?>
		                                        <option value="<?php echo $hoteles['zona'] ?>"><?php echo $hoteles['hotel'] ?></option>
		                                      <?php 

		                                        }
		                                    ?>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="guests">ADULTS</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="adultostransfer" id="adultostransfer" class="form-control">
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
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="guests">CHILDREN</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="ninostransfer" id="ninostransfer" class="form-control">
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
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="guests">TYPE TRANSFER</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="tipodetransfer" id="tipodetransfer" class="form-control">
				                        <option value="oneway">One Way</option>
				                        <option value="roundtrip">Round Trip</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2" onclick="location.href='#transfersresultado'">
				                  <input type="button" name="buscartransferboton" id="buscartransferboton" value="Find Transfer" class="btn btn-primary btn-block" onclick="buscartransfer();location.href='#transfersresultado'">
				                </div>
				              </div>
				            </form>
				         </div>
				         <div id="hotel" class="tab-pane fade">
						      <form method="post" class="colorlib-form">
				              	<div class="row">
				              	 <div class="col-md-2">
				              	 	<div class="booknow">
				              	 		<h2>Book Now</h2>
					              	 	<span>Best Price Online</span>
				              	 	</div>
				              	 </div>
				                <div class="col-md-6">
				                  <div class="form-group">
				                    <label for="guests">SELECT YOUR EXCURSION:</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="tourbuscar" id="tourbuscar" class="form-control">
				                        <option>== SELECT ==</option>
				                        <?php 

			                                $sql_toursdisponibles = "SELECT * FROM tours WHERE estatus = '1'";
			                                            
			                                $resultado_sql_toursdisponibles = $db->query($sql_toursdisponibles);

			                                while($tours=mysqli_fetch_array($resultado_sql_toursdisponibles))
			                                {

				                                ?>
				                             <option value="<?php echo $tours['prefijo'] ?>"><?php echo $tours['tour'] ?></option>
				                        <?php 

				                            }

				                        ?>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <input type="button" name="buscartourboton" id="buscartourboton" value="Find Tour" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
						   </div>
			         	</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-wrap" id="transfersresultado" style="display: none;">
			<div class="container">
				<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box" style="margin-bottom: 1em;">
					<h2>Search results:</h2>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="wrap-division">
								<div class="col-md-4 col-sm-4 animate-box fadeInUp animated-fast">
									<div class="tour">
										<a class="tour-img" style="background-image: url(../images/transfers/privado.jpg);">
											<p class="price"><span id="resultadoprivado">$0</span> <small>/ USD</small></p>
										</a>
										<span class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> Quality and Reputation</p>
											<h2><a>Private Transfer</a></h2>
											<span class="city">Select additional for your transfer:</span>
											<label>Seat Child</label>
											<select onchange="buscartransfer();" class="col-md-3 form-control" name="asientoninoprivado" id="asientoninoprivado">
												<?php 

			                                    $sql_asientonino = "SELECT * FROM asiento_nino WHERE estatus = '1'";
			                                            
			                                    $resultado_sql_asientonino = $db->query($sql_asientonino);

			                                    while($asientonino=mysqli_fetch_array($resultado_sql_asientonino))
			                                    {

				                                ?>
				                                    <option><?php echo $asientonino['cantidad'] ?></option>
				                                <?php 

				                                }

				                                ?>
											</select><br>
											<label>Beer</label>
											<select onchange="buscartransfer();" class="col-md-3 form-control" name="cervezaprivado" id="cervezaprivado">
												<?php 

			                                    $sql_cerveza = "SELECT * FROM cerveza WHERE estatus = '1'";
			                                            
			                                    $resultado_sql_cerveza = $db->query($sql_cerveza);

			                                    while($cerveza=mysqli_fetch_array($resultado_sql_cerveza))
			                                    {

				                                ?>
				                                    <option><?php echo $cerveza['cantidad'] ?></option>
				                                <?php 

				                                }

				                                ?>
											</select><br>
											<label>Water</label>
											<select onchange="buscartransfer();" class="col-md-3 form-control" name="aguaprivado" id="aguaprivado">
												<?php 

			                                    $sql_water = "SELECT * FROM agua WHERE estatus = '1'";
			                                            
			                                    $resultado_sql_water = $db->query($sql_water);

			                                    while($water=mysqli_fetch_array($resultado_sql_water))
			                                    {

				                                ?>
				                                    <option><?php echo $water['cantidad'] ?></option>
				                                <?php 

				                                }

				                                ?>
											</select><br>
											<label>Soda</label>
											<select onchange="buscartransfer();" class="col-md-3 form-control" name="sodaprivado" id="sodaprivado">
												<?php 

			                                    $sql_soda = "SELECT * FROM soda WHERE estatus = '1'";
			                                            
			                                    $resultado_sql_soda = $db->query($sql_soda);

			                                    while($soda=mysqli_fetch_array($resultado_sql_soda))
			                                    {

				                                ?>
				                                    <option><?php echo $soda['cantidad'] ?></option>
				                                <?php 

				                                }

				                                ?>
											</select>
											<p>
												<a href="#" class="btn btn-primary" style="margin-top: 0.5em;" id="botonprivadooneway" data-toggle="modal" data-target="#modalOW" onclick="JavaScript:generar(document.aleatorio.long.value);">BOOK NOW</a>
												<a href="#" class="btn btn-primary" style="margin-top: 0.5em;" id="botonprivadoroundtrip" data-toggle="modal" data-target="#modalRT" onclick="JavaScript:generar(document.aleatorio.long.value);">BOOK NOW</a>
											</p>
										</span>
									</div>
								</div>

								<div class="col-md-4 col-sm-4 animate-box fadeInUp animated-fast">
									<div class="tour">
										<a class="tour-img" style="background-image: url(../images/transfers/luxury.jpg);">
											<p class="price"><span id="resultadoluxury">$0</span> <small>/ USD</small></p>
										</a>
										<span class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> Quality and Reputation</p>
											<h2><a>Luxury Transfer</a></h2>
											<span class="city">Select additional for your transfer:</span>
											<label>Seat Child</label>
											<select onchange="buscartransfer();" class="col-md-3 form-control" name="asientoninoluxury" id="asientoninoluxury">
												<?php 

			                                    $sql_asientonino = "SELECT * FROM asiento_nino WHERE estatus = '1'";
			                                            
			                                    $resultado_sql_asientonino = $db->query($sql_asientonino);

			                                    while($asientonino=mysqli_fetch_array($resultado_sql_asientonino))
			                                    {

				                                ?>
				                                    <option><?php echo $asientonino['cantidad'] ?></option>
				                                <?php 

				                                }

				                                ?>
											</select><br>
											<label>Beer</label>
											<select onchange="buscartransfer();" class="col-md-3 form-control" name="cervezaluxury" id="cervezaluxury">
												<?php 

			                                    $sql_cerveza = "SELECT * FROM cerveza WHERE estatus = '1'";
			                                            
			                                    $resultado_sql_cerveza = $db->query($sql_cerveza);

			                                    while($cerveza=mysqli_fetch_array($resultado_sql_cerveza))
			                                    {

				                                ?>
				                                    <option><?php echo $cerveza['cantidad'] ?></option>
				                                <?php 

				                                }

				                                ?>
											</select><br>
											<label>Water</label>
											<select onchange="buscartransfer();" class="col-md-3 form-control" name="agualuxury" id="agualuxury">
												<?php 

			                                    $sql_water = "SELECT * FROM agua WHERE estatus = '1'";
			                                            
			                                    $resultado_sql_water = $db->query($sql_water);

			                                    while($water=mysqli_fetch_array($resultado_sql_water))
			                                    {

				                                ?>
				                                    <option><?php echo $water['cantidad'] ?></option>
				                                <?php 

				                                }

				                                ?>
											</select><br>
											<label>Soda</label>
											<select onchange="buscartransfer();" class="col-md-3 form-control" name="sodaluxury" id="sodaluxury">
												<?php 

			                                    $sql_soda = "SELECT * FROM soda WHERE estatus = '1'";
			                                            
			                                    $resultado_sql_soda = $db->query($sql_soda);

			                                    while($soda=mysqli_fetch_array($resultado_sql_soda))
			                                    {

				                                ?>
				                                    <option><?php echo $soda['cantidad'] ?></option>
				                                <?php 

				                                }

				                                ?>
											</select>
											<p>
												<a href="#" class="btn btn-primary" style="margin-top: 0.5em;" id="botonluxuryoneway" data-toggle="modal" data-target="#modalOW" onclick="JavaScript:generar(document.aleatorio.long.value);">BOOK NOW</a>
												<a href="#" class="btn btn-primary" style="margin-top: 0.5em;" id="botonluxuryroundtrip" data-toggle="modal" data-target="#modalRT" onclick="JavaScript:generar(document.aleatorio.long.value);">BOOK NOW</a>
											</p>
										</span>
									</div>
								</div>

								<div class="col-md-4 col-sm-4 animate-box fadeInUp animated-fast">
									<div class="tour">
										<a class="tour-img" style="background-image: url(../images/transfers/limosina.jpg);">
											<p class="price"><span id="resultadolimosina">$0</span> <small>/ USD</small></p>
										</a>
										<span class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> Quality and Reputation</p>
											<h2><a>Limousine Transfer</a></h2>
											<span class="city">Select additional for your transfer:</span>
											<label>Seat Child</label>
											<select onchange="buscartransfer();" class="col-md-3 form-control" name="asientoninolimosina" id="asientoninolimosina">
												<?php 

			                                    $sql_asientonino = "SELECT * FROM asiento_nino WHERE estatus = '1'";
			                                            
			                                    $resultado_sql_asientonino = $db->query($sql_asientonino);

			                                    while($asientonino=mysqli_fetch_array($resultado_sql_asientonino))
			                                    {

				                                ?>
				                                    <option><?php echo $asientonino['cantidad'] ?></option>
				                                <?php 

				                                }

				                                ?>
											</select><br>
											<label>Beer</label>
											<select onchange="buscartransfer();" class="col-md-3 form-control" name="cervezalimosina" id="cervezalimosina">
												<?php 

			                                    $sql_cerveza = "SELECT * FROM cerveza WHERE estatus = '1'";
			                                            
			                                    $resultado_sql_cerveza = $db->query($sql_cerveza);

			                                    while($cerveza=mysqli_fetch_array($resultado_sql_cerveza))
			                                    {

				                                ?>
				                                    <option><?php echo $cerveza['cantidad'] ?></option>
				                                <?php 

				                                }

				                                ?>
											</select><br>
											<label>Water</label>
											<select onchange="buscartransfer();" class="col-md-3 form-control" name="agualimosina" id="agualimosina">
												<?php 

			                                    $sql_water = "SELECT * FROM agua WHERE estatus = '1'";
			                                            
			                                    $resultado_sql_water = $db->query($sql_water);

			                                    while($water=mysqli_fetch_array($resultado_sql_water))
			                                    {

				                                ?>
				                                    <option><?php echo $water['cantidad'] ?></option>
				                                <?php 

				                                }

				                                ?>
											</select><br>
											<label>Soda</label>
											<select onchange="buscartransfer();" class="col-md-3 form-control" name="sodalimosina" id="sodalimosina">
												<?php 

			                                    $sql_soda = "SELECT * FROM soda WHERE estatus = '1'";
			                                            
			                                    $resultado_sql_soda = $db->query($sql_soda);

			                                    while($soda=mysqli_fetch_array($resultado_sql_soda))
			                                    {

				                                ?>
				                                    <option><?php echo $soda['cantidad'] ?></option>
				                                <?php 

				                                }

				                                ?>
											</select>
											<p>
												<a href="#" class="btn btn-primary" style="margin-top: 0.5em;" id="botonlimosinaoneway" data-toggle="modal" data-target="#modalOW" onclick="JavaScript:generar(document.aleatorio.long.value);">BOOK NOW</a>
												<a href="#" class="btn btn-primary" style="margin-top: 0.5em;" id="botonlimosinaroundtrip" data-toggle="modal" data-target="#modalRT" onclick="JavaScript:generar(document.aleatorio.long.value);">BOOK NOW</a>
											</p>
										</span>
									</div>
								</div>				
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-tour colorlib-light-grey" id="excursiones">
			<div class="container">
				<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box" style="margin-bottom: 1em;">
					<h3>EXCURSIONS FROM PUNTA CANA</h3>
					<p>
						- Escape from the routine and monotony of staying at the hotel all day, and every day of your vacation. <br>
						- Learn about the culture, folklore, customs, art and way of life. <br>
						- Taste its gastronomy and the rich taste of organic fruits. <br>
						- Delight in observing the joy and harmony in which its inhabitants coexist lacking and indifferent to our comfort, hectic or luxurious life. <br>
						- End the day with a refreshing flavor, not only coffee or organic chocolate, mamajuana or Dominican beer, but to value more life and everything that makes it and why not; continue discovering the beauties of our wonderful island.
					</p>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="wrap-division">
								<div class="col-md-4 col-sm-4 animate-box fadeInUp animated-fast">
									<div class="tour">
										<a href="../Tours/Media-Luna" class="tour-img" style="background-image: url(../images/tours/tour-1.jpg);">
										<p class="price"><span>From: $99</span><small> /USD</small></p>
										</a>
										<span class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> In Promotion</p>
											<h3><a href="../Tours/Media-Luna">Media Luna</a></h3>
											<span class="place">Dominican Republic, Punta Cana</span>
											<p>A day full of excitement where you will live an unforgettable experience.</p>
										</span>
									</div>
								</div>

								<div class="col-md-4 col-sm-4 animate-box fadeInUp animated-fast">
									<div class="tour">
										<a href="../Tours/Catalina-Snorkeling" class="tour-img" style="background-image: url(../images/tours/tour-2.jpg);">
										<p class="price"><span>From: $80</span><small> /USD</small></p>
										</a>
										<span class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> In Promotion</p>
											<h3><a href="../Tours/Catalina-Snorkeling">Catalina Island Snorkeling</a></h3>
											<span class="place">Dominican Republic, Punta Cana</span>
											<p>This great adventure begins by approaching the Catamaran in the Rio Salado.</p>
										</span>
									</div>
								</div>

								<div class="col-md-4 col-sm-4 animate-box fadeInUp animated-fast">
									<div class="tour">
										<a href="../Tours/Haitises-VIP" class="tour-img" style="background-image: url(../images/tours/tour-3.jpg);">
										<p class="price"><span>From: $149</span><small> /USD</small></p>
										</a>
										<span class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> In Promotion</p>
											<h3><a href="../Tours/Haitises-VIP">Los Haitises Exclusive VIP</a></h3>
											<span class="place">Dominican Republic, Punta Cana</span>
											<p>Discover the National Park of Los Haitises, a natural paradise in the Dominican virgin forest.</p>
										</span>
									</div>
								</div>

								<div class="col-md-4 col-sm-4 animate-box fadeInUp animated-fast">
									<div class="tour">
										<a href="../Tours/Haitises-Montana-Redonda" class="tour-img" style="background-image: url(../images/tours/tour-4.jpg);">
										<p class="price"><span>From: $145</span><small> /USD</small></p>
										</a>
										<span class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> In Promotion</p>
											<h3><a href="../Tours/Haitises-Montana-Redonda">Los Haitises Montaña Redonda</a></h3>
											<span class="place">Dominican Republic, Punta Cana</span>
											<p>Departing from your Hotels in modern and comfortable buses, we arrive at Miches.</p>
											</span>
									</div>
								</div>

								<div class="col-md-4 col-sm-4 animate-box fadeInUp animated-fast">
									<div class="tour">
										<a href="../Tours/Samana-Cayo-Levantado" class="tour-img" style="background-image: url(../images/tours/tour-5.jpg);">
										<p class="price"><span>From: $145</span><small> /USD</small></p>
										</a>
										<span class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> In Promotion</p>
											<h3><a href="../Tours/Samana-Cayo-Levantado">Samana Cayo Levantado</a></h3>
											<span class="place">Dominican Republic, Punta Cana</span>
											<p>Come and enjoy a real adventure through the Eastern Coastal Plain of the Dominican Republic.</p>
										</span>
									</div>
								</div>

								<div class="col-md-4 col-sm-4 animate-box fadeInUp animated-fast">
									<div class="tour">
										<a href="../Tours/Booze-Cruise" class="tour-img" style="background-image: url(../images/tours/tour-6.jpg);">
										<p class="price"><span>From: $59</span><small> /USD</small></p>
										</a>
										<span class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> In Promotion</p>
											<h3><a href="../Tours/Booze-Cruise">Booze Cruise</a></h3>
											<span class="place">Dominican Republic, Punta Cana</span>
											<p>Simply the MOST popular and successful excursions in Punta Cana.</p>
										</span>
									</div>
								</div>

								<div class="col-md-4 col-sm-4 animate-box fadeInUp animated-fast">
									<div class="tour">
										<a href="../Tours/Saona-Island" class="tour-img" style="background-image: url(../images/tours/tour-7.jpg);">
										<p class="price"><span>From: $70</span><small> /USD</small></p>
										</a>
										<span class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> In Promotion</p>
											<h3><a href="../Tours/Saona-Island">Saona Island</a></h3>
											<span class="place">Dominican Republic, Punta Cana</span>
											<p>After a comfortable ride you will be sailing the shallow Caribbean waters by catamaran.</p>
										</span>
									</div>
								</div>

								<div class="col-md-4 col-sm-4 animate-box fadeInUp animated-fast">
									<div class="tour">
										<a href="../Tours/Supreme-Truck-Safari" class="tour-img" style="background-image: url(../images/tours/tour-8.JPG);">
										<p class="price"><span>From: $80</span><small> /USD</small></p>
										</a>
										<span class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> In Promotion</p>
											<h3><a href="../Tours/Supreme-Truck-Safari">Supreme Truck Safari</a></h3>
											<span class="place">Dominican Republic, Punta Cana</span>
											<p>A memorable adventure in our Safari trucks well made for your safety and comfort.</p>
										</span>
									</div>
								</div>

								<div class="col-md-4 col-sm-4 animate-box fadeInUp animated-fast">
									<div class="tour">
										<a href="../Tours/ATVS-Buggies" class="tour-img" style="background-image: url(../images/tours/tour-9.JPG);">
										<p class="price"><span>From: $55</span><small> /USD</small></p>
										</a>
										<span class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> In Promotion</p>
											<h3><a href="../Tours/ATVS-Buggies">ATV´S / BUGGIES</a></h3>
											<span class="place">Dominican Republic, Punta Cana</span>
											<p>Drive your own Buggy or Polaris to the heart of the countryside. Venture into fun.</p>
										</span>
									</div>
								</div>

								<div class="col-md-4 col-sm-4 animate-box fadeInUp animated-fast">
									<div class="tour">
										<a href="../Tours/Santo-Domingo" class="tour-img" style="background-image: url(../images/tours/tour-10.jpg);">
										<p class="price"><span>From: $75</span><small> /USD</small></p>
										</a>
										<span class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> In Promotion</p>
											<h3><a href="../Tours/Santo-Domingo">Santo Domingo City Tour</a></h3>
											<span class="place">Dominican Republic, Punta Cana</span>
											<p>Explore the oldest city of the new world as we sightsee.</p>
										</span>
									</div>
								</div>				
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
						<a href="https://www.wingdingtravel.com/"><img src="../images/logo/logo_wing_footer.png" id="logo_wingFooter"></a>
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
								<li><a href="../Local-Market/"><i class="fa fa-chevron-circle-right"></i> Local Market</a></li>
								<li><a href="../How-to-Book/"><i class="fa fa-chevron-circle-right"></i> How to Book</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2">
						<h4>Support</h4>
						<ul class="colorlib-footer-links">
							<li><a href="../#colorlib-contact"><i class="fa fa-chevron-circle-right"></i> Contact</a></li>
							<li><a href="../Faq/"><i class="fa fa-chevron-circle-right"></i> FAQ & Help</a></li>
							<li><a href="../Terms-and-Conditions/"><i class="fa fa-chevron-circle-right"></i> Terms & Conditions</a></li>
						</ul>
					</div>

					<div class="col-md-3">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>Duverge # 53, Higüey, La Altagracia,<br> Dominican Republic</li>
							<li>Phone: +1(829)-860-3847</li>
							<li><a href="mailto:info@wingdingtravel.com">Email: info@wingdingtravel.com</a></li>
							<li><img src="../images/pago/1.png" style="width: 15em;"></li>
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
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="../js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="../js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="../js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="../js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="../js/main.js"></script>
	<!-- dependientes personalizadas -->
	<script src="../custom_js/transfers.js"></script>
	<script src="../custom_js/funciones.js"></script>
	<script src="../custom_js/horas.js"></script>
	<script src="custom_js/guardarOneway.js"></script>
	<script src="custom_js/guardarRoundtrip.js"></script>

	<!--GENERADOR DE RESERVA -->
	<script>
		$(document).ready(function(){
			$("#arrivalOW").datepicker({ startDate: "+0d" });
			$("#arrivalRT").datepicker({ startDate: "+0d" });
			$("#departuredateRT").datepicker({ startDate: "+0d" });
		});

		function generar(longitud){
		    long=parseInt(longitud);
		    var caracteres = "ABCDEFGHIJKLMNPQRTUVWXYZ12346789";
		    var contraseña = "";
		    for (i=0; i<long; i++) contraseña += caracteres.charAt(Math.floor(Math.random()*caracteres.length));
		    document.getElementById("idRT").value=contraseña;
		    document.getElementById("idOW").value=contraseña;
		}
	</script>
      <p id="reservekey" style="display: none;"></p>
        <form id="Form" name="aleatorio" method="post" action="JavaScript:generar(document.aleatorio.long.value)" >
          <input name="long" type="number" id="texto" autocomplete="off" required="" value="12" style="display: none;">
          <button type="submit" id="Form" style="display: none;">Generar</button>
        </form>
    <!--FIN GENERADOR DE RESERVA -->

	<!-- modal transfer oneway -->
	<div class="modal fade" tabindex="-1" role="dialog" id="modalOW">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h3 class="modal-title" style="text-align: center;color: #fff;">Transfer Reservation</h3>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
		      	<div class="col-md-12 text-center">
		      		<img src="../images/logo/logo_wing.png" id="logoPrincipal">
		      	</div>
		    <form name="onewayform" id="onewayform">
		        <h2 style="text-align: center;">Client Info</h2>

		        <input type="text" class="form-control" name="fechaOW" id="fechaOW" value="<?php echo date('m/d/Y'); ?>" readonly><br>
		        <input type="text" class="form-control" name="idOW" id="idOW" readonly>
	            <input type="text" class="form-control" name="nombreOW" id="nombreOW" placeholder="Name">
	            <input type="text" class="form-control" name="apellidoOW" id="apellidoOW" placeholder="Lastname">
	            <input type="text" class="form-control" name="emailOW" id="emailOW" placeholder="E-mail">
	            <input type="text" class="form-control" name="telefonoOW" id="telefonoOW" placeholder="Phone"><br>

	            <h2 style="text-align: center;">Billing Data</h2>
	            <input type="text" class="form-control" name="servicioOW" id="servicioOW" readonly><br>
	            <input type="text" class="form-control" name="desdeOW" id="desdeOW" readonly><br>
	            <input type="text" class="form-control" name="hastaOW" id="hastaOW" readonly><br>
	            <input type="text" class="form-control" name="adultosOW" id="adultosOW" readonly><br>
	            <input type="text" class="form-control" name="ninosOW" id="ninosOW" readonly><br>
	            <label>Infants</label><br>
	            <select class="form-control" name="infantesOW" id="infantesOW">
					<?php 
						$sql_infantes_oneway = "SELECT * FROM infantes WHERE estatus = '1'";
			            $resultado_sql_infantes_oneway = $db->query($sql_infantes_oneway);
						while($infantesoneway=mysqli_fetch_array($resultado_sql_infantes_oneway))
			            {
			        ?>
			            <option><?php echo $infantesoneway['cantidad'] ?></option>
			        <?php 
						}
			        ?>           	
	            </select><br>

	            <h2 style="text-align: center;">Additional</h2>
	            <label>Seat Child</label>
	            <input type="text" class="form-control" name="asientoninoOW" id="asientoninoOW" readonly>
	            <label>Beer</label>
	            <input type="text" class="form-control" name="cervezaOW" id="cervezaOW" readonly>
	            <label>Water</label>
	            <input type="text" class="form-control" name="aguaOW" id="aguaOW" readonly>
	            <label>Soda</label>
	            <input type="text" class="form-control" name="sodaOW" id="sodaOW" readonly><br>

	            <h2 style="text-align: center;">Arrival Information</h2>
	            <input type="text" class="form-control" name="arrivalOW" id="arrivalOW" placeholder="Flight Arrival Date">
	            <input type="time" class="form-control" name="timeOW" id="timeOW" placeholder="Flight Arrival Time"><br>
	            <label>Airline</label>
	            <select class="form-control" name="aerolineaOW" id="aerolineaOW">
					<?php 
						$sql_aerolineas_oneway = "SELECT * FROM aerolineas WHERE estatus = '1'";
			            $resultado_sql_aerolineas_oneway = $db->query($sql_aerolineas_oneway);
						while($aerolineas_oneway=mysqli_fetch_array($resultado_sql_aerolineas_oneway))
			            {
			        ?>
			            <option><?php echo $aerolineas_oneway['aerolinea'] ?></option>
			        <?php 
						}
			        ?>           	
	            </select><br>
	            <input type="text" class="form-control" name="numerodevueloOW" id="numerodevueloOW" placeholder="Flight Number">

	            <h2 style="text-align: center;">Other Information</h2>
	            <label>Approx Luggage</label>
	            <select class="form-control" name="equipajeOW" id="equipajeOW">
	            	<option selected>1</option>
	            	<option>2</option>
	            	<option>3</option>
	            	<option>4</option>
	            	<option>5</option>
	            	<option>+6</option>
	            </select><br>
	            <label>Remarks</label>
	            <textarea class="form-control" name="notasOW" id="notasOW" placeholder="Notes/Special Instructions" cols="6" rows="10"></textarea><br>

	            <input type="checkbox" id="terminosOW" name="terminosOW" />
				<label for="terminosOW">I have read carefully and accept the terms and conditions of Wingding Travel.</label><br>

	            <h2 style="text-align: center;"><a href="../Terms-and-Conditions/" target="_blank">Terms & Conditions</a></h2>

	            <h2 style="text-align: center;">Total to Pay</h2>
	            <input type="text" class="form-control" name="totalOW" id="totalOW" readonly><br>
	            <div id="resultadoOW"></div>
	        </form>
	      </div>
	      <div class="modal-footer" style="text-align: center !important;">
	        <button type="button" class="btn btn-primary" id="botonOW">PAY NOW</button>
	        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input name="cmd" type="hidden" value="_xclick">
                <input name="business" type="hidden" value="ladorableelga@gmail.com">
                <input type="hidden" name="item_name" id="item_nameOW">
                <input type="hidden" name="item_number" id="item_numberOW">
                <input type="hidden" name="amount" id="amountOW">
                <input name="currency_code" type="hidden" value="USD">
                <input type="hidden" name="notify_url" value="https://www.wingdingtravel.com/notify.php">
                <input class="btn btn-primary" id="paypalbotonOW" type="submit" value="PAY NOW WITH PAYPAL" style="display: none;">
            </form>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- modal transfer roundtrip -->
	<div class="modal fade" tabindex="-1" role="dialog" id="modalRT">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h3 class="modal-title" style="text-align: center;color: #fff;">Transfer Reservation</h3>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
		      	<div class="col-md-12 text-center">
		      		<img src="../images/logo/logo_wing.png" id="logoPrincipal">
		      	</div>
		    <form name="roundtripform" id="roundtripform">
		        <h2 style="text-align: center;">Client Info</h2>

		        <input type="text" class="form-control" name="fechaRT" id="fechaRT" value="<?php echo date('m/d/Y'); ?>" readonly><br>
		        <input type="text" class="form-control" name="idRT" id="idRT" readonly>
	            <input type="text" class="form-control" name="nombreRT" id="nombreRT" placeholder="Name">
	            <input type="text" class="form-control" name="apellidoRT" id="apellidoRT" placeholder="Lastname">
	            <input type="text" class="form-control" name="emailRT" id="emailRT" placeholder="E-mail">
	            <input type="text" class="form-control" name="telefonoRT" id="telefonoRT" placeholder="Phone"><br>

	            <h2 style="text-align: center;">Billing Data</h2>
	            <input type="text" class="form-control" name="servicioRT" id="servicioRT" readonly><br>
	            <input type="text" class="form-control" name="desdeRT" id="desdeRT" readonly><br>
	            <input type="text" class="form-control" name="hastaRT" id="hastaRT" readonly><br>
	            <input type="text" class="form-control" name="adultosRT" id="adultosRT" readonly><br>
	            <input type="text" class="form-control" name="ninosRT" id="ninosRT" readonly><br>
	            <label>Infants</label><br>
	            <select class="form-control" name="infantesRT" id="infantesRT">
					<?php 
						$sql_infantes_oneway = "SELECT * FROM infantes WHERE estatus = '1'";
			            $resultado_sql_infantes_oneway = $db->query($sql_infantes_oneway);
						while($infantesoneway=mysqli_fetch_array($resultado_sql_infantes_oneway))
			            {
			        ?>
			            <option><?php echo $infantesoneway['cantidad'] ?></option>
			        <?php 
						}
			        ?>           	
	            </select><br>

	            <h2 style="text-align: center;">Additional</h2>
	            <label>Seat Child</label>
	            <input type="text" class="form-control" name="asientoninoRT" id="asientoninoRT" readonly>
	            <label>Beer</label>
	            <input type="text" class="form-control" name="cervezaRT" id="cervezaRT" readonly>
	            <label>Water</label>
	            <input type="text" class="form-control" name="aguaRT" id="aguaRT" readonly>
	            <label>Soda</label>
	            <input type="text" class="form-control" name="sodaRT" id="sodaRT" readonly><br>

	            <h2 style="text-align: center;">Arrival Information</h2>
	            <input type="text" class="form-control" name="arrivalRT" id="arrivalRT" placeholder="Flight Arrival Date">
	            <input type="time" class="form-control" name="timeRT" id="timeRT" placeholder="Flight Arrival Time"><br>
	            <label>Airline</label>
	            <select class="form-control" name="aerolineaRT" id="aerolineaRT">
					<?php 
						$sql_aerolineas_roundtrip = "SELECT * FROM aerolineas WHERE estatus = '1'";
			            $resultado_sql_aerolineas_roundtrip = $db->query($sql_aerolineas_roundtrip);
						while($aerolineas_roundtrip=mysqli_fetch_array($resultado_sql_aerolineas_roundtrip))
			            {
			        ?>
			            <option><?php echo $aerolineas_roundtrip['aerolinea'] ?></option>
			        <?php 
						}
			        ?>           	
	            </select><br>
	            <input type="text" class="form-control" name="numerodevueloRT" id="numerodevueloRT" placeholder="Flight Number"><br>

	            <h2 style="text-align: center;">Departure Information</h2>
	            <label>Airline</label>
	            <select class="form-control" name="aerolineadepartureRT" id="aerolineadepartureRT">
					<?php 
						$sql_aerolineas_roundtrip = "SELECT * FROM aerolineas WHERE estatus = '1'";
			            $resultado_sql_aerolineas_roundtrip = $db->query($sql_aerolineas_roundtrip);
						while($aerolineas_roundtrip=mysqli_fetch_array($resultado_sql_aerolineas_roundtrip))
			            {
			        ?>
			            <option><?php echo $aerolineas_roundtrip['aerolinea'] ?></option>
			        <?php 
						}
			        ?>           	
	            </select><br>
	            <input type="text" class="form-control" name="numerodevuelodepartureRT" id="numerodevuelodepartureRT" placeholder="Flight Number"><br>
	            <input type="text" class="form-control" name="departuredateRT" id="departuredateRT" placeholder="Departure Date"><br>
	            <label>Pickup Time</label>
	            <input type="time" class="form-control" name="departuretimeRT" id="departuretimeRT" onchange="horas();"><br>
	            <input type="text" class="form-control" name="sugerenciatimeRT" id="sugerenciatimeRT" placeholder="Select Hour Pickup Time" readonly><br>

	            <h2 style="text-align: center;">Other Information</h2>
	            <label>Approx Luggage</label>
	            <select class="form-control" name="equipajeRT" id="equipajeRT">
	            	<option selected>1</option>
	            	<option>2</option>
	            	<option>3</option>
	            	<option>4</option>
	            	<option>5</option>
	            	<option>+6</option>
	            </select><br>
	            <label>Remarks</label>
	            <textarea class="form-control" name="notasRT" id="notasRT" placeholder="Notes/Special Instructions" cols="6" rows="10"></textarea><br>

	            <input type="checkbox" id="terminosRT" name="terminosRT" />
				<label for="terminosRT">I have read carefully and accept the terms and conditions of Wingding Travel.</label><br>

	            <h2 style="text-align: center;"><a href="../Terms-and-Conditions/" target="_blank">Terms & Conditions</a></h2>

	            <h2 style="text-align: center;">Total to Pay</h2>
	            <input type="text" class="form-control" name="totalRT" id="totalRT" readonly><br>
	            <div id="resultadoRT"></div>
	        </form>
	      </div>
	      <div class="modal-footer" style="text-align: center !important;">
	        <button type="button" class="btn btn-primary" id="botonRT">PAY NOW</button>
	        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input name="cmd" type="hidden" value="_xclick">
                <input name="business" type="hidden" value="ladorableelga@gmail.com">
                <input type="hidden" name="item_name" id="item_nameRT">
                <input type="hidden" name="item_number" id="item_numberRT">
                <input type="hidden" name="amount" id="amountRT">
                <input name="currency_code" type="hidden" value="USD">
                <input type="hidden" name="notify_url" value="https://www.wingdingtravel.com/notify.php">
                <input class="btn btn-primary" id="paypalbotonRT" type="submit" value="PAY NOW WITH PAYPAL" style="display: none;">
            </form>
	      </div>
	    </div>
	  </div>
	</div>


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
	<!-- aqui obtengo los precios de los transfers  -->
	<input type="hidden" name="precioprivado" id="precioprivado">
	<input type="hidden" name="precioluxury" id="precioluxury">
	<input type="hidden" name="preciolimosina" id="preciolimosina">
	</body>
</html>

