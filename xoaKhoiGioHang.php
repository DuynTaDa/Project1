<?php
	session_start();
	if(isset($_GET["maSach"]))
	{
		$maSach=$_GET["maSach"];
		unset($_SESSION["gioHang"][$maSach]);
		unset($_SESSION["gioHang"]);
		header("location:index.php?dog=3");
	}
?>