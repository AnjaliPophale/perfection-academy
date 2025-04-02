<?php
defined('BASEPATH') OR exit('nope');

class Academics extends Main{
    function __construct($edb, $params=array()){
        parent::__construct($edb, $params);
    }
    function fifth_eighth(){ 
        $this->render('academics/fifth_eighth'); 
    }
    function ninth_tenth(){ 
        $this->render('academics/ninth_tenth'); 
    }
    function eleventh_twelfth_sci(){ 
        $this->render('academics/eleventh_twelfth_sci'); 
    }
    function  eleventh_twelfth_comm(){ 
        $this->render('academics/eleventh_twelfth_comm'); 
    }
    function ca_cs_csm(){ 
        $this->render('academics/ca_cs_csm'); 
    }
    function bcom_bba_mcom_mba_bca_mca(){ 
        $this->render('academics/bcom_bba_mcom_mba_bca_mca'); 
    }
    function spoken_english(){ 
        $this->render('academics/spoken_english'); 
    }
    function share_market(){ 
        $this->render('academics/share_market'); 
    }
    function personality_development(){ 
        $this->render('academics/personality_development'); 
    }
   
}
?>