<?php

include_once("config.php");

if(isset($_POST['editontact'])){   
	$ID_Perdoruesi = $_POST['ID_Perdoruesi'];
	$Emri=$_POST['Emri'];
	$Mbiemri=$_POST['Mbiemri'];
	$Email=$_POST['Email'];
	$Tel = $_POST['tel'];

        
        $result_edit = mysqli_query($conn,"UPDATE perdoruesi, kontakti SET perdoruesi.Emri='$Emri', perdoruesi.Mbiemri='$Mbiemri', perdoruesi.Email='$Email',
									kontakti.tel = '$Tel' WHERE ID_Perdoruesi=$ID_Perdoruesi ");
		if($result_edit) {
		
			include("lista.php");
			exit;
		} else {
			echo "<script>alert('Diqka eshte gabim. Ju lutem provojeni perseri!!!');</script>";
		}
    
}
?>

<?php

$my_id = isset($_GET['id']) ? $_GET['id'] : '';
$kontakt_id = isset($_GET['id_kontakti']) ? $_GET['id_kontakti'] :''; 
$result_user = mysqli_query($conn, "SELECT * FROM perdoruesi WHERE ID_Perdoruesi='$my_id'");

while($res = mysqli_fetch_array($result_user)) {
    $Emri = $res['Emri'];
	$Mbiemri = $res['Mbiemri'];
    $Email = $res['Email'];
	$Id_kont = $res['Id_Kontakti'];
	$kontaktet=mysqli_query($conn,  "SELECT * FROM kontakti WHERE ID_Kontakti = '$Id_kont'");
	$res_kontaktet = mysqli_fetch_array($kontaktet);
	$tel = $res_kontaktet['tel'];
	$tel_office = $res_kontaktet['office'];
	$tel_home = $res_kontaktet['home'];
   
}


?>


<!DOCTYPE html>
<html lang="en">

<head><title>Forma per modifikim</title>

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


   
    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/shtocss.css" rel="stylesheet" media="all">
</head>


        <!-- HEADER MOBILE-->

        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->

        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
         
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
			</div><p class="txt-center l1-txt1 p-b-60">
					Aplikacioni per kontaktet e telefonit, modifiko me poshte personin tuaj!
				</p>

			<div class="wsize1 m-lr-auto">
				
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Metoda per modifikim</h2>
                    <form method="POST">

                                       <!-- <form method="post" action="editontact.php">-->
						<div class="col-2">
                                <div class="input-group">
								<label>Emri </label>
								<input type="text"   name="Emri" value="<?php echo $Emri;?>">
							</div></div>
										<div class="col-2">
                                <div class="input-group">
								<label>Mbiemri </label>
								<input type="text"   name="Mbiemri" value="<?php echo $Mbiemri;?>">
							</div></div>
							<div class="col-2">
                                <div class="input-group">
								<label>Email</label>
								<input type="email"   name="Email" value="<?php echo $Email;?>">
							</div></div>
								   <div class="row row-space">
       
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Numri kontaktues*</label>
                                    <input class="input--style-4" type="text" name="tel" value="<?php echo $tel;?>">
                                </div>
								</div>
								 <div class="col-2">
								
									<div class="input-group">
									<label class="label">Numri kontaktues shtepi</label>
                                    <input class="input--style-4" type="text" name="home" name="tel" value="<?php echo $tel_home;?>">
									</div>
								</div>
                            
                        </div>
						 <div class="row row-space">
       
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Numri kontaktues pune</label>
                                    <input class="input--style-4" type="text" name="office"  name="tel" value="<?php echo $tel_office;?>">
                                </div>
								</div>
								 <div class="col-2">
							
                            
                        </div>
				
						<input type="hidden" name="ID_Perdoruesi" value="<?php echo $_GET['id'];?>" />
                         <div class="table-data__tool-right">
                        <div class="p-t-15">	
                            <button class="btn btn--radius-2 btn--blue" name="editontact" type="submit">Modifiko</button>
                        </div>
						
                    </form>
                </div>
            </div>
        </div>
    </div>





</body>

</html>
<!-- end document-->
