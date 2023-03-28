<?php

require 'src/BookStore.php';
require 'src/functions.php';

// create new bookstore API

$bookStore = new BookStore('https://fiktivne-knihy.sk/hladaj?nazov=', false, true, true);

// create new array of values from bookstore API
$books = $bookStore->getBook('harry');

// sort by price: low to high
usort($books, 'compareByBookPrice');

// write out values from array
foreach($books as $book)
  {
    echo 'Názov knihy: '.$book['bookName'].'<br>'.'Autor: '.$book['artistName'].'<br>'.'Cena: '.$book['bookPrice'].'-'.$book['currency'];
    echo '<hr>'; 
  }

  //----------------------------------------------------------------------------------------------------

// create new bookstore API
$bookstore2 = new BookStore('https://nonrealbookshop.com/search?title=', false, true, true);

// create new array of values from bookstore API
$books = $bookStore->getBook('harry');

// sort by price: low to high
usort($books, 'compareByBookPrice');

// write out values from array
foreach($books as $book)
  {
    echo 'Book name: '.$book['bookName'].'<br>'.'Writer: '.$book['artistName'].'<br>'.'Cena: '.$book['bookPrice'].'-'.$book['currency'];
    echo '<hr>'; 
  }

