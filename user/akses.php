<?php session_start();
if (ISSET($_SESSION['username']))
{
//Tidak ada event, dalam artian menghindari jump page  		
}
else
echo '<script language="javascript">alert("Anda harus Login!"); document.location="index.php";</script>';
?>