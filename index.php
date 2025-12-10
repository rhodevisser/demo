<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My First PHP Calve</title>
    <link rel="stylesheet" href="index.css"/>
</head>
<body>

    
        <?php 
        $name = "Dark Matter";
        $read = true; 

        if ( $read ) {
            $message = "I have read $name.";   
        } else { 
            $message = "I have NOT read $name.";
        }
        ?>

        <h1>
            <?= $message ?>
        </h1>
           

</body>
</html>