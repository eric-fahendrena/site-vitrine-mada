<?php
namespace controllers;

use models\Article;
use Parsedown;
use ParsedownExtra;

/**
 * class Pages
 * 
 */
class Pages {
   
   #
   # Homepage
   #
   public function showHome(String $fbclid = '')
   {
      $artsList = Article::getAll('ORDER BY ID LIMIT 0, 4');
      include("views/home.php");
   }
   
   #
   # About page
   #
   public function showAbout(String $fbclid = '')
   {
      $artsList = Article::getAll('ORDER BY ID LIMIT 0, 3');
      include("views/about.php");
   }
   
   #
   # Services page
   #
   public function showTariffs(String $fbclid = '')
   {
      include("views/tariffs.php");
   }
   
   #
   # Contact pages
   #
   public function showContact(String $fbclid = '')
   {
      include("views/contact.php");
   }
   
   public function showExample(String $dirName, String $fbclid = '') {
      include("views/examples/$dirName/index.html");
   }
   
   #
   # Not Found
   #
   public function showNotFound()
   {
      include("views/not-found.html");
   }
   
}
