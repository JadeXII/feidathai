<?
class tianxian extends CI_controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $data['title'] = "ยาน้ำเทียนเซียน";
        $data['content'] = "tianxian_v";
        $this->load->view('template_v',$data);
    }
    function scientific_reports(){
        $data['title'] = "งานวิจัย";
        $data['content'] = "scientific-reports_v";
        $this->load->view('template_v',$data);
    }
    function reviews(){
        $data['title'] = "รีวิวผู้ใช้ยาน้ำเทียนเซียน";
        $config['base_url'] = base_url('tianxian/reviews');
        $config['per_page'] = 9;
        $config['num_link'] = 5;
        $config['total_rows'] = $this->db->get_where('web_knowledge',array('category'=>2))->num_rows();
		$this->db->order_by("id","DESC");
        $this->pagination->initialize($config);
        $data['query'] = $this->db->get_where('web_knowledge', array('category'=>2),$config['per_page'],$this->uri->segment(3));
        $data['content'] = "reviews_v";
        $this->load->view('template_v',$data);
    }
    function safety(){
        $data['title'] ="ความปลอดภัยของยาน้ำเทียนเซียน";
        $data['content'] = "safety_v";
        $this->load->view('template_v',$data);
    }
    
}
?>