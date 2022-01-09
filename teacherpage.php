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
							<li class="nav-item"><a class="nav-link active" href="https://e-secretary.uop.gr/ClassWeb/main.asp">ΗΛΕΚΤΡΟΝΙΚΗ ΓΡΑΜΜΑΤΕΙΑ</a></li>			
							<li class="nav-item"><a class="nav-link active" href="index.html">ΕΞΟΔΟΣ</a></li>
                             <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">ΠΕΡΙΣΟΤΕΡΑ</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="https://eclass.uop.gr/">eClass</a></li> 
                                <li><a class="dropdown-item" href="https://e-secretary.uop.gr/UniStudent/login.asp">Ηλεκτρονική γραματτεία φοιτητών</a></li>
                                                              
                                <li><a class="dropdown-item" href="info.html">Πληροφορίες τμήματος</a></li>
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
									

										
										
										
											<form action="insertanakoinwsh.php" method = "POST">											
												<label>Εισάγετε όνομα(πλήρη):</label><br/>
												<input type="text" name="onoma"><br/>
												<label>Εισάγετε ανακοίνωση: </label><br/>
												<input type="text" name="anakoinwsh"><br/><br/>
												<input type="submit" value="Εκχώρηση">												
										    </form>	
								</div>
							</div>
						</div>
					</div>
				</div>                                                             
            </div>    	
        </div>
    </body>
</html>


