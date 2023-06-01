<?php
session_start();
unset($_SESSION["usuarios"]);
echo '
        <script>
             window.location = "views/indexReg.php";
        </script>';
?>