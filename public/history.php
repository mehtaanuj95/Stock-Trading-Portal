<?php
    
  // require configuration
  require("../includes/config.php");
  
  // query for cash
  
  $cash  = query("SELECT cash from users WHERE id=?",$_SESSION["id"]);
  
  // query for history table.
  $hist = query("SELECT * from history WHERE id=?",$_SESSION["id"]);
  
  // using render function to display the content via history_form.php
  
  render("history_form.php", ["title" => "History", "cash" => $cash, "hist" => $hist]);
    
?>
