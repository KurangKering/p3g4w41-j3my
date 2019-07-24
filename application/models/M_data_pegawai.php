<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;
class M_data_pegawai extends Eloquent
{
	protected $table = 'data_pegawai';
	protected $fillable = [
		'id',
		'nama',
		'jabatan',
		'nip',
		'ttl',
		'tempat_lahir',
		'tanggal_lahir',
		'alamat',
		'pendidikan_terakhir',
		'pangkat_golongan',
	];

	public function data_dokumen()
	{

		return $this->hasOne(new M_Data_Dokumen(), 'data_pegawai_id', 'id');
	}
}