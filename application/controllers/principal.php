<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller {

  public function index()
  {
    $data['titulo'] = "Inversiones Consolidados 2011 | Home";
    $data['cuerpo'] = "Esto es una prueba";
    $data['cabecera'] = "cabecera";
    $data['pie'] = "pie";
    $this->load->view('home', $data);
  }
}
