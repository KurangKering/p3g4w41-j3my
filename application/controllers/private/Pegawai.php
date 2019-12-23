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
				'jenis_kelamin' => $form['jenis_kelamin'],
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
				'jenis_kelamin' => $form['jenis_kelamin'],
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
			var_dump ($form);
			die();
			$input = [
				'nama' => $form['nama'],
				'jenis_kelamin' => $form['jenis_kelamin'],
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
		$user = $this->M_data_pegawai->with('data_dokumen')->findOrFail($id);
		$user->JK = _hJenisKelamin($user->jenis_kelamin);
		$user->TTL = $user->tempat_lahir . ', '. indoDate($user->tanggal_lahir, 'd-F-Y');
		$pic = 'media/no-image.jpg';
		if ($file = $user->data_dokumen->photo_profil) {
			$pic = 'media/'.$file;
		}
		$pic = site_url($pic);
		$user->photo_profil = $pic;
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
	public function cetak()
	{
		$type = $this->input->get('type');
		switch ($type) {
			case 'single':
			$id = $this->input->get('id');
			break;
			case 'all':
			$dataPegawai = $this->M_data_pegawai->latest()->get();
			$output['dataPegawai'] = $dataPegawai;
			$view = $this->load->view('private/pegawai/cetak_semua_pegawai', $output, TRUE);

			$this->load->library('Pdf');

			$pdf = new Pdf('L', 'mm', 'a4', true, 'UTF-8', false);


			$pdf->SetTitle('data seluruh pegawai');
			$pdf->setPrintHeader(false);

			$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

			$pdf->SetMargins(10, 10, 10);
			$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

			$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

			$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);


			$pdf->SetFont('dejavusans', '', 10);

			$pdf->AddPage('L');

			$pdf->writeHTML($view, true, false, true, false, '');

			$pdf->Output('dataseluruhpegawai.pdf', 'I');


			// $this->load->library('Pdfgenerator');
			// $this->pdfgenerator->generate($view, 'data-pegawai-'. date('d-m-Y H:i:s'), TRUE, 'A4','landscape');

			return;			
			default:
			break;
		}
	}


	public function print()
	{
		$id = $this->uri->segment(4);
		$pegawai = $this->M_data_pegawai->with('data_dokumen')->findOrFail($id);
		$pegawai->JK = _hJenisKelamin($pegawai->jenis_kelamin);
		$pegawai->TTL = $pegawai->tempat_lahir . ', '. indoDate($pegawai->tanggal_lahir, 'd-F-Y');
		$pic = 'media/no-image.jpg';
		if ($file = $pegawai->data_dokumen->photo_profil) {
			$pic = 'media/'.$file;
		}
		$pic = site_url($pic);
		$pegawai->photo_profil = $pic;

		$this->load->library('Pdf');
		$pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		$pdf->SetTitle('data pegawai');

		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		$pdf->SetMargins(PDF_MARGIN_LEFT, 10, PDF_MARGIN_RIGHT);

		$pdf->SetPrintHeader(false);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

		$pdf->SetFont('times', '', 16);

		$pdf->AddPage();


		$pdf->Cell(0, 0, 'DATA DIRI PEGAWAI', 0, 1, 'C', 0, '', 0);

		$pdf->Ln(10);


		$pdf->SetFontSize(12);


		$txt = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';

		$view = $this->load->view('private/pegawai/print_pegawai', compact('pegawai'), TRUE);



		$pdf->MultiCell(115, 5, $view, 0, 'L', 0, 1, '', '', true,0,true);

		$pdf->Image($pic, 135,27, 60, 60, '','','',false,300,'',false,false,0 );

		$pdf->Ln(4);

		$pdf->lastPage();

		$pdf->Output('datapegawai.pdf', 'I');


		
	}
}
/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */