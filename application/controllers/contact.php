<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contact extends CI_Controller {
    function __construct(){
        parent::__construct();
    }
    function index(){
        $data['title'] = "ติดต่อเรา FEIDATHAI";
        $data['content'] = "contact_v";
        $this->load->view('template_v',$data);
    }
}
?>