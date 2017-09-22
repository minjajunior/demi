<?php
/**
 * Created by PhpStorm.
 * User: Minja Junior
 * Date: 9/21/2017
 * Time: 4:56 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller{

    public function index(){
        $this->load->view('about/about_view');
    }
}