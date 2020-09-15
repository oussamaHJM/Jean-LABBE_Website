<?php
      session_start();
      if(!isset($_SESSION['connexion'])) 
      {
        header("Location: ../login_page/index_login.html");
      }
?>