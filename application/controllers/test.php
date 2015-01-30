<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends MY_Controller
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
