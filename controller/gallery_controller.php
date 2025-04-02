<?php
defined('BASEPATH') OR exit('nope');
class Gallery extends Main{
    function __construct($edb, $params=array()){
        parent::__construct($edb, $params);
    }
    function gallery(){ 
        $this->render('gallery/gallery'); 
    }  
}
?>