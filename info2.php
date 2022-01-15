<?php
session_start();
if(!isset($_SESSION['user'])){
      header("location:login.html");
      die();
   } 
?>
<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Digital Systems Uop | Πληροφορίες Τμήματος</title>
        <link rel="icon" type="image/x-icon" href="assets/papel icon.png" />
        <link href="css/styles.css" rel="stylesheet" />
        <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:16px;             
            background-repeat: no-repeat;
            background-image: url('backicon.jpg');
            background-size:cover;
            background-attachment: fixed;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:15px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
    </head>
    <body>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
		<script src="js/scripts.js"></script>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" >ΑΝΑΚΟΙΝΩΣΕΙΣ ΤΜΗΜΑΤΟΣ ΨΗΦΙΑΚΩΝ ΣΥΣΤΗΜΑΤΩΝ</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<li class="nav-item"><a class="nav-link active" href="teacherpage.php">ΕΠΙΣΤΡΟΦΉ ΣΤΗΝ ΕΙΣΑΓΩΓΉ ΑΝΑΚΟΙΝΏΣΕΩΝ</a></li>
							<li class="nav-item"><a class="nav-link active" href="index2.php">ΠΡΟΒΟΛΗ ΑΝΑΚΟΙΝΩΣΕΩΝ</a></li>						
							<li class="nav-item"><a class="nav-link active" href="https://eclass.uop.gr/">ECLASS</a></li>
                             <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">ΠΕΡΙΣΟΤΕΡΑ</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="https://eclass.uop.gr/">eClass</a></li>  
                                <li><a class="dropdown-item" href="https://e-secretary.uop.gr/ClassWeb/main.asp">Ηλεκτρονική γραματτεία καθηγητών</a></li>                               
                            </ul>
                        </li>                  
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="text-center mt-5">				
				<div style = "margin-top:250">
				<div align = "center">
					<div style = "width:80%; border:2px solid; border-radius:13px; ">
						<div style = "width:100%; background-color:#333333; color:white; border-radius:10px 10px 0 0; padding:6px;"><b><h2>ΠΛΗΡΟΦΟΡΙΕΣ</h2></b></div>
							<div style = "margin:10px ">
							<p><h5>
								Ο βασικός στόχος του Προγράμματος Προπτυχιακών Σπουδών του Τμήματος Ψηφιακών Συστημάτων 
								είναι να παρέχει θεμελιώδεις και εξειδικευμένες γνώσεις στην επιστήμη και τεχνολογία των σύγχρονων υπολογιστικών 
								και τηλεπικοινωνιακών συστημάτων. Πιο συγκεκριμένα το πρόγραμμα σπουδών στοχεύει στους τομείς του 
								υλικού και λογισμικού των ηλεκτρονικών υπολογιστών, της επιστήμης της πληροφορικής, 
								των πληροφοριακών και τηλεπικοινωνιακών συστημάτων, της επεξεργασίας σήματος, των δικτύων και των υπηρεσιών διαδικτύου. 
								Οι απόφοιτοι του Τμήματος Ψηφιακών Συστημάτων έχουν τα ίδια καθιερωμένα επαγγελματικά δικαιώματα με τους αποφοίτους Τμημάτων Πληροφορικής ή Επιστήμης Υπολογιστών.
							</h5></p>
							</div>
						</div>
					</div>
				</div>
			</div>                                                             
            </div>    	
        </div>
    </body>
</html>
