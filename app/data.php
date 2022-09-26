<?php

include __DIR__ . "/Movie.php";
include __DIR__ . "/Actor.php";

$jimCarrey = new Actor('Jim', 'Carrey', 1962);
$johnTravolta = new Actor('John', 'Travolta', 1969);
$umaThurman = new Actor('Uma', 'Thurman', 1970);
$samuelLJackson = new Actor('Samuel', 'Jackson', 1948);
$leonardoDiCaprio = new Actor('Leonardo', 'Di Caprio', 1974);
$michaelJFox = new Actor('Michael J', 'Fox', 1961);
$christopherLloyd = new Actor('Christopher', 'Lloyd', 1938);

$theTrumanShowActors = [$jimCarrey];
$pulpFictionActors = [$johnTravolta, $umaThurman, $samuelLJackson];
$inceptionActors = [$leonardoDiCaprio];
$backToTheFutureActors = [$michaelJFox, $christopherLloyd];



$theTrumanShow = new Movie('The Truman Show', "Truman Burbank is the star of The Truman Show, a 24-hour-a-day reality TV show that broadcasts every aspect of his life without his knowledge. His entire life has been an unending soap opera for consumption by the rest of the world. And everyone he knows, including his wife and his best friend is really an actor, paid to be part of his life.", 1998, $theTrumanShowActors, "https://image.tmdb.org/t/p/w342/https://image.tmdb.org/t/p/w342//vuza0WqY239yBXOadKlGwJsZJFE");

$pulpFiction = new Movie('Pulp Fiction', "A burger-loving hit man, his philosophical partner, a drug-addled gangster's moll and a washed-up boxer converge in this sprawling, comedic crime caper. Their adventures unfurl in three stories that ingeniously trip back and forth in time.", 1994, $pulpFictionActors, "https://image.tmdb.org/t/p/w342/https://image.tmdb.org/t/p/w342//fIE3lAGcZDV1G6XM5KmuWnNsPp1.jpg");

$inception = new Movie('Inception', "Cobb, a skilled thief who commits corporate espionage by infiltrating the subconscious of his targets is offered a chance to regain his old life as payment for a task considered to be impossible: \"inception\", the implantation of another person's idea into a target's subconscious.", 2010, $inceptionActors, "https://image.tmdb.org/t/p/w342/https://image.tmdb.org/t/p/w342//8IB2e4r4oVhHnANbnm7O3Tj6tF8.jpg");

$backToTheFuture = new Movie('Back to the Future', "Overview: Eighties teenager Marty McFly is accidentally sent back in time to 1955, inadvertently disrupting his parents' first meeting and attracting his mother's romantic interest. Marty must repair the damage to history by rekindling his parents' romance and - with the help of his eccentric inventor friend Doc Brown - return to 1985.", 1985, $backToTheFutureActors, "https://image.tmdb.org/t/p/w342/https://image.tmdb.org/t/p/w342//41A2syHG6khv7Ij0xmw5OzyRhmQ.jpg");

$movies = [$theTrumanShow, $pulpFiction, $inception, $backToTheFuture];

var_dump($movies);
