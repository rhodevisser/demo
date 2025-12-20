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
        
        $filteredTvShows = array_filter($tvshows, function($tvshow) {
            return $tvshow['onAir'] > 2007;
    });

require "index.view.php";