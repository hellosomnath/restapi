<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');
require APPPATH . 'libraries/Format.php';
class Api extends REST_Controller
{

  public function __construct() {
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, GET, DELETE, PUT, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization, Accept, X-Requested-With");
    header('Content-Type: application/json'); 
    parent::__construct();
    $this->load->model('user_model');
  }    

  public function user_get(){
    $r = $this->user_model->getUsers();
    $this->response($r); 
  }
    
 
}