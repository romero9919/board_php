<?php
   require_once("./config/dbconfig.php");
   include "./sitepath.php";
   include _SITEPATH."/lib/lib.mysqli.php";
   $DB = new db; 
?>
<!DOCTYPE html>
   <?php
      $mode = isset($_GET['mode'])? $_GET['mode'] : "list";
      include_once _SITEPATH."/skin/header.php"; 
      switch($mode){
         case "list":
            include_once _SITEPATH."/bbs/bbs.php";
         break;
         case "view":
            include_once _SITEPATH."/bbs/view.php";
         break;
         case "write":
            include_once _SITEPATH."/bbs/write.php";
         break;
         case "update":
            include_once _SITEPATH."/bbs/update.php";
         break;   
      }
      
      include_once _SITEPATH."/skin/footer.php"; 
   ?>