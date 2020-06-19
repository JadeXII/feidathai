<?
class FAQ extends CI_controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $data['title'] = "คำถามที่พบบ่อย";
        $data['content'] = "FAQ_v";
        $this->load->view('template_v',$data);
    }
}
?>