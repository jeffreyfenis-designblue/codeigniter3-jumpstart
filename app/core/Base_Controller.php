<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Base_Controller extends CI_Controller
{
  /**
   * view_data variable
   *
   * @var array
   */
  public $view_data = ['view_data' => ['path' => 'home']];

  /**
   * Constructor function
   */
  public function __construct()
  {
    parent::__construct();
  }
}
