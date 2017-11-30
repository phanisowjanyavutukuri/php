<!DOCTYPE html>
<html>
    <head>
        <title>
            <?php echo $title; ?>
        </title>
			  <style>
						th {
								background-color: #ADD8E6;
						}
						table {
						 border: 8px none #000000;
						}
        </style>
    </head>
    <body>
        <h1>
            <?php echo $header; ?>
        </h1>
        <form action="index.php" method="POST">
            <?php
                include "$innerview.php"
            ?>
        </form>
    </body>
</html>
