<center><form action="list.php" method="get">
	<div >
		<input type="text" placeholder= "Masukkan kata kunci" name="pencarian">
		<input type="submit">

	</form>
</form>








<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "belajar";
$con = mysqli_connect("$host","$user","$password","$db") or die ("Gagal ");


?>


<html>
<body>
	<title>mhs</title>

	<link rel="stylesheet" type="text/css" href="style.css">
<h2>DATA MAHASISWA UNIVERSITAS POTENSI UTAMA</h2>


<table border="2">
	<tr>
		<th height="20px">ID</td>
		<th height="20px">NAMA </td>
		<th height="20px">KELAS</td>
		<th height="20px">JURUSAN</td>
		<th height="20px">NO_HP</td>
		<th height="20px">ACTION</td>
	</tr>





<?php
	$sql = " select * from mhs";
	$query = $con->query($sql);
	while ($row = $query->fetch_array())

 {
 	?>


<tr>
	<td height="20px"><?php echo $row['id']; ?></td>
    <td height="20px"><?php echo $row['nama']; ?></td>
	<td height="20px"><?php echo $row['kelas']; ?></td>
	<td height="20px"><?php echo $row['jurusan']; ?></td>
	<td height="20px"><?php echo $row['no_hp']; ?></td>
<td align="center"><a href="detail.php? id=<?php echo $row['id'];?>"><button>Detail</button></a>

	</td>
</tr> 	
	<?php  }?>


</th></tr></table>


  
</body>
</html>