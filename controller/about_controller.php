

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Main {
    function __construct($edb, $params = array()) {
        parent::__construct($edb, $params);
    }

    function academyprofile() { 
        $this->render('about/academyprofile'); 
    }
    function whatmakesitdifferent() { 
        $this->render('about/whatmakesitdifferent'); 
    }
}
?>
