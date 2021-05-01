<?php
 require_once("../config/koneksi.php");
 $id = $_GET['id'];
 $query = "DELETE FROM tarik WHERE id_tarik = '$id'";
 $queryact = mysqli_query($conn, $query);
 echo "<meta http-equiv='refresh'
              content='0; url=http://banksampahnggembe.epizy.com/page/admin.php?page=data-tarik'>";
?>