<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_users');

		$this->load->model('M_roles');
		
	}
	public function index()
	{
		redirect('auth/login');
	}

	public function login()
	{



		// $mpdf = new \Mpdf\Mpdf();
		// $mpdf->WriteHTML('<h1>Hello world!</h1>');
		// $mpdf->Output();

		// return;
		return view('login');
	}

	public function do_logout()
	{
		$this->session->sess_destroy();

		redirect(site_url('auth/login'));
	}

	public function do_login()
	{
		if ($this->session->userdata('user')) {

			redirect(site_url('private'));
		}

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() === FALSE) {
			$response['status'] = 'error';
			$response['messages'] = $this->form_validation->error_array();
			
		} else {
			$form_data = $this->input->post();
			$input = [
				'username' => $form_data['username'],
				'password' => ($form_data['password']),
			];
			$new_user = $this->M_users->where($input)->first();
			if ($new_user) {
				$response['status'] = 'success';

				$array = array(
					'user' => [
						'user_id' => $new_user->id,
					],
				);
				
				$this->session->set_userdata( $array );

			} else {
				$response['status'] = 'error';
				$response['messages'] = ['Akun Tidak Ditemukan'];
			}
		}
		
		$this->output
		->set_content_type('application/json', 'utf-8')
		->set_output(json_encode($response, JSON_HEX_APOS | JSON_HEX_QUOT))
		->_display();

		exit;

	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */