<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
/**
 * /*
 * The MIT License
 *
 * Copyright 2015 Pascal Koch <info@pascalkoch.net>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * 
 * Description of Use_smarty
 *
 * @author Pascal Koch <info@pascalkoch.net>
 */
require_once(APPPATH . 'third_party/smarty-3.1.24/libs/Smarty.class.php');

class Use_smarty extends Smarty {

    function __construct() {
        parent::__construct();
        $this->setTemplateDir(APPPATH . 'views/templates/');
        $this->setCompileDir(APPPATH . 'views/templates_c/');
        $this->setCacheDir(APPPATH . 'cache/smarty/');
        $this->setConfigDir(APPPATH . 'views/configs/');
        $this->caching = 0;
        $this->clearAllCache();
        $this->assign(get_defined_constants());
        $this->assign('base_url', base_url());

        // Assign CI_controller by reference
        if (method_exists($this, 'assignByRef')) {
            $ci = & get_instance();
            $this->assignByRef("ci", $ci);
        }

        log_message('debug', "Smarty Class Initialized");
    }

}
