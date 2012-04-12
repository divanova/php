<?php
include_once 'Factory.php';

$factory = new Factory();

$bookf = $factory->getBook('fantasy', 'Wheel of time', 'Robert Jordan');
$books = $factory->getBook('science fiction', 'Metro 2033', 'Gluhovski');

echo $bookf->getAuthorName(),' - ',$bookf->getGenre(), '<br>';
echo $books->getAuthorName(),' - ',$books->getGenre(), '<br>';