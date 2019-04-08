<?php
class User extends CI_Model{
    
    public function index(){

        $query = $this->db->get("users");
        return $query->result();
    }
    public function saveUser()
    {    
        $data['name'] = $_POST['name'];
        $data['email'] = $_POST['email'];

        return $this->db->insert('users',$data);

        // GET LAST INSTERTED ID //
        // print_r($this->db->insert_id());exit;
        
    }
    public function update_product($id) 
    {
        $data=array(
            'title' => $this->input->post('title'),
            'description'=> $this->input->post('description')
        );
        if($id==0){
            return $this->db->insert('products',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('products',$data);
        }        
    }
}
?>