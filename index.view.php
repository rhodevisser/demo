
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My Favourite TV-Shows</title>
        <link rel="stylesheet" href="index.css"/>
    </head>

    <body>
        
        <h1>
            <?= $title ?> 
        </h1>
        
        <ul>
            <?php foreach ($filteredTvShows as $tvshow) : ?>
                    <li>
                        <a href="<?= $tvshow['wikipediaLink'] ?>" >
                            <?= $tvshow['name']; ?> written by <?= $tvshow['writer']; ?> was onair between <?= $tvshow['onAir']; ?>
                        </a> 
                    </li>     
            <?php endforeach; ?>
        </ul>


    </body>

</html>