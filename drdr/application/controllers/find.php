<?php
  class find extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('quote_model');
    }

    function index()
    {
      echo "Test";
      $this->load->helper('form');
      $data['title'] = "Administrate Away";
      $data['quote'] = $this->quote_model->getquote();
      $this->load->view('templates/header', $data);
      $this->load->view('landing_view', $data);
      $this->load->view('templates/footer');
    }

  }