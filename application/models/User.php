<?php
class User extends CI_Model{
    
    public function index(){

        $query = $this->db->get("users");
        return $query->result();
    }
    public function saveUser($id)
    {    
        $data['name'] = $_POST['name'];
        $data['email'] = $_POST['email'];

        if ($id == null) {

            return $this->db->insert('users',$data);

        }else{

            $this->db->where('id',$id);
            return $this->db->update('users',$data);
        }   
        // GET LAST INSTERTED ID //
        // print_r($this->db->insert_id());exit;
    }

    public function deleteUser($id){

        $this->db->where('id',$id);
        $this->db->delete("users");
    }
    
}
?>