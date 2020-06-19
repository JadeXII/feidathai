<?
class Cancer_articles extends CI_controller{
    function __construct(){
        parent::__construct();
        $this->load->library("pagination");
    }
    function detail($id){
        
        // $this->load->library('session');    
		// $data['logo'] ="/assets/img/icon/Logo-01.png";
         $data['knowledge'] = $this->db->query("SELECT * FROM web_knowledge WHERE id=$id ")->result();
        $q['Pageview'] = "UPDATE web_knowledge SET pageview = pageview+1 WHERE  id=$id ";
		$sql['Pageview'] = mysql_query ( $q['Pageview'] ) or sql_error ( "db-query",mysql_error() );
        //title
        $query = $this->db->query("SELECT * FROM web_knowledge Where id=$id ");
        foreach ($query->result() as $row){
	        $data['title'] =  $row->topic;
            $data['img'] = $row->post_date;
            $category = $row->category;
            $about_cancer = "SELECT * from web_knowledge WHERE category='1' ORDER BY id DESC LIMIT 5";
            $cancer_food = "SELECT * from web_knowledge WHERE category='6' ORDER BY id DESC LIMIT 5";
            $cancer_care = "SELECT * from web_knowledge WHERE category='7' ORDER BY id DESC LIMIT 5";
            $cancer_treatment ="SELECT * from web_knowledge WHERE category='12' ORDER BY id DESC LIMIT 5";
            //about_cancer
            if ($category == 1){
                //บทความที่น่าสนใจ
                $data['titlequery1'] = "รู้จักโรคมะเร็ง";
                $data['titlequery2'] = "มะเร็งกับการรักษา";
                $data['titlequery3'] = "มะเร็งกับการดูแล";
                $data['query1'] = $this->db->query($about_cancer)->result();
                $data['query2'] = $this->db->query($cancer_treatment)->result();
                $data['query3'] = $this->db->query($cancer_care)->result();
            }
            //cancer_food
            else if ($category == 6){
                //บทความที่น่าสนใจ
                $data['titlequery1'] = "มะเร็งกับอาหาร";
                $data['titlequery2'] = "มะเร็งกับการรักษา";
                $data['titlequery3'] = "มะเร็งกับการดูแล";
                $data['query1'] = $this->db->query($cancer_food)->result();
                $data['query2'] = $this->db->query($cancer_treatment)->result();
                $data['query3'] = $this->db->query($cancer_care)->result();
            }
            //cancer_care
            else if ($category == 7){
                $data['titlequery1'] = "มะเร็งกับการดูแล";
                $data['titlequery2'] = "มะเร็งกับการรักษา";
                $data['titlequery3'] = "มะเร็งกับอาหาร";
                $data['query1'] = $this->db->query($cancer_care)->result();
                $data['query2'] = $this->db->query($cancer_treatment)->result();
                $data['query3'] = $this->db->query($cancer_food)->result();
            }
            //cancer_treatment
            else if ($category == 12){
                $data['titlequery1'] = "มะเร็งกับการรักษา";
                $data['titlequery2'] = "มะเร็งกับการดูแล";
                $data['titlequery3'] = "มะเร็งกับอาหาร";
                $data['query1'] = $this->db->query($cancer_treatment)->result();
                $data['query2'] = $this->db->query($cancer_care)->result();
                $data['query3'] = $this->db->query($cancer_food)->result();             
            }
            else{
                echo "sdfsdsdf";
            }
            
             
        }
        
		
        //บทความยอดนิยม
        $sql = "SELECT * from web_knowledge ORDER BY pageview DESC LIMIT 4";
        $data['popular'] = $this->db->query($sql)->result();
        $data['content'] = "readcontent_v";
        $this->load->view('template_v', $data);   

    }
    function about_cancer(){
        $data['title'] = "รู้จักโรคมะเร็ง";
        $config['base_url'] = "http://localhost/newfeidathai/Cancer_articles/about_cancer";
        $config['per_page'] = 9;
        $config['num_link'] = 5;
        $config['total_rows'] = $this->db->get_where('web_knowledge',array('category'=>1))->num_rows();
		$this->db->order_by("id","DESC");
        $this->pagination->initialize($config);
        $data['query'] = $this->db->get_where('web_knowledge', array('category'=>1),$config['per_page'],$this->uri->segment(3));
        $data['content'] = "about_cancer_v";
        $this->load->view('template_v',$data);

    }

    function cancer_treatment(){
        $data['title'] = "มะเร็งกับการรักษา";
        $config['base_url'] = base_url('/Cancer_articles/cancer_treatment');
        $config['per_page'] = 9;
        $config['num_link'] = 5;
        $config['total_rows'] = $this->db->get_where('web_knowledge',array('category'=>12))->num_rows();
		$this->db->order_by("id","DESC");
        $this->pagination->initialize($config);
        $data['query'] = $this->db->get_where('web_knowledge', array('category'=>12),$config['per_page'],$this->uri->segment(3));
        $data['content'] = "cancer_treatment_v";
        $this->load->view('template_v',$data);

    }

    function cancer_care(){
        $data['title'] = "มะเร็งกับการดูแล";
        $config['base_url'] = base_url('/Cancer_articles/cancer_care');
        $config['per_page'] = 9;
        $config['num_link'] = 5;
        $config['total_rows'] = $this->db->get_where('web_knowledge',array('category'=>7))->num_rows();
		$this->db->order_by("id","DESC");
        $this->pagination->initialize($config);
        $data['query'] = $this->db->get_where('web_knowledge', array('category'=>7),$config['per_page'],$this->uri->segment(3));
        $data['content'] = "cancer_care_v";
        $this->load->view('template_v',$data);

    }
    function cancer_food(){
        $data['tittle'] = "มะเร็งกับอาหาร";
        $config['base_url'] = base_url('/Cancer_articles/cancer_food');
        $config['per_page'] = 9;
        $config['num_link'] = 5;
        $config['total_rows'] = $this->db->get_where('web_knowledge',array('category'=> 6))->num_rows();
        $this->db->order_by("id","DESC");
        $this->pagination->initialize($config);
        $data['query'] = $this->db->get_where('web_knowledge', array('category'=>6),$config['per_page'],$this->uri->segment(3));
        $data['content'] = "cancer_food_v";
        $this->load->view('template_v',$data);
        
    }
    function cancer_vdo(){
        $data['tittle'] = "วีดีโอความรู้โรคมะเร็ง";
        $config['base_url'] = base_url('/Cancer_articles/cancer_vdo');
        $config['per_page'] = 9;
        $config['num_link'] = 5;
        $config['total_rows'] = $this->db->get_where('web_knowledge',array('category'=> 18))->num_rows();
        $this->db->order_by("id","DESC");
        $this->pagination->initialize($config);
        $data['query'] = $this->db->get_where('web_knowledge', array('category'=>18),$config['per_page'],$this->uri->segment(3));
        $data['content'] = "cancer_vdo_v";
        $this->load->view('template_v',$data);

    }
}
?>