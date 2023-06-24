<?php
class user_model extends CI_Model
{
    public function create($formarray)
    {
        $this->db->insert('users',$formarray);
        // $this->db->insert('users',array('name'=>'$uname','email'=>'$email'));

    }

    public function Allrecord()
    {
        return $this->db->get('users')->result_array();
    }

    function edit($id)
    {
    //     $this->db->where('user_id',$id);
    //    return $this->db->get('users')->result_array();
    $q = "SELECT * FROM `users` WHERE `user_id`=$id";
    $query=  $this->db->query($q)->result_array();
    return $query;
    }

    function update($formarray,$id)
    {
        // $q="UPDATE users SET name='$formarray[0]', email='$formarray[1]' WHERE id=$id ";
        // return $this->db->query($q);
        $this->db->where('user_id',$id);
        return $this->db->update('users',$formarray);
    }

    function delete($id)
    {
        $q="DELETE FROM `users` WHERE `user_id`=$id";
        return $this->db->query($q);
        // return $this->db->delete('users','user_id',$id);
    }
}

?>