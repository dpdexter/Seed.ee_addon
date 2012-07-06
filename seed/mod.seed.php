<?php if ( ! defined('EXT')) exit('No direct script access allowed');


// include config file
include PATH_THIRD.'seed/config'.EXT;

/**
 * Seed Module Class 
 *
 * @package         seed_ee_addon
 * @version         0.9.2
 * @author          Joel Bradbury ~ <joel@squarebit.co.uk>
 * @link            http://squarebit.co.uk/seed
 * @copyright       Copyright (c) 2012, Joel 
 */


class Seed {
	
	public $return_data;
	private $EE;

	/**
	 * Constructor: sets EE instance
	 *
	 * @access      public
	 * @return      null
	 */
	public function __construct()
	{
		// Set global object
		$this->EE =& get_instance();

		// Load base model
		$this->EE->load->library('Seed_model');

		// Load other models
		Seed_model::load_models();

	}


}

?>