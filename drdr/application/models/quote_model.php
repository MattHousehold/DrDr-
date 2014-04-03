<?php
  class Quote_model extends CI_MODEL {
    function getquote()
    {
      $query = $this->db->get('sdata');
      return $query->result_array();
    }
    /* function getage()
    {
    	$age = $this->post('age');
    	$query = $this->db->get_where('sdata', array('age' => $age));
    }*/
    function create_quote()
    {
      $data['content'] = $this->input->post('content');
      $data['age'] = $this->input->post('age');
      $data['feeling'] = $this->input->post('feeling');
      $data['reason'] = $this->input->post('reason');

      return $this->db->insert('sdata', $data);
    }
  }