<?php
class user extends CI_Controller
{
    public function index(){
        $this->load->model('user_model');
        $record = $this->user_model->Allrecord();
        $data = array();
        $data['users'] = $record;
        $this->load->view('list',$data);
    }

    public function create()
    {
        $this->form_validation->set_rules('uname','Username','required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if($this->form_validation->run()==false){
            $this->load->view('create');
        } else {
            $formarray= array();
            $formarray['name'] = $this->input->post('uname');
            $formarray['email'] = $this->input->post('email');
            $this->load->model('user_model');
            $this->user_model->create($formarray);
            $this->session->set_flashdata('success','Data Added Successfuly!!');
            redirect(base_url().'user/index/list');
            
        //    $uname = $this->input->post('uname');
        //    $email = $this->input->post('email');
        //    $this->load->model('user_model');
        //    $this->user_model->create($uname,$email);
        }
    }

    function edit($id)
    {
        $data = array();
        $this->load->model('user_model');
         $user = $this->user_model->edit($id);
         $data['user'] = $user;
         $this->form_validation->set_rules('uname','Username','required');
         $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
         if($this->form_validation->run()==false){
            $this->load->view('edit',$data);
         } else {
            $formarray= array();
            $formarray['name'] = $this->input->post('uname');
            $formarray['email'] = $this->input->post('email');
            $this->user_model->update($formarray,$id);
            $this->session->set_flashdata('success','Data Updated Successfully!');
            redirect(base_url().'user/index');
         }
        
    }

    function delete($id)
    {
        $this->load->model('user_model');
        $this->user_model->delete($id);
        $this->session->set_flashdata('success','User Deleted successfully.');
        redirect(base_url()."user/index");
    }
    
}

?>