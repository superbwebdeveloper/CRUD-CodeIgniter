<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Model
{
    public function index()
    {
        $arr = array('title' => "Home Page");
        return $arr;
    }
}
