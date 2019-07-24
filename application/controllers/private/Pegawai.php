<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends Private_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->vars['dataPegawai'] = $this->M_data_pegawai->get();
		return view('private.pegawai.index', $this->vars);

	}

	public function create()
	{

		return view('private.pegawai.create', $this->vars);
	}

	public function edit($id)
	{
		$this->vars['dataPegawai'] = $this->M_data_pegawai->findOrFail($id);
		return view('private.pegawai.edit', $this->vars);
	}

	
	public function store_data_pegawai()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
		$this->form_validation->set_rules('nip', 'NIP', 'required|is_unique[data_pegawai.nip]');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('pendidikan_terakhir', 'Pendidikan Terakhir', 'required');
		$this->form_validation->set_rules('pangkat_golongan', 'Pangkat/Golongan', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->vars['status'] = 'error';
			$this->vars['messages'] = $this->form_validation->error_array();
			
		} else {
			$form = $this->input->post();
			$input = [
				'nama' => $form['nama'],
				'jabatan' => $form['jabatan'],
				'nip' => $form['nip'],
				'tempat_lahir' => $form['tempat_lahir'],
				'tanggal_lahir' => $form['tanggal_lahir'],
				'alamat' => $form['alamat'],
				'pendidikan_terakhir' => $form['pendidikan_terakhir'],
				'pangkat_golongan' => $form['pangkat_golongan'],
			];
			$newPegawai  = $this->M_data_pegawai->create($input);
			if ($newPegawai) {
				$this->vars['status'] = 'success';
				$this->vars['pegawai_id'] = $newPegawai->id;
			}
		}

		$this->output
		->set_content_type('application/json', 'utf-8')
		->set_output(json_encode($this->vars, JSON_HEX_APOS | JSON_HEX_QUOT))
		->_display();

		exit;
	}
	public function update_data_pegawai()
	{

		$original_value = $this->M_data_pegawai->findOrFail($this->input->post('pegawai_id'))->nip ;
		if($this->input->post('nip') != $original_value) {
			$is_unique =  '|is_unique[data_pegawai.nip]';
		} else {
			$is_unique =  '';
		}



		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
		$this->form_validation->set_rules('nip', 'NIP', 'required'.$is_unique);
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('pendidikan_terakhir', 'Pendidikan Terakhir', 'required');
		$this->form_validation->set_rules('pangkat_golongan', 'Pangkat/Golongan', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->vars['status'] = 'error';
			$this->vars['messages'] = $this->form_validation->error_array();
			
		} else {
			$form = $this->input->post();
			$input = [
				'nama' => $form['nama'],
				'jabatan' => $form['jabatan'],
				'nip' => $form['nip'],
				'tempat_lahir' => $form['tempat_lahir'],
				'tanggal_lahir' => $form['tanggal_lahir'],
				'alamat' => $form['alamat'],
				'pendidikan_terakhir' => $form['pendidikan_terakhir'],
				'pangkat_golongan' => $form['pangkat_golongan'],
			];
			$updatePegawai  = $this->M_data_pegawai
			->findOrFail($form['pegawai_id'])->update($input);
			if ($updatePegawai) {
				$this->vars['status'] = 'success';
				$this->vars['pegawai_id'] = $updatePegawai->id;
			}
		}

		$this->output
		->set_content_type('application/json', 'utf-8')
		->set_output(json_encode($this->vars, JSON_HEX_APOS | JSON_HEX_QUOT))
		->_display();

		exit;
	}
	public function store() 
	{	


		foreach ($_FILES as $keyFile => $valueFile) {
			$response[] = $this->upload_image($keyFile);
		}



		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		if ($this->form_validation->run() === FALSE) {
			$this->vars['status'] = 'error';
			$this->vars['messages'] = validation_errors();
			
		} else {
			$form = $this->input->post();
			$input = [
				'nama' => $form['nama'],
				'jabatan' => $form['jabatan'],
				'nip' => $form['nip'],
				'tempat_lahir' => $form['tempat_lahir'],
				'tanggal_lahir' => $form['tanggal_lahir'],
				'alamat' => $form['alamat'],
				'pendidikan_terakhir' => $form['pendidikan_terakhir'],
				'pangkat_golongan' => $form['pangkat_golongan'],
			];
			$newPegawai  = $this->M_data_pegawai->create($input);
			if ($newPegawai) {
				$this->vars['status'] = 'success';
			}
		}
		

		$this->output
		->set_content_type('application/json', 'utf-8')
		->set_output(json_encode($this->vars, JSON_HEX_APOS | JSON_HEX_QUOT))
		->_display();

		exit;
	}
	public function update()
	{	

		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		if ($this->form_validation->run() === FALSE) {
			$this->vars['status'] = 'error';
			$this->vars['messages'] = validation_errors();
			
		} else {
			$form = $this->input->post();
			$input = [
				'nama' => $form['nama'],
				'jabatan' => $form['jabatan'],
				'nip' => $form['nip'],
				'tempat_lahir' => $form['tempat_lahir'],
				'tanggal_lahir' => $form['tanggal_lahir'],
				'alamat' => $form['alamat'],
				'pendidikan_terakhir' => $form['pendidikan_terakhir'],
				'pangkat_golongan' => $form['pangkat_golongan'],
			];
			$newPegawai  = $this->M_data_pegawai->find($form['id'])->update($input);
			if ($newPegawai) {
				$this->vars['status'] = 'success';
			}
		}
		

		$this->output
		->set_content_type('application/json', 'utf-8')
		->set_output(json_encode($this->vars, JSON_HEX_APOS | JSON_HEX_QUOT))
		->_display();

		exit;
	}
	public function info($id)
	{
		$user = $this->M_users->findOrFail($id);
		$this->output
		->set_content_type('application/json', 'utf-8')
		->set_output(json_encode($user, JSON_HEX_APOS | JSON_HEX_QUOT))
		->_display();

		exit;
	}


	public function validate()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
	}
	public function upload_berkas()
	{
		$pegawai_id = $this->input->post('pegawai_id');
		$berkas = $this->input->post('berkas');

		$response[] = $this->upload_image('file', $berkas, $pegawai_id);

		if ($response[0]['status'] == 'success') {

			$dataDokumen = $this->M_data_dokumen
			->updateOrCreate(['data_pegawai_id' => $pegawai_id], 
				[
					$berkas => $response[0]['file_name'],
				]
			);
		}

		$this->output
		->set_content_type('application/json', 'utf-8')
		->set_output(json_encode($response, JSON_HEX_APOS | JSON_HEX_QUOT))
		->_display();

		exit;
	}

	private function upload_image($fileInput, $fieldName = null, $id = null) {
		$config['upload_path'] = './media/';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = 0;
		$config['encrypt_name'] = true;
		$this->load->library('upload');
		$this->upload->initialize($config);

		if (!$this->upload->do_upload($fileInput)) {
			$output['status'] = 'error';
			$output['message'] = $this->upload->display_errors();
		} else {
			$file = $this->upload->data();

			// chmood new file
			@chmod(FCPATH.'media/'.$file['file_name'], 0777);
			// resize new image

			$output['status'] = 'success';
			$output['file_name'] = $file['file_name'];
			if ( _hIsNaturalNumber($id) ) {
				
				$query = $this->M_data_dokumen->where('data_pegawai_id', $id)->first();

				// chmood old file
				@chmod(FCPATH.'media/'.$query[$fieldName], 0777);

				// unlink old file
				@unlink(FCPATH.'media/'.$query[$fieldName]);

			}
		}
		return $output;
	}

	
	public function delete_pegawai()
	{
		$id = $this->input->post('pegawai_id');
		$pegawai = $this->M_data_pegawai->with('data_dokumen')->findOrFail($id);


		$dokumen = $pegawai->data_dokumen;

		$daftarBerkas = array_keys(hBerkasDokumen());
		if (count($dokumen) > 0) {
			foreach ($daftarBerkas as $key => $berkas) {
				@chmod(FCPATH.'media/'.$dokumen[$berkas], 0777);
				@unlink(FCPATH.'media/'.$dokumen[$berkas]);
			}

			$dokumen->delete();
		}
		
		$pegawai->delete();

		$response['status'] = 'success';
		$this->output
		->set_content_type('application/json', 'utf-8')
		->set_output(json_encode($response, JSON_HEX_APOS | JSON_HEX_QUOT))
		->_display();

		exit;

	}
}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */