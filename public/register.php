<?php

    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["username"]))
        {
            apologize("Invalid Username");
        }
        else if(empty($_POST["password"]))
        {
            apologize("Invalid Password");
        }
        else if($_POST["confirmation"] != $_POST["password"])
        {
            apologize("Passwords donot match");
        }
        else
        {
        
            $result = query("INSERT INTO users (username,hash,cash) VALUES(?,?,10000.00)",$_POST["username"],crypt($_POST["password"]));
            if($result === false)
            {
                apologize("Username already taken");
            }
            else
            {
                $rows = query("SELECT LAST_INSERT_ID() AS id");
                $id = $rows[0]["id"];
                $_SESSION["id"] = $id;
				redirect("./");
            }        
        }
    }
    else
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

?>
