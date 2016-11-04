<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller {

  public function index()
  {
    $data['titulo'] = "";
    $data['cuerpo'] = "";
    $data['cabecera'] = "";
    $data['pie'] = "";
    $this->load->view('home', $data);
  }
}
