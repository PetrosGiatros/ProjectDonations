<?php
	include 'phpconnect.php';
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="main.css">
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
				<a class="nav-link d-none d-md-inline-block" href="index.html"><i class="fa fa-home"></i><span class="d-none d-lg-inline"> Αρχική </span></a>
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
	
    <body style="background-color:#A6D4DA;">
		<h1 align="center" >Λίστα Δωρεών:</h1> 
        <div class="container-fluid">
            <div class="row">
                <div class="card-columns"> 
				<?php
				    $sql="SELECT COUNT(NeedID) AS NeedNO FROM Needs;";
                    $result = mysqli_query($con,$sql);
                    $row=mysqli_fetch_array($result);
                    $needs_number=$row[0];
                    /*for ($x = 0; $x < $needs_number; $x++) {
                        echo $card;
                    }*/
                ?>
                
                <?php  
                        $rowNeedName=array_fill (0,$needs_number,'0');
                        $rowGoal=array_fill (0,$needs_number,'0');
                        $rowLocation=array_fill (0,$needs_number,'0');
                        $rowHTMLlink=array_fill (0,$needs_number,'0');
                        $rowImage=array_fill (0,$needs_number,'0');
                        $rowDateCreated=array_fill (0,$needs_number,'0');
                        $rowFundsCollected=array_fill (0,$needs_number,'0');
                        
                        $data="SELECT * from Needs;";
                        $result2 = mysqli_query($con,$data);
                        $counter=0;
                        while($row2= mysqli_fetch_array($result2)){
                             $rowNeedName[$counter]=$row2['1'];
                             $rowLocation[$counter]=$row2['2'];
                             $rowGoal[$counter]=$row2['3'];
                             $rowHTMLlink[$counter]=$row2['4'];
                             $rowImage[$counter]=$row2['5'];
                             $rowDateCreated[$counter]=$row2['6'];
                             $rowFundsCollected[$counter]=$row2['7'];
                             $counter++;
                        }
                        
                        for ($i = 0; $i < $needs_number; $i++)
                        {
                            $percentageGoal=$rowFundsCollected[$i]*100/$rowGoal[$i];
                            $card = '<div class="card article-card text-right">
                              <img class="card-img-top" src="'.$rowImage[$i].'">
                              <div class="progress">
                              <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: '.$percentageGoal.'%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">'.$percentageGoal.'%</div>
                            </div>
                            <div class="card-body text-left">
                            
                               <h5 class="card-title">'.$rowNeedName[$i].'</h5>
                                <p class="card-text">'.$rowLocation[$i].'</p>
                                <a href="'.$rowHTMLlink[$i].'" class="btn btn-green">Δωρίστε Τώρα! <i class="fas fa-donate"></i></a>
                            </div>
                            <div class="card-footer text-muted">
                                <small class="text-right">Ημερομηνία δημιουργίας: '.$rowDateCreated[$i].'</small>
                            </div>
                        </div>';
                        echo $card;
                        }
                ?>                        
				</div>
            </div>
		</div>
    </body>
</html>