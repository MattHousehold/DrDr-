<?php
  class admin extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('quote_model');
    }

    function index()
    {
      $this->load->helper('form');
      $data['title'] = "Administrate Away";
      $data['quote'] = $this->quote_model->getquote();
      $this->load->view('templates/header', $data);
      $this->load->view('admin_view', $data);
      $this->load->view('templates/footer');
    }

    function create()
    {
      $this->load->helper('form');

      $data['title'] = "Administrate Away";
      $this->quote_model->create_quote();
      $this->load->view('templates/header');
      $this->load->view('submitted_view');
      $this->load->view('templates/footer');
    }
  }