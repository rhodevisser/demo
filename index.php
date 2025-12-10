<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My Favourite TV-Shows</title>
        <link rel="stylesheet" href="index.css"/>
    </head>

    <body>
        
        <?php 
            $title = "My Favourite Tv-Shows";

            $tvshows = [
                [
                'name'=> 'Gossip Girl',
                'onAir' => '2007 - 2012',
                'writer'=> 'Josh Schwartz',
                'wikipediaLink' => 'https://en.wikipedia.org/wiki/Gossip_Girl'
                ], 
                [
                'name'=> 'The OC',
                'onAir' => '2003 - 2007',
                'writer' => 'Josh Schwartz',
                'wikipediaLink' => 'https://en.wikipedia.org/wiki/The_O.C.' 
                ],
                [
                'name'=> 'Slicon Valley',
                'onAir' => '2014 - 2019',
                'writer' => 'Mike Judge',
                'wikipediaLink' => 'https://en.wikipedia.org/wiki/Silicon_Valley_(TV_series)'
                ],
                [
                'name' => 'True Blood',
                'onAir' => '2008 - 2014',
                'writer' => 'Alan Ball',
                'wikipediaLink' => 'https://en.wikipedia.org/wiki/True_Blood'
                ]
            ];

            function filteredByWriter($tvshows, $writer) {
                $filteredWriters = [];

                foreach ($tvshows as $tvshow) {
                    if ($tvshow['writer'] === $writer) {
                        $filteredWriters[] = $tvshow;
                    }
                }

                return $filteredWriters;

            }
        ?>

        

        <h1>
            <?= $title ?> 
        </h1>
        

        <ul>
            <?php foreach (filteredByWriter($tvshows, 'Josh Schwartz') as $tvshow) : ?>
                    <li>
                        <a href="<?= $tvshow['wikipediaLink'] ?>" >
                            <?= $tvshow['name']; ?> (<?= $tvshow['onAir']; ?>)
                        </a> 
                    </li>     
            <?php endforeach; ?>
        </ul>


    </body>

</html>