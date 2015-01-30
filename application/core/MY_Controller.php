<?php defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class MY_Controller extends REST_Controller {

  function __construct()
  {
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    $method = $_SERVER['REQUEST_METHOD'];
    if($method == "OPTIONS") {
        die();
    }
    parent::__construct();
  }

}
