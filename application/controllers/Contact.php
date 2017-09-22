<?php
/**
 * Created by PhpStorm.
 * User: Minja Junior
 * Date: 9/21/2017
 * Time: 5:00 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index(){
        $this->load->view('contact/contact_view');
    }
}