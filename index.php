<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My First PHP Calve</title>
    <link rel="stylesheet" href="index.css"/>
</head>
<body>

    
        <?php 
            $books = [
                "Do Androids Dream of Electric Sheep",
                "The Langoliers",
                "Hail Mary"
            ];
        ?>

        <ul>
            <?php foreach ($books as $book) {
                echo "<li> $book </li>";
            }
            ?>

            <?php foreach ($books as $book) : ?>
                <li><?= $book; ?></li>
            <?php endforeach; ?>
        </ul>

</body>
</html>