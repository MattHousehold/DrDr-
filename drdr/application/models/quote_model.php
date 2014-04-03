<?php
  class Quote_model extends CI_MODEL {
    
    function create_quote()
    {
      $data['content'] = $this->input->post('content');
      $data['age'] = $this->input->post('age');
      $data['feeling'] = $this->input->post('feeling');
      $data['reason'] = $this->input->post('reason');

      return $this->db->insert('sdata', $data);
    }
    function getquote()
    {
      /*$age 
      $query = $this->db->get_where('sdata', array('age' => $age));
      return $query->result_array();*/
      $query = $this->db->get_where('sdata', array('age' => 3));
      return $query->result_array();
    }
  }