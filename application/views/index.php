<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Surestep Systems &amp; Solutions</title>
	
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/font-awesome.min.css" rel="stylesheet">  
    <link href="<?php echo base_url();?>css/main.css" rel="stylesheet"> 
    <link href="<?php echo base_url();?>css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/hover-min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/half-slider.css" rel="stylesheet">        
    <link rel="shortcut icon" href="<?php echo base_url();?>Images/TitleIconLogo.png">

<style>
#method {
          display: block;
          height: auto;
          max-width: 100%;
   }
   
</style>	
</head>


<body>
	<header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>Images/NavBar Logo.png" alt="logo" height="50"></a>
                </div>
				<div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active hvr-bounce-in"><a href="<?php echo base_url();?>"><i class="fa fa-home" style="margin-left:20px"></i> Home</a></li>
                        <li><a href="#features" data-toggle="dropdown"><i class="fa fa-cogs"></i>       Services<span style="margin-left:10px" class="fa fa-caret-down"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url();?>index.php/support">Support</a></li>
    							<li><a href="<?php echo base_url();?>index.php/implementation">Implementation</a></li>
    							<li><a href="<?php echo base_url();?>index.php/consultation">Consultation</a></li>								
								<li><a href="<?php echo base_url();?>index.php/training">Training</a></li>
							</ul>
						</li>
						<li class="hvr-bounce-in"><a href="<?php echo base_url();?>index.php/solutions"><i class="fa fa-wrench"></i>       Solutions</a></li>                        
                        <li class="hvr-bounce-in"><a href="<?php echo base_url();?>index.php/faqs"><i class="fa fa-comments"></i>       FAQs</a></li>
                        <li class="hvr-bounce-in"><a href="<?php echo base_url();?>index.php/aboutus"><i class="fa fa-globe"></i>       About Us</a></li>
                        <li class="hvr-bounce-in"><a href="<?php echo base_url();?>index.php/contactus"><i class="fa fa-phone"></i>       Contact Us</a></li>	
                        <li><a href="<?php echo base_url();?>#features" data-toggle="dropdown"><i class="fa fa-database"></i>       Microsoft Dynamics<span style="margin-left:10px" class="fa fa-caret-down"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url();?>#">Microsoft Dynamics NAV</a></li>
								<li><a href="<?php echo base_url();?>#">Microsoft Dynamics CRM</a></li>
    							<li><a href="<?php echo base_url();?>#">Microsoft Dynamics AX</a></li>
    						</ul>
						</li> 
						                     
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <header id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="<?php echo base_url();?>#carousel" data-slide-to="0" class="active"></li>
            <li data-target="<?php echo base_url();?>#carousel" data-slide-to="1"></li>
            <li data-target="<?php echo base_url();?>#carousel" data-slide-to="2"></li>
            <li data-target="<?php echo base_url();?>#carousel" data-slide-to="3"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('Images/mainslide.jpg');"></div>
                <div class="carousel-caption">						
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('Images/tab-laptop-1920x1080.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('Images/Slide 1.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('Images/slide 2.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="carousel-control left" href="<?php echo base_url();?>#carousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="carousel-control right" href="<?php echo base_url();?>#carousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>

<div class="container" style="margin-top:20px">
       <div id="home" class="row" style="margin-top:20px">
       		<a href="<?php echo base_url();?>" style="color:#64686d">
	       		<div id="dynamics" class="col-md-3 hvr-grow" style="text-align:center">
	       			<h4>Sacco Management System</h4>
	       			<p>This is the core module for those who are running/operating Saccos as it has the 3 key elements of FOSA, BOSA & Microfinance.</p>
				</div>
			</a>
       		<a href="<?php echo base_url();?>" style="color:#64686d">
	       		<div id="dynamics1" class="col-md-3 hvr-grow" style="text-align:center">
	       			<h4>Investment Management System</h4>
	       			<p>This module is critical for anyone in the business of buying land, subdividing it and later reselling it to individuals who want to invest in the lucrative business of real estate.</p>
				</div>
			</a>
       		<a href="<?php echo base_url();?>" style="color:#64686d">
	       		<div id="dynamics2" class="col-md-3 hvr-grow" style="text-align:center">
	       			<h4>Business Intelligence (BI) System</h4>
	       			<p>Business Intelligence (BI) helps an organization to understand key business information from the data stored in Information system.</p>
				</div>
			</a>
       		<a href="<?php echo base_url();?>" style="color:#64686d">
	       		<div id="dynamics3" class="col-md-3 hvr-grow" style="text-align:center">
	       			<h4>Academic Management System</h4>
	       			<p>This module provides faculty administrators with data used to foster the continual improvement of teaching &amp; learning for example admissions, student billing, hostels &amp; exam time-tabling.</p>
				</div>
			</a>
       </div>
       <div id="home" class="row" style="margin-top:20px">
       		<a href="<?php echo base_url();?>" style="color:#64686d">
	       		<div id="dynamics" class="col-md-3 hvr-grow" style="text-align:center">
	       			<h4>Donor Fund &amp; Grant Management System</h4>
	       			<p>This module allows organizations manage donor funds, receipt of funds, allocations of programs and donor reports.</p>
				</div>
			</a>
       		<a href="<?php echo base_url();?>" style="color:#64686d">
	       		<div id="dynamics1" class="col-md-3 hvr-grow" style="text-align:center">
	       			<h4>Workplan &amp; Budgetary System</h4>
	       			<p>This module starts the budgeting process from workplan activities all through to the final budget &amp; helps organizations analyze the costs and expenditure.</p>
				</div>
			</a>
       		<a href="<?php echo base_url();?>" style="color:#64686d">
	       		<div id="dynamics2" class="col-md-3 hvr-grow" style="text-align:center">
	       			<h4>Insurance Management System</h4>
	       			<p>This module supports the underwriting processes, processing of claims and provides reports that give deeper and detailed insights into customers.</p>
				</div>
			</a>
       		<a href="<?php echo base_url();?>" style="color:#64686d">
	       		<div id="dynamics3" class="col-md-3 hvr-grow" style="text-align:center">
	       			<h4>Membership registration</h4>
	       			<p>This module assists professional bodies to manage members bio data, CPDs, subscription fees, student internship &amp; so on.</p>
				</div>
			</a>
       </div>
       <div id="home" class="row" style="margin-top:20px">
       		<a href="<?php echo base_url();?>" style="color:#64686d">
	       		<div id="dynamics" class="col-md-3 hvr-grow" style="text-align:center">
	       			<h4>Property Management System</h4>
	       			<p>This is the hub of a property's operations: processing reservations, check-ins and check-outs. It keeps track of how many rooms you have left to sell and at what rate.</p>
				</div>
			</a>
       		<a href="<?php echo base_url();?>" style="color:#64686d">
	       		<div id="dynamics1" class="col-md-3 hvr-grow" style="text-align:center">
	       			<h4>Document Management System (DMS)</h4>
	       			<p>DMS enables you to manage your business critical documents like contracts, proposals, agreements, marketing and sales materials.</p>
				</div>
			</a>
       		<a href="<?php echo base_url();?>" style="color:#64686d">
	       		<div id="dynamics2" class="col-md-3 hvr-grow" style="text-align:center">
	       			<h4>Customer Relations Management (CRM)</h4>
	       			<p>This module focuses on business processes that nurture customer satisfaction, relations, contribution &amp; also reliability.</p>
				</div>
			</a>
       		<a href="<?php echo base_url();?>" style="color:#64686d">
	       		<div id="dynamics3" class="col-md-3 hvr-grow" style="text-align:center">
	       			<h4>County Solutions</h4>
	       			<p>Our solution handle policy generation, claims processing, customer relationship management, revenue collection, premiums and receipting.</p>
				</div>
			</a>
       </div>
</div>
      
<div id="bottom" class="main">
<div class="container">
	<div id="base" class="row">
			<div id="indent" class="col-md-4 col-sm-6">
					<h4 id="header" style="font-family:Agency FB">SURESTEP SYSTEMS &amp; SOLUTIONS</h4>
					<p align="left">							
						<ul class="list-unstyled">
							<li style="font-size:15px">
								<i class="fa fa-home"></i>
								<strong>Address:</strong> Vision Plaza, Suite 2A. Mombasa Rd
							</li>
							<li style="font-size:15px">
								<i class="fa fa-envelope"></i>
								<strong>Email: </strong>	info@surestep.co.ke							
							</li>
							<li style="font-size:15px">
								<i class="fa fa-globe"></i>
								<strong>Website:</strong>	www.surestep.co.ke							
							</li>
							<li style="font-size:15px">
								<i class="fa fa-phone"></i>
								<strong>Phone:</strong>	(+254) 20 4400253, (+254) 724 671307							
							</li>
						</ul>
					</p>					
			</div>
			<div id="indent" class="col-md-2 col-sm-6">
					<h4 id="header" style="font-family:Agency FB">OUR COMPANY</h4>
					<p align="left">							
						<ul class="list-unstyled">
							<li style="font-size:15px"><i class="fa fa-angle-right"></i>&nbsp;<a id="list" class="hvr-float-shadow"  href="<?php echo base_url();?>index.php/aboutus">About Us</a></li>
							<li style="font-size:15px"><i class="fa fa-angle-right"></i>&nbsp;<a id="list" class="hvr-float-shadow"  href="<?php echo base_url();?>index.php/support">Support</a></li>
							<li style="font-size:15px"><i class="fa fa-angle-right"></i>&nbsp;<a id="list" class="hvr-float-shadow"  href="<?php echo base_url();?>index.php/faqs">FAQs</a></li>
							<li style="font-size:15px"><i class="fa fa-angle-right"></i>&nbsp;<a id="list" class="hvr-float-shadow"  href="<?php echo base_url();?>index.php/contactus">Contact Us</a></li>
						</ul>
					</p>					
			</div>
			<div id="indent" class="col-md-6 col-sm-5">
					<h4 id="header" style="font-family:Agency FB">ERP MANAGEMENT SYSTEMS</h4>
					<div class="row">
						<div class="col-md-6" id="indent">
											
									<ul class="list-unstyled">
										<li style="font-size:15px"><i class="fa fa-angle-right"></i>&nbsp;<a id="list" class="hvr-float-shadow"  href="<?php echo base_url();?>index.php/solutions#funds">Funds Management Systems</a></li>
										<li style="font-size:15px"><i class="fa fa-angle-right"></i>&nbsp;<a id="list" class="hvr-float-shadow"  href="<?php echo base_url();?>index.php/solutions#asset">Asset Management Systems</a></li>
										<li style="font-size:15px"><i class="fa fa-angle-right"></i>&nbsp;<a id="list" class="hvr-float-shadow"  href="<?php echo base_url();?>index.php/solutions#integrate">Integrated Financial Systems</a></li>
										<li style="font-size:15px"><i class="fa fa-angle-right"></i>&nbsp;<a id="list" class="hvr-float-shadow" href="<?php echo base_url();?>index.php/solutions#budget">Budgetary Management Systems</a></li>
										<li style="font-size:15px"><i class="fa fa-angle-right"></i>&nbsp;<a id="list" class="hvr-float-shadow" href="<?php echo base_url();?>index.php/solutions#property">Property Management Systems</a></li>
										<li style="font-size:15px"><i class="fa fa-angle-right"></i>&nbsp;<a id="list" class="hvr-float-shadow" href="<?php echo base_url();?>index.php/solutions#fleet">Fleet Management Systems</a></li>
										<li style="font-size:15px"><i class="fa fa-angle-right"></i>&nbsp;<a id="list" class="hvr-float-shadow" href="<?php echo base_url();?>index.php/solutions#port">Portfolio Management Systems</a></li>
										<li style="font-size:15px"><i class="fa fa-angle-right"></i>&nbsp;<a id="list" class="hvr-float-shadow" href="#">Sure Chamaa Management Systems</a></li>
										<li style="font-size:15px"><i class="fa fa-angle-right"></i>&nbsp;<a id="list" class="hvr-float-shadow" href="<?php echo base_url();?>index.php/solutions#hospital">Hospital Management Systems</a></li>
									</ul>	
							
						</div>
						<div class="col-md-6" id="indent">	
												
									<ul class="list-unstyled">
										<li style="font-size:15px"><i class="fa fa-angle-right"></i>&nbsp;<a id="list" class="hvr-float-shadow" href="<?php echo base_url();?>index.php/solutions#academic">Integrated Academic Management Systems</a></li>
										<li style="font-size:15px"><i class="fa fa-angle-right"></i>&nbsp;<a id="list" class="hvr-float-shadow" href="#">Sacco &amp; Microfinance Management Systems</a></li>
										<li style="font-size:15px"><i class="fa fa-angle-right"></i>&nbsp;<a id="list" class="hvr-float-shadow" href="#">HR &amp; Payroll Management Systems</a></li>
										<li style="font-size:15px"><i class="fa fa-angle-right"></i>&nbsp;<a id="list" class="hvr-float-shadow" href="#">Donor Fund &amp; Grant Management Systems</a></li>
										<li style="font-size:15px"><i class="fa fa-angle-right"></i>&nbsp;<a id="list" class="hvr-float-shadow" href="#">E-Board Management Systems</a></li>
										<li style="font-size:15px"><i class="fa fa-angle-right"></i>&nbsp;<a id="list" class="hvr-float-shadow" href="#">Sure Hotel Management Systems</a></li>
										<li style="font-size:15px"><i class="fa fa-angle-right"></i>&nbsp;<a id="list" class="hvr-float-shadow" href="#">Agricultural Firm Management Systems</a></li>
										<li style="font-size:15px"><i class="fa fa-angle-right"></i>&nbsp;<a id="list" class="hvr-float-shadow" href="#">Customer Relations Management Systems</a></li>
									</ul>							
							
						</div>										
					</div>
			</div>
	</div>
</div>
</div>

<footer id="footer">
<div class="container">
		<div id="rowfooter" class="row">
				<div id="indent" class="col-md-9 col-xs-12">
					<p align="left" style="font-size:15px">
					&copy; Copyright 2015 SureStep Systems &amp; Solutions. All rights reserved.
					</p>
				</div>	
				<div class="col-md-3">	
					<ul class="list-unstyled">
						<li><a id="list" href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a id="list" href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a id="list" href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a id="list" href="#"><i class="fa fa-skype"></i></a></li>
						<li><a id="list" href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a id="list" href="#"><i class="fa fa-chevron-circle-up"></i></li>
					</ul>					
				</div>		
		</div>
</div>
</footer>


<script src="<?php echo base_url();?>js/jquery-1.10.2.js"></script>
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script>
	$('.carousel').carousel({
	interval: 2500
</script>

<script>
		animationClick('#dynamics', 'shake')
		animationClick('#dynamics1', 'shake')
		animationClick('#dynamics2', 'shake')
		animationClick('#dynamics3', 'shake')

		function animationClick(element, animation){
		  element = $(element);
		  element.click(
		    function() {
		      element.addClass('animated ' + animation);
		      //wait for animation to finish before removing classes
		      window.setTimeout( function(){
		          element.removeClass('animated ' + animation);
		      }, 2000);
		    }
		  );
		};

	
</script>


</body>
</html>