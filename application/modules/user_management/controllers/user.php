<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */	

	public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
	}
	
	public function index()
	{
		// $user_level["superadmin"] = $this->user_model->getAllUserLevel();
		// $user_level["admin"] = $this->user_model->getUserLevel(1);
		if ($this->session->userdata('user_level_id') == 1) {
            $this->template->display('user_management/superadminpage');
        } elseif ($this->session->userdata('user_level_id') == 2 || $this->session->userdata('user_level_id') == 3 || $this->session->userdata('user_level_id') == 4) {
            $this->template->display('user_management/adminpage'); 
        } elseif ($this->session->userdata('user_level_id') == 5 || $this->session->userdata('user_level_id') == 6 || $this->session->userdata('user_level_id') == 7) {
            $this->template->display('user_management/userpage');
        } else {
            $this->load->view('user_management/landing');
        }
	}

	public function register_load(){
		$this->template->display('register');
	}

	public function kelolauser_load(){
		$this->template->display('kelolauser');
	}

	public function datatable_user(){
		$list = $this->user_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->nama;
            $row[] = $field->alamat;
			$row[] = $field->no_telepon;
			$row[] = $field->user_level_id;
            $row[] = $field->username;
			$row[] = $field->email;
			// $row[] = $field->id;
			$row[] = "<a href='edit/$field->id'><i class='icon icon-mode_edit'></i></a> &nbsp <a href='delete?id=$field->id'><i class='icon icon-delete'></i></a>";
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->user_model->count_all(),
            "recordsFiltered" => $this->user_model->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
	}

	public function register(){
    	$password  = $this->input->post('password');
        $konfPassword = $this->input->post('konf_password');
        $username = $this->input->post('username');
		$cekUsername = $this->user_model->getByUsername($username)->num_rows();
		// $cekEmail = $this->user_model->getByEmail($email)->num_rows();

        if ($cekUsername > 0) {
                $this->session->set_flashdata('usernameExistS', "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <strong>Username/Email tidak tersedia</div>");
                $this->template->display('user_management/register');	
        } else if ($password != $konfPassword) {
                $this->session->set_flashdata('passValidatorS', "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <strong>Password tidak sesuai</div>");
                $this->template->display('user_management/register');

        } else {
			$data = array(
				'nama'   	  => $this->input->post('nama'),
				'alamat' 	  => $this->input->post('alamat'),
				'no_telepon'	  => $this->input->post('no_telp'),
				'username'    => $this->input->post('username'),
				'password'    => md5($this->input->post('password')),
				'email'       => $this->input->post('email'),
				'user_level_id'        => $this->input->post('user_level')
			);            
			
			$this->user_model->input($data);
			$this->session->set_flashdata('berhasil-registerS', "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			<strong>Akun baru berhasil ditambahkan</div>");
			// redirect("user_management/user");
			$this->template->display('user_management/kelolauser');
		}
		
	}

	public function edit($id){
		$data['userdata'] = $this->user_model->getById($id);
		$this->template->display('edituser',$data);
	}

	public function login()
    {
        $result = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
		);

        $cek      = $this->user_model->getUserPass($result)->num_rows();
        $username = $result['username'];
		$password = $result['password'];
		print_r($result);
        $res      = $this->user_model->getByUser($username);

        if ($cek > 0) {
            $sess_login = array(
                'username'  => $username,
                'password'  => $password,
                'logged_in' => true,
                'user_level_id'      => $res['user_level_id']
            );

            $this->session->set_userdata($sess_login);
			redirect("user_management/user");
        } else {
            $this->session->set_flashdata('userPass-salah', "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Username/Password salah</div>");
			redirect(site_url("user_management/user"));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('user_management/user'));
    }
}
