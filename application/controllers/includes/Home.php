<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/structure/Page.php';

class Home extends Page {
    
    
    public function __construct() {
        parent::__construct();
        $this->smarty->caching = 0;
    }

    public function index() {
        $this->structure('home_name', 'home_left.tpl', 'home.tpl');
    }

}
