<?php

class Contact_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function addData($data)
    {
        return $this->db->insert('contact_details', $data);
    }

    public function visitData($data)
    {
        return $this->db->insert('subscribe', $data);
    }
}
