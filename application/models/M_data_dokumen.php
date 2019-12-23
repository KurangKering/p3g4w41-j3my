<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;
class M_data_dokumen extends Eloquent
{
	protected $table = 'data_dokumen';
	protected $fillable = [
		'data_pegawai_id',
		'photo_profil',
		'sk_cpns',
		'ka_npwp',
		'sk_pns',
		'sk_terakhir',
		'ka_pegawai',
		'ka_taspen',
		'karis',
		'ktp',
		'buku_nikah',
		'ka_keluarga',
	];

	public function data_pegawai()
	{

		return $this->belongsTo(new M_Data_Pegawai());
	}
}