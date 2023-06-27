<?php 
    if (isset($_GET['Delete'])) {
        require '../signUpPage/dp.php';
      $delete=$db->prepare("DELETE FROM place WHERE id=:id ");
      $delete->bindparam("id",$_GET['Delete']);
      if ($delete->execute()) {
          header("location:http://localhost/JUANT/JUANT/dash_board/Places.php");
      }
    }



?>