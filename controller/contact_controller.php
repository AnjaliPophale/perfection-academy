<?php
defined('BASEPATH') OR exit('nope');
class Contact extends Main{
    function __construct($edb, $params=array()){
        parent::__construct($edb, $params);
    }
    function contact(){ 
        $this->render('contact/contact'); 
    }  
}
?>