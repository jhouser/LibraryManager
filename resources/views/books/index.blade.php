<?php

foreach ($books as $book) {
    echo $book->name . "<br>";
    echo $book->formatAuthors() . "<br><br>";
}
