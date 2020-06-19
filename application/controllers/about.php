<?
class about extends CI_controller{
    function __construct(){
        parent::__construct();
    }

    function purpose(){
        $data['title'] = "ปณิธาน/วิสัยทัศน์ feidathai";
        $data['content'] = "purpose_v";
        $this->load->view('template_v',$data);

    }
    function aboutus(){
        $data['title'] = "เกี่ยวกับเรา feidathai";
        $data['content'] = "aboutus_v";
        $this->load->view('template_v',$data);
    }
    function history(){
        $data['title'] = "ความเป็นมาของ feidathai";
        $data['content'] = "history_v";
        $this->load->view('template_v',$data);
    }
    function social_activities(){
        $config['base_url'] = base_url('/about/social_activities');
        $config['per_page'] = 9;
        $config['num_link'] = 5;
        $config['total_rows'] = $this->db->get_where('web_knowledge',array('category'=>3))->num_rows();
		$this->db->order_by("id","DESC");
        $this->pagination->initialize($config);
        $data['query'] = $this->db->get_where('web_knowledge', array('category'=>3),$config['per_page'],$this->uri->segment(3));
        $data['title'] = "กิจกรรมเพื่อสังคม feidathai";
        $data['content'] = "social_activities_v";
        $this->load->view('template_v',$data);
    }
   
}
?>