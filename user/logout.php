<?php include('akses.php'); ?>
<?php
session_destroy();
echo '<script language="javascript">document.location="../index.php";</script>';
?>