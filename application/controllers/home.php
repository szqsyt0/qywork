<?php
//首页
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
    //显示网站首页
    function index()
    {
        $this->load->helpers('url_helper');
        $this->load->view('home');
    }
}

