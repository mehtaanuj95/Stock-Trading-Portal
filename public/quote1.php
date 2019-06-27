<?php

    //configuration
    require("../includes/config.php");
    
	$sym = $_REQUEST["q"];
		
	if(lookup($sym)==false)
	{
		echo "Symbol not found";
	}
	
	else
	{
		$stock = lookup($sym);
		echo "Symbol : ".$stock["name"]." Price $".$stock["price"];
	}
?>
