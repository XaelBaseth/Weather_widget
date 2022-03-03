<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Widget</title>
</head>
<body>
    <div id="content">
        <div class="widget">
            <?php
            //WE CALL THE PHP INFORMATIONS
                include 'widget.php';?>
                <h2><a href="<?php print $city_name; ?>">City</h2>
                <h1><a href="<?php print $Temperature; ?>">Temperature</h1>
                <h2><a href="<?php print $Main; ?>">Weather</h2>
                <h3><a href="<?php print $Description; ?>">description</h3>
        </div>
    </div>  
</body>
</html>
