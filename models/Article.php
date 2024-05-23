<?php
namespace models;

/**
 * class Article
 * 
 */
class Article extends Model {
   
   /**
    * Get all articles
    * 
    * @param   String   precisions
    * @return  array
    */
   static public function getAll(String $prec='ORDER BY ID'): array
   {
      return static::selectAll("articles", $prec);
   }
   
   public function __construct(int $id)
   {
      $this->_id = $id;
   }
   
   /**
    * get
    * 
    * Get a selected ellement from table
    * 
    * @return  mixed   array or void
    */
   public function get()
   {
      return static::select("*", "articles", "WHERE ID = :ID", ['ID' => $this->_id]);
   }
   
   /**
    * article's ID
    * 
    * @var  int
    */
   private $_id;
}