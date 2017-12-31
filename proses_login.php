<?php include 'koneksi.php'; ?>
<?php 
session_start();


if($_POST){
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	
	$query = "select * from afh_user where username = '$username' and password = '$password'";
	$query = mysql_query($query) or die (mysql_error());
	
	$result = mysql_fetch_array($query);
	//echo $result['username'];
	//echo $result['password'];
	//echo $result['role'];
	
	if(isset($result) && mysql_num_rows($query) > 0){
	//$_SESSION['nama'] = $result['nama'];
	$_SESSION['username'] = $result['username'];
	$_SESSION['role'] = $result['role'];

	if($_SESSION['role'] == '2'){
	header('location: home.php');
	} else if($_SESSION['role'] == '1'){
	header ('location: admin/index.php');
	} 
	}else{
	echo "Username atau password salah ";
	echo "<a href='index.php'>"."klik disini untuk kembali"."</a>";
	}
	}

?>