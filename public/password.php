<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("password_form.php", ["title" => "Enterpassword"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //Validate submission
        if(empty($_POST["current_password"]))
        {
            apologize("Curernt Password Feild must not be empty");
        }
        if(empty($_POST["new_password"]))
        {
            apologize("New Password Password Feild must not be empty");
        }
        if(empty($_POST["confirm_password"]))
        {
            apologize("Confirm Password Feild must not be empty");
        }
        if($_POST["new_password"] != $_POST["confirm_password"])
        {
            apologize("Passwords do not match..!!");
        }
            
        
        $rows = CS50::query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);

        // if we found user, check password
        if (count($rows) == 1)
        {
            // first (and only) row
            $row = $rows[0];

            // compare hash of user's input against hash that's in database
            if (password_verify($_POST["current_password"], $row["hash"]))
            {
                $users = CS50::query("UPDATE users SET hash = ? WHERE id = ?",password_hash($_POST["password"], PASSWORD_DEFAULT), $_SESSION["id"]);
                if($users === FALSE)
                {
                    apologize("Sorry, We coudn't change your password. Please try again later.");
                }          
            }
            
            redirect("/");
        }    
        
    }
?>