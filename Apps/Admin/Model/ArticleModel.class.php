<?php 
namespace Admin\Model;
use Think\Model\RelationModel;
class ArticleModel extends RelationModel{
    protected $tableName = 'Article';
    protected $_link = array(
       'Module' => array(
       'mapping_type'  => self::BELONGS_TO,
       'foreign_key'   => 'mid',
       'mapping_fields'=>'mname',
       
      ),
    );
}

?>