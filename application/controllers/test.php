<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Example
 *
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array.
 *
 * @package   CodeIgniter
 * @subpackage  Rest Server
 * @category  Controller
 * @author    Phil Sturgeon
 * @link    http://philsturgeon.co.uk/code/
*/

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

class Test extends REST_Controller
{
  function __construct()
  {
    // Construct our parent class
    parent::__construct();
  }

  function index_get()
  {

    $data = array(
      "Attribute 1" => 1,
      "Attribute 2" => 2
    );

    $this->response($data);
  }
}
