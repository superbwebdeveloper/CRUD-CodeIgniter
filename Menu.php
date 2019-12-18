<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('menus');
    }

    public function index()
    {
        $menu = new Menus;
        $data['data'] = $menu->get_menus();
        $this->load->view('templates/header_admin');
        $this->load->view('admin/view_menu', $data);
        $this->load->view('templates/footer_admin');
    }
    public function add_menu()
    {
        $this->load->view('templates/header_admin');
        $this->load->view('admin/add_menu');
        $this->load->view('templates/footer_admin');
    }
    public function insert_menu_code()
    {
        $menu = new Menus;
        $menu->insert_menu();
        redirect(base_url('menu'));
    }

    public function edit_menu($id)
    {
        $menu = $this->db->get_where('ci_page_menu', array('page_id' => $id))->row();
        $this->load->view('templates/header_admin');
        $this->load->view('admin/edit_menu', array('menu' => $menu));
        $this->load->view('templates/footer_admin');
    }
    public function update_menu($id)
    {
        $menus = new Menus;
        $menus->update_menu($id);
        redirect(base_url('menu'));
    }
    public function delete_menu($id)
    {
        $this->db->where('page_id', $id);
        $this->db->delete('ci_page_menu');
        redirect(base_url('menu'));
    }
}
