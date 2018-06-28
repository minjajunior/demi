<?php
/**
 * Created by PhpStorm.
 * User: Minja Junior
 * Date: 9/21/2017
 * Time: 4:58 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

    public function index(){
        $this->load->view('service/service_view');
    }

    public function hosting(){
        $this->load->view('service/hosting_view');
    }
}