<!DOCTYPE html>

<html lang="en">
<head>
	<title>Aplikacioni</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<?php
include("config.php");
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
			<p class="txt-center l1-txt1 p-b-60">
					Aplikacioni per kontaktet e telefonit, edito me poshte personin tuaj!
				</p>
			
              <div class="container">
			<button class="btn btn-default" onClick ="parent.location='shto.php'">
						Shto
					</button>
					</div>
				<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Nr.</th>
            <th scope="col">Emri</th>
            <th scope="col">Mbiemri</th>
            <th scope="col">Numri kontaktues</th>
            <th scope="col">Veprimet</th>
          </tr>
        </thead>
                  <tbody>
                     <?php
$ret=mysqli_query($conn,"Select * From perdoruesi INNER Join kontakti ON perdoruesi.Id_Kontakti = kontakti.ID_kontakti");
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {
 
?>
<!--Fetch the Records -->
                    <tr>
                        <td><?php echo $cnt;?></td>
                        <td><?php  echo $row['Emri'];?> <?php  echo $row['Mbiemri'];?></td>
                        <td><?php  echo $row['Email'];?></td>                        
                        <td><?php  echo $row['tel'];?> ,<?php  echo $row['home'];?> ,<?php  echo $row['office'];?></td>
                        <td>
<a href="read.php?viewid=<?php echo htmlentities ($row['Id_Kontakti']);?>" class="view" title="View" data-toggle="tooltip"></a>
<a href="editontact.php?id=<?php echo $row['ID_Perdoruesi'];?>" class="edit" title="Edit" data-toggle="tooltip"><button type="button" class="btn btn-success">Edit</button></a>                      
 <a href="delete.php?ID_Perdoruesi=<?php echo ($row['ID_Perdoruesi']);?>" class="delete" title="delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><button type="button" class="btn btn-danger"><i class="far fa-trash-alt">Delete</i></button></a>
</td>
 </tr>
<?php 
$cnt=$cnt+1;
} } else {?>
<tr> 
              
<th style="text-align:center; color:red;" colspan="6">No Record Found</th>
</tr>
<?php } ?>      
      </table>
    </div>
  </div>
</div>
			</div>
				

		
		</div>
	</div>



	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/moment.min.js"></script>
	<script src="vendor/countdowntime/moment-timezone.min.js"></script>
	<script src="vendor/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script>
		$('.cd100').countdown100({
			/*Set Endtime here*/
			/*Endtime must be > current time*/
			endtimeYear: 0,
			endtimeMonth: 0,
			endtimeDate: 35,
			endtimeHours: 18,
			endtimeMinutes: 0,
			endtimeSeconds: 0,
			timeZone: "" 
			// ex:  timeZone: "America/New_York"
			//go to " http://momentjs.com/timezone/ " to get timezone
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>