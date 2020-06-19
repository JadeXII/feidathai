<?
Class Login_Database extends CI_Model{
    public function registration_insert($data){
        $condition = "username =" . "'" . $data['username'] . "'";
        $this->db->select('*');
        $this->db->from('web_admin');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0){
            $this->db->insert('web_admin',$data);
            if($this->db->affected_rows() > 0){
                return true;
            }
            else{
                return false;
            }
        } 
    }
    
    public function login($data){
        $condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
        $this->db->select('*');
        $this->db->from('web_admin');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1){
            return true;
        }
        else{
            return false;
        }
    }

    public function read_user_information($username){
        $condition = "username =" . "'" . $username . "'";
        $this->db->select('*');
        $this->db->from('web_admin');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1){
            return $query->result();
        }
        else{
            return false;
        }
    }
}
?>