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
        <title>Digital Systems Uop | Εισαγωγή Ανακοίνωσης</title>
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
         textarea 
         {
			resize: none;
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
							<li class="nav-item"><a class="nav-link active" href="index2.php">ΠΡΟΒΟΛΗ ΑΝΑΚΟΙΝΩΣΕΩΝ</a></li>						
							<li class="nav-item"><a class="nav-link active" href="https://e-secretary.uop.gr/ClassWeb/main.asp">ΗΛΕΚΤΡΟΝΙΚΗ ΓΡΑΜΜΑΤΕΙΑ</a></li>			
							<li class="nav-item"><a class="nav-link active" href="logout.php">ΕΞΟΔΟΣ</a></li>
                             <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">ΠΕΡΙΣΟΤΕΡΑ</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="https://eclass.uop.gr/">eClass</a></li>                                     
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
							<div style = "width:100%; background-color:#333333; color:white; border-radius:10px 10px 0 0; padding:6px;"><b><h2>ΕΙΣΑΓΩΓΗ ΑΝΑΚΟΙΝΩΣΗΣ</h2></b></div>
								<div style = "margin:10px ">	
									<div align = "left">
										<div style ="border: 1px solid black; border-radius: 6px; padding:25px;margin-top:20px;">
											Μάθημα: <input id=idmathhma type='text' name='mathhma' placeholder="Μάθημα"></br></br>
											Τίτλος: <input id=idtitle type='text' name='titlos' placeholder="Τίτλος ανακοίνωσης"></br></br>										 
											Ημερομηνία: <input id=idhmeromhnia type='text' name='hmeromhnia' placeholder="Ημερομηνία"></br></br>  
											Ανακοίνωση:<textarea id="idanakoinwsh" name="anakoinwsh" rows="4" cols="50" placeholder="Ανακοίνωση"></textarea>
										<input type="button" value="register" onclick="getResult();">	
									  </div>					 
								    </div>		
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
	function getResult() 
	{
		var titlos = document.getElementById("idtitle").value;	
		var hmeromhnia = document.getElementById("idhmeromhnia").value;
		var mathhma = document.getElementById("idmathhma").value;
		var anakoinwsh = document.getElementById("idanakoinwsh").value;		
		xmlHttp.open("POST", "insertanakoinwsh.php", true);				
		xmlHttp.onreadystatechange = function() 
		{
			setResult();
		};
		xmlHttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");								     
		xmlHttp.send("&titlos="+titlos+"&hmeromhnia="+hmeromhnia+"&mathhma="+mathhma+"&anakoinwseis="+anakoinwsh);		
	}
	function setResult() 
	{
		if (xmlHttp.readyState == 4 && xmlHttp.status == 200) 
		{
			var response = xmlHttp.responseText;
			var resp = JSON.parse(response);																										
			if (resp.status == "ERROR")
			{
				alert("Something goes wrong!");
			}
			else if (resp.status == "OK")
			{	
				alert("A record was entered");											
			}
		}
	}
</script>

