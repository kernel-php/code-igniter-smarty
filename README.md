# code-igniter-smarty  :fire: +  :bulb: = :sunny:

## Use Smarty engine template with Code Igniter
> By Pascal Koch - <a href="pascalkoch.net">pascalkoch.net</a>

### How it works
The use of Code Igniter with a parent controller of all is perfectly accepted here.<br/>

### Installation
0. Download or use Code Igniter, it is your application 
1. Installation of Smarty
  <a href="http://www.smarty.net/download" target="_blank">Download Smarty</a><br/>
  Read the <a href="http://www.smarty.net/quick_install"  target="_blank">quick install</a><br/>
  Copy Smarty directory in your application/third_party<br/>
  Create the directories.<br/>
  ```
  application/cache/smarty with written permissions 755
  views/configs
  views/templates with written permissions 755
  views/templates_c
  ```

2. Create the route  application/config/routes.php
  ```php
  $route['home'] = 'includes/home';
  $route['home/(.+)'] = 'includes/home/$1';
  ```
3. Create directories and copy files in your application<br/>
  application/controllers/structure/Pages.php<br/>
  application/controllers/includes/Home.php<br/>
  application/controllers/Boot.php<br/>
  
  application/libraries/Alerts.php<br/>
  application/libraries/Use_smarty.php<br/>
  
  application/views/templates/html and files<br/>
  application/views/templates/includes and files<br/>
  
  application/page_structure.php<br/>
  
4. In your application/config/autoload.php add the libraries Use_smarty and alerts :
  ```php
  $autoload['libraries'] = array('use_smarty' => 'smarty', 'alerts');
  ```
  Alerts is a good trick to add message on the fly.

### Build a home page
1. Create the route  application/config/routes.php
  ```php
  $route['home'] = 'includes/home';
  $route['home/(.+)'] = 'includes/home/$1';
  ```
2. Create the controller /controllers/includes/Home.php<br/>
  ```php
  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  require_once APPPATH . 'controllers/structure/Page.php';

  class Home extends Page {
    
    
    public function __construct() {
        parent::__construct();
        $this->smarty->caching = 0;
    }

    public function index() {
        $this->structure('Title of the home page', '', 'home.tpl');
        $this->smarty->assign('variable', (1+1).'foo');
        $this->alert->add_info('Welcome');
    }

  }
  ```
3. Create the template application/views/template/includes/home.tpl

### What is Code Igniter 
CodeIgniter is a powerful PHP framework with a very small footprint, built for developers who need a simple and elegant toolkit to create full-featured web applications

### What is Smarty
Smarty is a template engine for PHP, facilitating the separation of presentation (HTML/CSS) from application logic. This implies that PHP code is application logic, and is separated from the presentation. 
