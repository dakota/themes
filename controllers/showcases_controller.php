<?php
class ShowcasesController extends AppController {

/**
 * Controller name
 *
 * @var string
 * @access public
 */
	var $name = 'Showcases';

/**
 * Default helper
 *
 * @var array
 * @access public
 */
	var $helpers = array('Html');

/**
 * This controller does not use a model
 *
 * @var array
 * @access public
 */
	var $uses = array();

/**
 * Setting pluginname unfortunately does not work 1.2 and 1.3.0-alpha, a ticket for this has been submitted,
 * so if this will be implemented you could set it from here.
 *
 * @var string
 * @access public
 */	
	var $plugin = 'aqueous';

/**
 * Setting Theme to be used as View class
 *
 * @var string
 * @access public
 */	
	var $view = 'Theme';

/**
 * theme to be used
 *
 * @var string
 * @access public
 */
	var $theme = null;

/**
 * layout to be used
 *
 * @var string
 * @access public
 */
	var $layout = 'default';
/**
 * This function is executed before every action in the controller.
 * You can use it to set the name of the plugin that holds the themes 
 *
 * @access public
 */
	function beforeFilter() {
		$this->plugin = 'aqueous';
		$this->passedArgs = array_merge(array('layout'=>'default', 'theme'=>null), $this->passedArgs);
	}
	
/**
 * This function displays app/views/showcases/index.ctp
 * The plugin doesnt have view files, just layouts, css and img, both themed as non-themed
 * We will pass named params to change theme and or layout
 *
 * @access public
 */
	function index() {
		$this->theme = $this->passedArgs['theme'];
		$this->layout = $this->passedArgs['layout'];
	}

}

?>