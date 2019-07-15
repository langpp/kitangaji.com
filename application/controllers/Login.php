<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this
        ->load
        ->model('M_Login');
        $this
        ->load
        ->helper('url');
    }

    private function load($title = '', $datapath = '')
    {
    }

        //MENGECEK USERNAME DAN PASSWORD DARI DATABASE
    public function index()
    {
        $email = $this
            ->input
            ->post('email');
        
        $password = md5($this
            ->input
            ->post('password'));

        $data = $this
            ->M_Login
            ->readBy($email, $password);
        
        if (isset($data->email) && isset($data->password)) {
            // var_dump($data->email);
            if ($email == $data->email && $password == $data->password) {
                    //PENGURUS PUSAT
                    if($data->status_user == "1"){
                        $newdata = array(
                            "id_user" => $data->id_user,
                            "username" => $data->username,
                            "email" => $data->email,
                            "role" => $data->status_user,
                        );
                        $this
                        ->session
                        ->set_userdata($newdata);
                        redirect('donatur', 'refresh');

                    //PENGURUS
                    }elseif($data->status_user == "2"){
                        $newdata = array(
                            "id_user" => $data->id_user,
                            "username" => $data->username,
                            "email" => $data->email,
                            "role" => $data->status_user,
                        );
                        $this
                        ->session
                        ->set_userdata($newdata);
                        redirect('guru', 'refresh');
                    //USER
                    }elseif($data->status_user == "3"){
                        $newdata = array(
                            "id_user" => $data->id_user,
                            "username" => $data->username,
                            "email" => $data->email,
                            "role" => $data->status_user,
                        );
                        $this
                        ->session
                        ->set_userdata($newdata);
                        redirect('murid', 'refresh');
                    // ADMIN
                    }elseif($data->status_user == "999"){
                        $newdata = array(
                            "id_user" => $data->id_user,
                            "username" => $data->username,
                            "email" => $data->email,
                            "role" => $data->status_user,
                        );
                        $this
                        ->session
                        ->set_userdata($newdata);
                        redirect('dashboard', 'refresh');

                    }else{
                        $this->session->set_flashdata('notif_login', '<script>toastr.error("Your Email Or Password Incorrect!", "Error", {"timeOut": "0","extendedTImeout": "0"});</script>');
                        redirect('login');
                    }
            } else {
                $this->session->set_flashdata('notif_login', '<script>toastr.error("Account Not Found !", "Error", {"timeOut": "0","extendedTImeout": "0"});</script>');
                redirect('login');
            }

        } else {
            $this->session->set_flashdata('notif_login', '<script>toastr.error("Your Email Or Password Incorrect!", "Error", {"timeOut": "0","extendedTImeout": "0"});</script>');
            redirect('login');
        }
}

    //UNTUK LOGOUT DAN MENGHAPUS SESSION LOGIN
    public function logout()
    {
        $this
        ->session
        ->sess_destroy();
        redirect('login', 'refresh');

    }
}