<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends Main {

    function __construct($edb, $params = array()) {
        parent::__construct($edb, $params);
    }
    
    // Default method (Fix for Fatal error)
    public function index() {
        $this->homepage();
    }

    public function homepage() {
        $this->render('home');
    }
}
?>