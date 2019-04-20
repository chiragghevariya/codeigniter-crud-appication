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
        if ($id == "") {
            
            $data['password'] = sha1($_POST['password']);
        }

        if ($id == null) {
            $this->session->set_flashdata('record_save_update','User data successfully saved.');
            return $this->db->insert('users',$data);

        }else{

            $this->db->where('id',$id);
            $this->session->set_flashdata('record_save_update','User data successfully updated.');
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