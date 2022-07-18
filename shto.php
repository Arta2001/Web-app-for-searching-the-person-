<!DOCTYPE html>
<html lang="en">

<head><title>Aplikacioni</title>

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Forma per regjistrim</title>

   
    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/shtocss.css" rel="stylesheet" media="all">
</head>
<?php 
//Databse Connection file
include('config.php');
if(isset($_POST['Shto']))
  {
  	//getting the post values
    $Emri=$_POST['Emri'];
    $Mbiemri=$_POST['Mbiemri'];
    $Email=$_POST['Email'];
    $Gjinia=$_POST['Gjinia'];
    $tel=$_POST['tel'];
	$home=$_POST['home'];
    $office=$_POST['office'];
	
	if(empty($Emri) || empty($Mbiemri) || empty($Email)|| empty($Gjinia) ||empty($tel)) {
		echo "<font color='red'>***Ju lutem plotesoni fushat e kerkuara (*).***</font><br/><br/>";
	}
   else {
  // Query for data insertion
   
		$query_1 = mysqli_query($conn,"SELECT MAX(ID_Kontakti) FROM `kontakti`");
		$results = mysqli_fetch_array($query_1);
		$cur_auto_id = $results['MAX(ID_Kontakti)'] + 1;
		$query_kontakti = mysqli_query($conn,"Insert into kontakti (tel, home, office) values ('$tel', '$home','$office')");
		//echo "<script>alert('Te dhenat. $tel');</script>";
		//if($query_kontakti) {
				//$query_mob += 1;
			
		$query=mysqli_query($conn, "Insert into perdoruesi(Emri,Mbiemri, Email, Gjinia,Id_Kontakti) values('$Emri','$Mbiemri', '$Email', '$Gjinia','$cur_auto_id')");
		if($query) {
			echo "<script>alert('Success , $Gjinia');</script>";
			}
		else{
			echo "<script>alert('Diqka eshte gabim. Ju lutem provojeni perseri');</script>";
			
		}
	}
   }
?>
<body>
 <div class="bg-img1 size1 overlay1" style="background-image: url('images/bg01.jpg');">
		<div class="size1 p-l-15 p-r-15 p-t-30 p-b-50">
			<div class="flex-w flex-sb-m p-l-75 p-r-60 p-b-165 respon1">
				<div class="wrappic1 m-r-30 m-t-10 m-b-10">
				
				</div>

				<div class="flex-w m-t-10 m-b-10">
					<a href="#" class="size4 flex-c-m how-social trans-04 m-r-5 m-b-3 m-t-3">
						<i class="fa fa-facebook"></i>
					</a>

					<a href="#" class="size4 flex-c-m how-social trans-04 m-r-5 m-b-3 m-t-3">
						<i class="fa fa-twitter"></i>
					</a>

					<a href="#" class="size4 flex-c-m how-social trans-04 m-r-5 m-b-3 m-t-3">
						<i class="fa fa-youtube-play"></i>
					</a>
				</div>
			</div>

			<div class="wsize1 m-lr-auto">
				<p class="txt-center l1-txt1 p-b-60">
					Aplikacioni per kontaktet e telefonit, kerko me poshte personin tuaj!
				</p>
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Regjistrohu</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Emri*</label>
                                    <input class="input--style-4" type="text" name="Emri">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Mbiemri*</label>
                                    <input class="input--style-4" type="text" name="Mbiemri">
                                </div>
                            </div>
                        </div>
                        
                               
                            
                            <div class="row row-space">
							<div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email*</label>
                                    <input class="input--style-4" type="email" name="Email">
                                </div>
                            </div>
                                <div class="input-group">
								
                                    <label class="label">Gjinia*</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Mashkull
                                            <input type="radio" checked="checked" value="Mashkull" name="Gjinia">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Femer
                                            <input type="radio" name="Gjinia" value="Femer">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        
                        <div class="row row-space">
       
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Numri kontaktues*</label>
                                    <input class="input--style-4" type="text" name="tel">
                                </div>
								</div>
								 <div class="col-2">
								
									<div class="input-group">
									<label class="label">Numri kontaktues shtepi</label>
                                    <input class="input--style-4" type="text" name="home">
									</div>
								</div>
                            
                        </div>
						 <div class="row row-space">
       
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Numri kontaktues pune</label>
                                    <input class="input--style-4" type="text" name="office">
                                </div>
								</div>
								 <div class="col-2">
							
                            
                        </div>
                        
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" name="Shto" type="submit">Shto</button>
                        </div>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->