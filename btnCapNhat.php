<?php
	session_start();
	if(isset($_POST["arrSl"]))
	{
		$arrSl=array();
		$arrSl=$_POST["arrSl"];
		$dem=0;
		if(isset($_SESSION["gioHang"]))
		{
			$gioHang=$_SESSION["gioHang"];
			foreach($gioHang as $maSach=>$soLuong)
			{
				$_SESSION["gioHang"][$maSach]=$arrSl[$dem];
				$dem++;
				header("Location:index.php?dog=3");
			}
		}
	}else
	{
		//	
	}
?>