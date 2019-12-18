<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Menus extends CI_Model
{
    public function index()
    {
    }
    public function get_menus()
    {
        if (!empty($this->input->get("search"))) {
            $this->db->like('page_name', $this->input->get("search"));
        }
        $query = $this->db->get("ci_page_menu");
        return $query->result();
    }
    public function insert_menu()
    {
        $data = array(
            'page_name' => $this->input->post('page_name'),
            'page_slug' => page_slug($this->input->post('page_name'))
        );
        return $this->db->insert('ci_page_menu', $data);
    }

    public function update_menu($id)
    {
        $data = array(
            'page_name' => $this->input->post('page_name')
        );
        if ($id == 0) {
            return $this->db->insert('ci_page_menu', $data);
        } else {
            $this->db->where('page_id', $id);
            return $this->db->update('ci_page_menu', $data);
        }
    }
}
