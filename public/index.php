<?php
    // configuration
    require("../includes/config.php"); 

    // render portfolio
    $rows = query("SELECT symbol,shares FROM portfolios WHERE id = ?",$_SESSION["id"]);
    $bal = query("SELECT cash FROM users WHERE id = ?",$_SESSION["id"]);
    $_SESSION["balance"] = $bal[0]["cash"];
    
    $positions = [];
    foreach ($rows as $row)
    {
        $stock = lookup($row["symbol"]);
        if ($stock !== false)
        {
            $positions[] = [
                "name" => $stock["name"],
                "price" => $stock["price"],
                "shares" => $row["shares"],
                "symbol" => $row["symbol"],
                "cash" => $row["shares"] * $stock["price"]
            ];
        }
    }
    
    render("portfolio.php", ["positions" => $positions, "title" => "Portfolio" ]);

?>
