<footer>
    
<div class="listblu">
        <ul>
            <?php
            $items = [
                ['id' => 1, 'image' => 'buy-comics-digital-comics.png', 'title' => 'DIGITAL COMICS'],
                ['id' => 2, 'image' => 'buy-comics-merchandise.png', 'title' => 'DC MERCHANDISE'],
                ['id' => 3, 'image' => 'buy-comics-subscriptions.png', 'title' => 'SUBSCRIPTION'],
                ['id' => 4, 'image' => 'buy-comics-shop-locator.png', 'title' => 'COMICS SHOP LOCATOR'],
                ['id' => 5, 'image' => 'buy-dc-power-visa.svg', 'title' => 'DC POWER VISA'],
            ];

            foreach ($items as $item) {
                echo '<li class="listitem">
                        <img src="' . $item['image'] . '" alt="Thumbnail" class="itemimage" />
                        <div class="itemdetails">
                            <h3>' . $item['title'] . '</h3>
                        </div>
                    </li>';
            }
            ?>
        </ul>
</footer>
