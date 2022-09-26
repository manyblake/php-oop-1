<?php

include __DIR__ . "./app/Movie.php";

$backToTheFuture = new Movie('Back to the Future', "Overview: Eighties teenager Marty McFly is accidentally sent back in time to 1955, inadvertently disrupting his parents' first meeting and attracting his mother's romantic interest. Marty must repair the damage to history by rekindling his parents' romance and - with the help of his eccentric inventor friend Doc Brown - return to 1985.", 1985, "https://image.tmdb.org/t/p/w342/https://image.tmdb.org/t/p/w342//41A2syHG6khv7Ij0xmw5OzyRhmQ.jpg");

var_dump($backToTheFuture);
