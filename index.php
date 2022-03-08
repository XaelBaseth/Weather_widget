<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Widget</title>
</head>
<body>
    <div class="container">
        <div class="widget">
            <?php
            //WE CALL THE PHP INFORMATIONS
                include 'widget.php'
            ;?>
            <div class="details">
                <div class="temperature"><?php echo $temperature; ?>°C</div>
                <div class="main"><?php echo $main; ?></div>
                <div class="city"><?php echo $city_name; ?></div>
                <div class="description"><?php print $description; ?></div>
            </div>
        </div>
    </div>  
</body>
</html>
