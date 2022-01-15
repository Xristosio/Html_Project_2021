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
        <title>Digital Systems Uop | Ανακοινώσεις</title>
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
                <a class="navbar-brand" >ΑΝΑΚΟΙΝΩΣΕΙΣ ΚΑΘΗΓΗΤΩΝ ΤΜΗΜΑΤΟΣ ΨΗΦΙΑΚΩΝ ΣΥΣΤΗΜΑΤΩΝ</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item">						
							<li class="nav-item"><a class="nav-link active" href="teacherpage.php">ΕΠΙΣΤΡΟΦΉ ΣΤΗΝ ΕΙΣΑΓΩΓΉ ΑΝΑΚΟΙΝΏΣΕΩΝ</a></li>
							<li class="nav-item"><a class="nav-link active" href="https://eclass.uop.gr/">ECLASS</a></li>
							<li class="nav-item"><a class="nav-link active" href="logout.php">ΕΞΟΔΟΣ</a></li>
							
                             <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">ΠΕΡΙΣΟΤΕΡΑ</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="https://e-secretary.uop.gr/ClassWeb/main.asp">Ηλεκτρονική γραματτεία</a></li>                               
                                <li><a class="dropdown-item" href="info2.php">Πληροφορίες τμήματος</a></li>
                            </ul>
                        </li>                  
                    </ul>
                </div>
            </div>
        </nav>
        <!-- __________________________________________Page content____________________________________________-->
        <div class="container">
            <div class="text-center mt-5">				
				<div style = "margin-top:250">
					<div align = "center">
						<div style = "width:80%; border:2px solid; border-radius:13px; ">
							<div style = "width:100%; background-color:#333333; color:white; border-radius:10px 10px 0 0; padding:6px;"><b><h2>ΑΝΑΚΟΙΝΩΣΕΙΣ</h2></b></div>
								<div style = "margin:10px ">
									<form>
										<select id="chosekath" onmouseup="myfunction()">									
										<option value="p.filippopoulos@uop.gr">Πάνος Φιλιππόπουλος</option>
										<option value="i.liaperdos@uop.gr">Γιάννης Λιαπέρδος</option>
										<option value="p.kokkinos@uop.gr">Παναγιώτης Κόκκινος</option>
										<option value="vacilos@uop.gr">Βασίλης Πουλόπουλος</option>
										<option value="margaris@uop.gr">Διονύσης Μάργαρης</option>
										<option value="stoug@uop.gr">Στέφανος Ουγιάρογλου</option>
										<option value="a.papadimitriou@uop.gr">Θάνος Παπαδημητρίου</option>
										<option value="gnikolakak@uop.gr">Χριστίνα Νικολακάκου</option>
										<option value="koutrakis@uop.gr">Κώστας Κουτράκης</option>
										</select>
									</form>								
									<div style ="border: 1px solid black; border-radius: 6px; padding:25px; margin-top:20px; text-align:left" id="resp"><b>Επιλέξτε καθηγητή για να δείτε τις ανακοινώσεις.</b></div>
								</div>
							</div>
						</div>
					</div>
				</div>                                                             
            </div>    	     
        </div>
    </body>
</html>
<script>
	xmlHttp = new XMLHttpRequest();
	function myfunction() 
	{
		var onoma = document.getElementById("chosekath").value;
		document.getElementById("resp").innerHTML = "";
		var url = "sqljsonselect.php?onoma="+onoma;
		xmlHttp.open("GET", url, true);
		xmlHttp.onreadystatechange = function() 
		{
			setResult();
		}
		xmlHttp.send(null);
	}
	function setResult() 
	{
		if ((xmlHttp.readyState == 4) && (xmlHttp.status == 200)) 
		{
			var res = document.getElementById("resp");
			var response = xmlHttp.responseText;
			var resp = JSON.parse(response);
			res.innerHTML ="";
			if (resp[0] == null)
			{
				res.innerHTML = "<p><b>Δεν υπάρχουν ακόμα ανακοινώσεις</b></p>";
				return;
			}
			for(i=0; i<resp.length; i++)
			{
				res.innerHTML += "<p><b>Μάθημα: "+resp[i].mathhma+"</b><p>";
				res.innerHTML += "<p><b>"+resp[i].titlos+" "+resp[i].hmeromhnia+"</b></p>";
				res.innerHTML += "<p>"+resp[i].anakoinwseis+"<p></br>";
			}
		}
	}
</script>
