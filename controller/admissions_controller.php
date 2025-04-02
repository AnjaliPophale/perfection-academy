<?php
defined('BASEPATH') OR exit('nope');
class Admissions extends Main{
    function __construct($edb, $params=array()){
        parent::__construct($edb, $params);
    }
    function eligibilityrequirements(){ 
        $this->render('admissions/eligibilityrequirements'); 
    }  
    function admissionprocess(){ 
        $this->render('admissions/admissionprocess'); 
    }  
    function requireddocuments(){ 
        $this->render('admissions/requireddocuments'); 
    }  
}
?>