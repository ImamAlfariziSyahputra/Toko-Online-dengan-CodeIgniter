<?php

class Auth extends CI_Controller
{
    public function login()
    {
        $data['title'] = 'Login';

        $this->form_validation->set_rules('username','Username','required', ['required' => 'Username harus diisi !']);
        $this->form_validation->set_rules('password','Password','required', ['required' => 'Password harus diisi !']);
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $auth = $this->model_auth->cek_login();

            if ($auth == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau Password Salah!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('role_id', $auth->role_id);

                switch($auth->role_id) 
                {
                    case 1 :
                        redirect('admin');
                        break;
                    case 2:
                        redirect('welcome');
                        break;
                    default:
                        break;
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }

    public function register()
    {
        $data['title'] = 'Register';

        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama harus diisi !']);
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username harus diisi !']);
        $this->form_validation->set_rules('password1', 'Passworddd', 'required|matches[password2]', [
            'required' => 'Password harus diisi !',
            'matches' => 'Password tidak cocok !'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|matches[password1]', ['required' => 'Ulangi Password harus diisi !']);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/register');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'id' => '',
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password1'),
                'role_id' => 2
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Registrasi Berhasil, silahkan Login!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('auth/login');
        }
    }
}
