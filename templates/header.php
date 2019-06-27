<!DOCTYPE html>

<html>

    <head>

        <link href="./css/bootstrap.min.css" rel="stylesheet"/>
        <link href="./css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="./css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>C$50 Finance: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>C$50 Finance</title>
        <?php endif ?>

        <script src="./js/jquery-1.10.2.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/scripts.js"></script>

    </head>

    <body>
		
        <div class="container">

            <div id="top">
                <a href="./"><img alt="C$50 Finance" src="./img/logo.gif"/></a>
				<br>
				<?php 
				if(isset($_SESSION["id"])) {
					echo '
				<table class="table table-striped">
				<thead>
				<tr>
				<td><a href="./index.php" class="btn btn-primary" role="button">Home</a></td>
				<td><a href="./buy.php" class="btn btn-success" role="button">Buy Stocks</a></td>
				<td><a href="./sell.php" class="btn btn-danger" role="button">Sell Stocks</a></td>
				<td><a href="./quote.php" class="btn btn-info" role="button">Quote Price</a></td>
				<td><a href="./history.php" class="btn btn-warning" role="button">History</a></td>
				<td><a href="./passwd.php" class="btn btn-success" role="button">Change Password</a></td>
				<td><a href="./logout.php" class="btn btn-danger" role="button">Logout</a></td>
				</tr>
				</thead>
				</table> ';
				}
				?>
            </div>
            

            <div id="middle">
