<?php
	include 'https://projectdonations.000webhostapp.com/phpconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="css\main.css">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="css\bootstrap.min.css.map">
    <link rel="stylesheet" href="css\webfonts\all.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
	<!-- Navbar-->
    <nav style="background-color:powderblue;" class="navbar navbar-expand-sm bg-menu-light navbar-light box-shadow navbar-static-top" id="nav">
        <ul class="navbar-nav nav-list">
            <li class="nav-item">
            <a class="toggle-btn nav-link" href="#">
                <i class="fa fa-bars d-xs-inline d-md-none" id="sidebtn"> </i>
            </a>
            </li>
            <li class="nav-item">
				<a class="nav-link d-none d-md-inline-block" href="home.html"><i class="fa fa-home"></i><span class="d-none d-lg-inline"> Αρχική </span></a>
            </li>
            <li class="nav-item active">
				<a class="nav-link d-none d-md-inline-block"><i class="fas fa-hand-holding-usd"></i><span class="d-none d-lg-inline"> Δωρεές </span></a>
            </li>

        </ul>
        <!-- Logo -->
        <a class="navbar-brand logo justify-content-center" href="#">
            <img src="images\logo.png"  alt="YesPolitics">
        </a>
        <div class="ml-auto justify-content-end">
            <a class="navbar-brand" href="#">#DoreesVolo</a>
        </div>
    </nav>
	
    <body style="background-color:A6D4DA;">
		<h1 align="center" >Λίστα Δωρεών:</h1> 
        <div class="container-fluid">
            <div class="row">
                <div class="card-columns"> 
				<!-- edw tha mpei kwdikas php pou tha metraei poses anages tha yparxoun sthn vash gia na kanoume kai toses karteles-->
                        <div class="card article-card">
                            <div class="card-body">
                                <h5 class="card-title">SAMPLE TITLE</h5>
                                <p class="card-text">FIRST ROW FIRST ROW FIRST ROW FIRST ROW FIRST ROW </p>
                                <a href="https://www.google.gr/" class="btn btn-blue">Περισσότερα</a>
                            </div>
                            <div class="card-footer text-muted">
                                <small>από <a href="https://www.google.gr/">PETROS GIATROUTSIKOS</a>, </small>
                                <small class="text-right">10/10/2010</small>
                            </div>
                        </div> 
						
				</div>
            </div>
		</div>
    </body>
</html>