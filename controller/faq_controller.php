<?php
defined('BASEPATH') OR exit('nope');

class Faq extends Main{
    function __construct($edb, $params=array()){
        parent::__construct($edb, $params);
    }
    function faq(){ 
        $this->render('faq/faq'); 
    }
    
}
?>