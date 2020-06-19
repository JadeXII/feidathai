<?
class admin extends CI_controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        // $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->model('login_database');
    }
    function index(){
        $this->form_validation->set_rules('username','username','trim|required|xss_clean');
        $this->form_validation->set_rules('password','password','trim|required|xss_clean');
        if ($this->form_validation->run()==FALSE){
            if(isset($this->session->userdata['logged_in'])){
                echo "<meta http-equiv=\"refresh\" content=\"0;URL=admin/main\">";
            }
            else{
                $data['title'] = "เข้าสู่ระบบ - บริษัท เฟยดา จำกัด";
                $data['content'] = "login_v";
                $this->load->view('template_v',$data);
            }
        }
        else{
            $data = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password'))
            );
            $result = $this->login_database->login($data);
            if ($result == TRUE){
                $username = $this->input->post('username');
                $result = $this->login_database->read_user_information($username);
                if ($result != FALSE){
                    $session_data = array('username' => $result[0]->username,);
                    $this->session->set_userdata('logged_in', $session_data);
                    $data['title'] = "ระบบผู้ดูแล - บริษัท เฟยดา จำกัด";
                    $data['content'] = "mainadmin";
                    $this->load->view('template_v',$data);
                }
            }
            else{
                $data = array(
                    'title'=> "เข้าสู่ระบบ",'error_message' => 'Username หรือ Password ไม่ถูกต้อง'
                );
                $data['title'] = "เข้าสู่ระบบ - บริษัท เฟยดา จำกัด";
                $data['content'] = "login_v";
                $this->load->view('template_v', $data);
            }
        }
        // $data['content'] = "login_v";
        // $this->load->view('template_v',$data);
    }

    function main(){
        $data['list'] = $this->db->query("SELECT * FROM register_guidebook ORDER BY id DESC");            
        $data['about_cancer'] = $this->db->query("SELECT * FROM web_knowledge WHERE category=1 ORDER BY id DESC");
        $data['cancer_care'] = $this->db->query("SELECT * FROM web_knowledge WHERE category=7 ORDER BY id DESC");
        $data['cancer_food'] = $this->db->query("SELECT * FROM web_knowledge WHERE category=6 ORDER BY id DESC");
        $data['cancer_treatment'] = $this->db->query("SELECT * FROM web_knowledge WHERE category=12 ORDER BY id DESC");
        $data['cancer_vdo'] = $this->db->query("SELECT * FROM web_knowledge WHERE category=18 ORDER BY id DESC");
        $data['review'] = $this->db->query("SELECT * FROM web_knowledge WHERE category=2 ORDER BY id DESC");
        
        // NCDs
        $data['about_diabetes'] = $this->db->query("SELECT * FROM web_knowledge_ncds WHERE category=1 ORDER BY id DESC");
        $data['NCDs_knowledge'] = $this->db->query("SELECT * FROM web_knowledge_ncds WHERE category=2 ORDER BY id DESC");
        $data['NCDs_review'] = $this->db->query("SELECT * FROM web_knowledge_ncds WHERE category=3 ORDER BY id DESC");
        $data['NCDs_vdo'] = $this->db->query("SELECT * FROM web_knowledge_ncds WHERE category=4 ORDER BY id DESC");

        //health
        $data['health_news'] = $this->db->query("SELECT * FROM web_knowledge_health WHERE category=1 ORDER BY id DESC");
        $data['health_knowledge'] = $this->db->query("SELECT * FROM web_knowledge_health WHERE category=2 ORDER BY id DESC");
        $data['health_vdo'] = $this->db->query("SELECT * FROM web_knowledge_health WHERE category=3 ORDER BY id DESC");
        
        //admindata
        $query = $this->db->query("SELECT * FROM web_admin");
        foreach ($query->result() as $row){
            $data['admin'] = $row->username;
        }
        
        $data['title'] = "ระบบผู้ดูแล - บริษัท เฟยดา จำกัด";
        $data['content'] = "mainadmin";
        $this->load->view('template_v',$data);
    }
    function logout(){
        //Remove session data
        $sess_array = array('username'=>'');
        $this->session->unset_userdata('logged_in',$sess_array);
        $data['message_display'] = 'Successfully logout';
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://loaclhost/newfeidathai/admin\">";
    }
    function addknowledge_cancer(){
        $data['title'] = "เพิ่มบบความโรคมะเร็ง - บริษัท เฟยดา จำกัด";
        $data['content'] = "addknowledge_cancer_v";
        $this->load->view('template_v',$data);
    }
    function addknowledge_NCDs(){
        $data['title'] = "เพิ่มบทความโรคเรื้อรัง - บริษัท เฟยดา จำกัด";
        $data['content'] = "addknowledge_NCDs_v";
        $this->load->view('template_v',$data);
    }
    function addknowledge_health(){
        $data['title'] = "เพิ่มบทความโรคทั่วไป - บริษัท เฟยดา จำกัด";
        $data['content'] = "addknowledge_health_v";
        $this->load->view('template_v',$data);
    }
}
?>