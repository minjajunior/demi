<?php
/**
 * Created by PhpStorm.
 * User: Minja Junior
 * Date: 9/21/2017
 * Time: 4:59 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function events(){
        $this->load->view('product/events_view');
    }
}