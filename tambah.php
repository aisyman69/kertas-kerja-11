<html>
	<head>
	<title>Rekod Vaksinasi Pelajar</title>
	</head>
	<style>
	h2 {
		text-align: center;
		padding-top: 20px;
	}
	body {
		background-color: #FFE4E1;
	}
	</style>
	<body>
	<center>
	<h2>BORANG MAKLUMAT PELAJAR</h2>
	
	<table border=0 cellpadding=5 cellspacing=1 bgcolor=white style="padding:20px;border-top:1px solid black; border-left:2px solid black; border-right:2px solid black; border-bottom:1px solid black; border-radius:10px">
	
	<form action="" method="post">
	
	<tr>
		<td>ID PELAJAR</td><td>:</td><td> <input type="text" name="id_pelajar" required><br><br></td>
	</tr>
	<tr>
		<td>NAMA PELAJAR</td><td>:</td><td> <input type="text" name="nama_pelajar" required><br><br></td>
	</tr>
	<tr>
		<td>KELAS</td><td>:</td><td> <input type="text" name="kelas" required><br><br></td>
	</tr>
	<tr>
		<td>JENIS VAKSIN</td><td>:</td><td> <input type="text" name="jenis_vaksin" required><br><br></td>
	</tr>
	<tr>
		<td>TARIKH VAKSIN</td><td>:</td><td> <input type="date" name="tarikh_vaksin" required><br><br></td>
	</tr>
	<tr>
		<td colspan=3><center><input type="Submit" name="hantar" value="HANTAR"><br></td>
	</tr>

	</form>
	</tr>
	</table>
	</body>

<!--memproses input yang dimasukkan ke dalam db-->
<?php
	include('config.php');
	if (isset($_POST['hantar'])){
	
//sila lengkapkan kod atur
	$ka=$_POST['id_pelajar'];	
	$ug=$_POST['nama_pelajar'];
	$ay=$_POST['kelas'];
	$si=$_POST['jenis_vaksin'];
	$al=$_POST['tarikh_vaksin'];

$query="insert into maklumat ( id_pelajar , nama_pelajar , kelas , jenis_vaksin , tarikh_vaksin )
        values ('$ka' , '$ug' , '$ay' , '$si' , '$al')";
        if(mysqli_query($conn,$query)){

         echo"berjaya";
         header('location:index.php');
     }
     else {

     	 echo "tidak berjaya"; 
     }
     }
?>
</html>