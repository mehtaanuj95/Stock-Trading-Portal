<?php
    
    // configuration
    require("../includes/config.php");
    
    // if the form was submitted
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $link = $_POST["links"];
        redirect("./".$_POST["links"]);
    }
