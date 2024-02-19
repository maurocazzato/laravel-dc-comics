<header>
    <div class="headercontainer">
        <div class="logocontainer">
                <img src="{{ Vite::asset('resources/imgs/dc-logo.png')}}" alt="dc-logo" style="max-height: 60px;">
        </div>

        <div class="menucontainer">
                <ul>
                    <?php
                    $menuItems = [
                        ['id' => 1, 'title' => 'characters', 'link' => '/'],
                        ['id' => 2, 'title' => 'comics', 'link' => '/about'],
                        ['id' => 3, 'title' => 'movies', 'link' => '/'],
                        ['id' => 4, 'title' => 'tv', 'link' => '/about'],
                        ['id' => 5, 'title' => 'games', 'link' => '/'],
                        ['id' => 6, 'title' => 'collectibles', 'link' => '/about'],
                        ['id' => 7, 'title' => 'videos', 'link' => '/'],
                        ['id' => 8, 'title' => 'fans', 'link' => '/about'],
                        ['id' => 9, 'title' => 'news', 'link' => '/'],
                        ['id' => 10, 'title' => 'shop', 'link' => '/about'],
                    ];

                    foreach ($menuItems as $item) {
                        echo '<li><a href="' . $item['link'] . '" class="menulink">' . $item['title'] . '</a></li>';
                    }
                    ?>
                </ul>
        </div>
    </div>

    <div class="backgroundbox"></div>

   

    
</header>
