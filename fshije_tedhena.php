<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
?>
<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($conn,
"SELECT * FROM akp ORDER BY Id DESC");
?>
<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Uebaplikacioni per Menaxhimin e Raportit Ditor Personal  </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
	
		<!-- Page Wrapper -->
			<div id="page-wrapper">
		<!-- Header -->
	<?php include_once("kokaf.php");?>
	     <!-- Menu -->
			<?php include_once("menyja.php"); ?>

		<!-- Wrapper -->
		<!-- One -->
			<section id="main" class="wrapper">
			<div class="inner">
			<p style="text-align:right;">Përshëndetje, <em><?php  echo $login_user;?>!</em></p>
				<div class="content">
					<div class="rreshti">
					<div class="table-wrapper">
					<form action="" method="post">  
						<table>
							<tr>
								<h3>Kerko te dhenat per fshirje</h3>
							</tr>
							<tr>
							<td>
								Shkruaj:
								</td>
								<td>
								<input type="text" name="term" placeholder="Titullit ose Pamjes se faqes"/>
							</td>
							<td> <input type="submit" value="Kerko" /></td>
							</tr>
						</table> 
						</div>
						</div>
					</form> 
					<div class="table-wrapper">
					<table >
						<div class="table-wrapper">
						<tr>
							<td>Titulli</td>
							<td>Pershkrimi</td>
							<td>Dosje</td>
							<td>Pamja e faqes</td>
							<td>Modifiko</td>
						</tr> 
						<?php
						if (!empty($_REQUEST['term'])) {
						$term = mysqli_real_escape_string
						($conn,$_REQUEST['term']);     
						$sql = mysqli_query($conn,
						"SELECT * FROM umrdp_tedhenat 
						WHERE Titulli LIKE '%".$term."%' 
						OR  Pershkrimi LIKE '%".$term."%'"); 
						while($rreshti= mysqli_fetch_array($sql)) { 		
								echo "<tr>";
								echo "<td>".$rreshti['Titulli']."</td>";
								echo "<td>".$rreshti['Pershkrimi']."</td>";
								echo "<td>".$rreshti['Dosje']."</td>";	
								echo "<td>".$rreshti['Pamja']."</td>";	
								echo "<td><a href=\"Fshitedhena.php?ID_Permbajtja=$rreshti[ID_Permbajtja]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini te dhenat?')\" class='button' class='button primary'>Fshije</a></td></tr>";		
							}

						}

						?>
					
					</div>
					</table>
						
				</div>
			</div>
		</section>

	<!-- Footer -->
						
	 <?php include_once("fundifaqes.php"); ?>


	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

	</body>
</html>
