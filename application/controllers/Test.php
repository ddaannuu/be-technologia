<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller
{
    public function products()
    {
        $this->load->database();

        $query = $this->db->get('products');

        echo "<pre>";
        print_r($query->result_array());
        echo "</pre>";
    }

    public function users()
    {
        $this->load->database();

        $query = $this->db->get('users');

        echo "<pre>";
        print_r($query->result_array());
        echo "</pre>";
    }
}
