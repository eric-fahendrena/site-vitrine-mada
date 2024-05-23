<?php
namespace routes;

use routes\Route;
use controllers\Pages;
use controllers\Blog;

class PagesRouter {
   
   public function __construct()
   {
      $configs = include('configs.php');
      
      $pages = new Pages();
      
      Route::add($configs['PARENT_DIR'] . "/", [$pages, "showHome"]);
      Route::add($configs['PARENT_DIR'] . "/?fbclid={}", [$pages, "showHome"]);
      Route::add($configs['PARENT_DIR'] . "/index.php", [$pages, "showHome"]);
      Route::add($configs['PARENT_DIR'] . "/index.php?fbclid={}", [$pages, "showHome"]);
      Route::add($configs['PARENT_DIR'] . "/about", [$pages, "showAbout"]);
      Route::add($configs['PARENT_DIR'] . "/about?fbclid={}", [$pages, "showAbout"]);
      Route::add($configs['PARENT_DIR'] . "/tariffs", [$pages, "showTariffs"]);
      Route::add($configs['PARENT_DIR'] . "/tariffs?fbclid={}", [$pages, "showTariffs"]);
      Route::add($configs['PARENT_DIR'] . "/contact", [$pages, "showContact"]);
      Route::add($configs['PARENT_DIR'] . "/contact?fbclid={}", [$pages, "showContact"]);
      Route::add($configs['PARENT_DIR'] . "/examples?name={}", [$pages, "showExample"], ['name']);
      Route::add($configs['PARENT_DIR'] . "/examples?name={}&fbclid={}", [$pages, "showExample"], ['name']);
      
      $blog = new Blog();
      
      Route::add($configs['PARENT_DIR'] . "/blog", [$blog, "showArtsList"]);
      Route::add($configs['PARENT_DIR'] . "/blog?fbclid={}", [$blog, "showArtsList"]);
      Route::add($configs['PARENT_DIR'] . "/blog?a_id={}", [$blog, "showArt"], ['a_id']);
      Route::add($configs['PARENT_DIR'] . "/blog?a_id={}&fbclid={}", [$blog, "showArt"], ['a_id']);
      
      Route::addDefault([$pages, "showNotFound"]);
   }
}