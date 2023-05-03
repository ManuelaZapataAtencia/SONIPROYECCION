<?php
session_start();
unset($_SESSION["usuarios"]);
echo '
        <script>
             window.location = "../soni/index.php";
        </script>';
?>