<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages_Controller extends Base_Controller
{
  /**
   * Constructor function
   */
  public function __construct()
  {
    parent::__construct();
    $this->load->model([
      'User_Model' => 'users'
    ]);
  }

  public function index()
  {
    $this->load->view('app_layout', $this->view_data);
  }
}
