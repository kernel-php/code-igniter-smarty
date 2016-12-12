<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    static $javascripts = array(), $footerJavascripts = array(), $links = array(), $title = array(),
            $bottomHyperlinks = array(), $bottomDialogs = array(),$topHyperlinks = array(), $metas = array();

    const mode_add = 'add';
    const mode_del = 'delete';
    const save_success = 'success';
    const save_error = 'error';

    public function __construct() {
        if (function_exists('date_default_timezone_set')) {
            date_default_timezone_set('Europe/Paris');
        }
        parent::__construct();
        $this->models();
        $this->output->enable_profiler(FALSE);
    }

    public function models() {
        $this->load->model('user_model');
        $this->load->model('frontpage_model');
        $this->load->model('mails_model');
        $this->load->model('login_model');
    }

    public function structure($pageName, $left_template = '', $right_template = '') {
        $this->header($pageName);
        $this->top();

        $this->smarty->assign('successes', $this->alerts->getSuccesses());
        $this->smarty->assign('errors', $this->alerts->getErrors());
        $this->smarty->assign('infos', $this->alerts->getInfos());
        $this->smarty->assign('warnings', $this->alerts->getWarnings());

        $this->smarty->assign('left_template', $left_template);
        $this->smarty->assign('right_template', $right_template);
        $this->bottom();
        $this->footer();

        $this->load->view('page_structure');
    }

    private function header($pageName) {
        $this->setMetas();
        $this->setLinks();
        $this->setJavascripts();
        $this->setTitle($pageName);
        $this->smarty->assign('title', self::$title);
        $this->smarty->assign('metas', self::$metas);
        $this->smarty->assign('links', self::$links);
        $this->smarty->assign('javascripts', self::$javascripts);
    }

    private function top() {
        $this->setLangs();
        $this->setTopHyperlinks();
        $this->smarty->assign('top_hyperlinks', self::$topHyperlinks);
    }

    private function bottom() {
        $this->setBottomHyperlinks();
        $this->smarty->assign('bottom_hyperlinks', self::$bottomHyperlinks);
        $this->setBottomDialogs();
        $this->smarty->assign('bottom_dialogs', self::$bottomDialogs);
    }

    private function footer() {
        $this->setFooterJavascripts();
        $this->smarty->assign('javascripts_footer', self::$footerJavascripts);
    }

    function setTitle($pageName) {
        if (empty(self::$title)) {
            self::$title = array('sitename' => 'STVS', 'separator' => '|');
        }
        self::$title['pagename'] = $pageName;
    }

    public function setMetas() {
        if (empty(self::$metas)) {
            self::$metas = array(
                array('name' => 'robots', 'content' => 'index,follow'),
                array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0'),
                array('name' => 'description', 'content' => 'site_description'),
                array('name' => 'keywords', 'content' =>'site_keywords'),
            );
        }
    }

    public function setLinks() {
        if (empty(self::$links)) {
            self::$links = array(
                array('href' => 'http://fonts.googleapis.com/css?family=Lato:400,700,900', 'rel' => 'stylesheet', 'type' => 'text/css'),
                array('href' => base_url() . 'theme/css/style.css', 'rel' => 'stylesheet', 'type' => 'text/css'),
                array('href' => base_url() . 'theme/img/favicon.ico?v=3', 'rel' => 'shortcut icon', 'type' => ''),
            );
        }
    }

    public function setJavascripts() {
        if (empty(self::$javascripts)) {
            self::$javascripts = array(
               /* base_url() . 'theme/third_party/jquery.js',
                base_url() . 'theme/third_party/bootstrap.min.js',
                base_url() . 'theme/third_party/jquery-ui/jquery-ui.min.js',
                base_url() . 'theme/js/functions.js',*/
            );
        }
    }

    public function setFooterJavascripts() {
        if (empty(self::$footerJavascripts)) {
            self::$footerJavascripts = array(
            );
        }
    }

    public function setBottomHyperlinks() {
        if (empty(self::$bottomHyperlinks)) {
            self::$bottomHyperlinks = array(
                array('href' => base_url(), 'text' => '©company'),
                array('href' => base_url(), 'text' => 'FAQ'),
            );
        }
    }

    public function setBottomDialogs() {
        if (empty(self::$bottomHyperlinks)) {
            self::$bottomHyperlinks = array(
                    //array('dialog' => ''),
            );
        }
    }

    private function setTopHyperlinks() {
        if (empty(self::$topHyperlinks) && !in_array($this->uri->segment(1), array('login', 'logout'))) {            
            switch ($this->uri->segment(1)) {
                case 'login':case 'logout':
                    break;
                default:
                    self::$topHyperlinks = array(
                        array('href' => site_url('logout'), 'text' => 'logout', 'icon' => 'icon-power'),
                        array('href' => base_url('index.php/' . $this->uri->segment(1) . '/user'), 'text' => 'my_account', 'icon' => 'icon-user'),
                    );
            }
        }
    }


}
