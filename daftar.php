<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
</head>
<body>
	<form  action=" " method="POST">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" maxlength="35" style="width: 160px; height: 18px; border-radius: 10%"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td><input type="number" name="nim" minlength="10" maxlength="10" style="width: 160px; height: 18px; border-radius: 10%"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td><input type="text" name="kelas" style="width: 160px; height: 18px; border-radius: 10%"></td>
			<td><input type="radio" name="kelas" value="1">D3MI-41-01</td>
			<td><input type="radio" name="kelas" value="2">D3MI-41-02</td>
			<td><input type="radio" name="kelas" value="3">D3MI-41-03</td>
			<td><input type="radio" name="kelas" value="4">D3MI-41-04</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<input type="radio" name="jk" value="lk">Laki-laki<br>
				<input type="radio" name="jk" value="pr">Perempuan
			</td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td>
				<input type="checkbox" name="hobi[]" value="Acting">Acting <br>
				<input type="checkbox" name="hobi[]" value="Backpacking">Backpacking Travel 
			</td>
			<td>
				<input type="checkbox" name="hobi[]" value="Badminton">Badminton<br>
				<input type="checkbox" name="hobi[]" value="Football">Football
			</td>
			<td>
				<input type="checkbox" name="hobi[]" value="Swimming">Swimming<br>
				<input type="checkbox" name="hobi[]" value="Ballet">Ballet
			</td>
			<td>
				<input type="checkbox" name="hobi[]" value="Dancing">Dancing<br>
				<input type="checkbox" name="hobi[]" value="Music">Music
			</td>
			<td>
				<input type="checkbox" name="hobi[]" value="Programming">Programming<br>
				<input type="checkbox" name="hobi[]" value="Other Hobby">Other Hobby
			</td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>
				<select name="fac">
					<option value="feb">Fakultas Ekonomi dan Bisnis</option>
					<option value="fkb">Fakultas Komunikasi dan Bisnis</option>
					<option value="fik">Fakultas Industri Kreatif</option>
					<option value="fri">Fakultas Rekayasa Industri</option>
					<option value="fte">Fakultas Teknik Elektro</option>
					<option value="fti">Fakultas Teknik Informatika</option>
					<option value="fit">Fakultas Ilmu Terapan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="textarea" name="addy"></td>
		</tr>
		<tr>
			<td></td>
			<td style="padding-top: 10px"><center><input type="submit" name="regist" value="Daftar" style="width: 60px; height: 25px; border-radius: 10%; background-color: white"></center></td>
		</tr>
 	</table>
 </form>

<?php
	$servername = "localhost";
	$id = "root";
	$nama = "";
	$db = "modenam";
	$conn = new mysqli($servername, $id, $nama, $db);
?>

 <?php
 include 'db.php';
 if (isset($_POST['regist'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kelas = $_POST['kelas'];
    $jk = $_POST['jk'];
    $hobi = implode(", ", $_POST['hobi']);
    $fac = $_POST['fac'];
 
   
    $sql="INSERT INTO Pendaftaran VALUE('$nim','$nama','$kelas','$jk','$hobi','$fac')";
    $yuna = mysqli_query($conn,$sql);

    if($yuna){
    	echo "Data berhasil tersimpan";
    	header('location: dataregris.php');
    }else{
      echo "Data gagal tersimpan";
    }
     }

		echo "<br><br><br>";
		echo "<hr>";



}

 ?>
</body>
</html>

