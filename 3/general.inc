<?php
     function __autoload($class_name)
     {
         require_once($_SERVER["DOCUMENT_ROOT"] . "php5/3/$class_name.php");
     }
?>