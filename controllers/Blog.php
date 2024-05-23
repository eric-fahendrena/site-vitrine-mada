<?php
namespace controllers;

use models\Article;

use Parsedown;
use ParsedownExtra;

/**
 * class Blog
 * 
 */
class Blog {
   
   /**
    * public show articles list
    * 
    */
   public function showArtsList(String $fbclid = '')
   {
      $artsList = Article::getAll();
      $randArtKey = -1;
      if (!empty($artsList)) {
         $randArtKey = array_rand($artsList);
      }
      
      shuffle($artsList);
      
      include("views/blog.php");
   }
   
   /**
    * public show article
    */
   public function showArt(int $artId, String $fbclid = '')
   {
      $artsList = Article::getAll('LIMIT 0, 3'); // Required in view
      
      $art = new Article($artId);
      $artData = $art->get();
      
      $artData['date'] = $this->getHumanDate($artData['date']);
      
      $Extra = new ParsedownExtra();
      // Create a html version of article's content 
      $artData['html_content'] = $Extra->text($artData['content']);
      
      include('views/article.php');
   }
   
   /**
    * private get date
    */
   private function getHumanDate(String $artDate) {
      $timestamp = strtotime($artDate);
      $monthsName = array('janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'decembre');
      
      $year = date('Y', $timestamp);
      $month = date('m', $timestamp);
      $day = date('d', $timestamp);
      
      return $day .' ' .$monthsName[$month - 1] .' ' .$year;
   }
}