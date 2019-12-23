<?php 
use Jenssegers\Blade\Blade;

if (!function_exists('view')) {
	function view($view, $data = []) {
		$path = APPPATH . 'views';
		$blade = new Blade($path, $path . '/cache');

		echo $blade->make($view, $data); 
	}
}


if (!function_exists('hDaftarPekerjaan')) {
	function hDaftarPekerjaan() {

		return [
			'Mahasiswa',
			'Pegawai',
		];

	}
}


if (!function_exists('hStatusDisposisi')) {
	function hStatusDisposisi($input = null) {

		$arr =  [
			'1' => 'Proses',
			'2' => 'Selesai',
		];
		if ($input === null) {
			return $arr;
		}
		return $arr[$input];

	}
}


if (!function_exists('hStatusPeminjaman')) {
	function hStatusPeminjaman($input = null) {

		$arr =  [
			'-1' => 'Ditolak',
			'0' => 'Belum Diproses',
			'1' => 'Proses',
			'2' => 'Selesai',
		];
		if ($input === null) {
			return $arr;
		}
		return $arr[$input];

	}
}

if (!function_exists('hHasDisposisiRoles')) {
	function hHasDisposisiRoles($input = null) {
		$CI =& get_instance();

		$arr = $CI->M_roles->where('has_disposisi', '1')->pluck('role_name', 'id');

		if ($input === null) {
			return $arr;
		}
		return $arr[$input];

	}
}
if (!function_exists('hIsiDisposisi')) {
	function hIsiDisposisi($input = null) {
		$arr = 
		[
			'1' => 'Diterima',
			'-1' => 'Ditolak',
		];

		if ($input === null) {
			return $arr;
		}
		return $arr[$input];

	}
}

if (!function_exists('hIsiDisposisi')) {
	function hIsiDisposisi($input = null) {
		$arr = 
		[
			'1' => 'Diterima',
			'-1' => 'Ditolak',
		];

		if ($input === null) {
			return $arr;
		}
		return $arr[$input];

	}
}

if (!function_exists('hBerkasDokumen')) {
	function hBerkasDokumen($input = null) {
		$arr = 
		[
			'photo_profil' => ['caption' => 'PHOTO PROFIL', 'html' => 'photo-profil'],
			'sk_cpns' => ['caption' => 'SK CPNS', 'html' => 'sk-cpns'],
			'ka_npwp' => ['caption' => 'KA NPWP', 'html' => 'ka-npwp'],
			'sk_pns' => ['caption' => 'SK PNS', 'html' => 'sk-pns'],
			'sk_terakhir' => ['caption' => 'SK TERAKHIR', 'html' => 'sk-terakir'],
			'ka_pegawai' => ['caption' => 'KA PEGAWAI', 'html' => 'ka-pegawai'],
			'ka_taspen' => ['caption' => 'KA TASPEN', 'html' => 'ka-taspen'],
			'karis' => ['caption' => 'KARIS', 'html' => 'karis'],
			'ktp' => ['caption' => 'KTP', 'html' => 'ktp'],
			'buku_nikah' => ['caption' => 'BUKU NIKAH', 'html' => 'buku-nikah'],
			'ka_keluarga' => ['caption' => 'KA KELUARGA', 'html' => 'ka-keluarga'],
		];

		if ($input === null) {
			return $arr;
		}
		return $arr[$input];

	}
}
if ( ! function_exists('_hIsNaturalNumber')) {
	function _hIsNaturalNumber( $n ) {
		return ($n != 0 && ctype_digit((string) $n));
	}
}
if ( ! function_exists('hActiveMenu')) {
	function hActiveMenu( $input ) {
		$CI =& get_instance();
		$URI = $CI->uri->uri_string();


		if (preg_match("/^$input$/", $URI))
		{

			return 'active';
		}
		return '';

	}
}

if ( ! function_exists('_hJenisKelamin')) {
	function _hJenisKelamin( $input = null ) {
		$arr = 
		[
			'lk' => 'Laki-Laki',
			'pr' => 'Perempuan',
		];

		if ($input === null) {
			return $arr;
		}
		return $arr[$input];
	}
}


if (!function_exists('indoDate')) {
	function indoDate ($timestamp = '', $date_format = 'l, j F Y | H:i', $suffix = '') {
		if (trim ($timestamp) == '')
		{
			$timestamp = time ();
		}
		elseif (!ctype_digit ($timestamp))
		{
			$timestamp = strtotime ($timestamp);
		}
    # remove S (st,nd,rd,th) there are no such things in indonesia :p
		$date_format = preg_replace ("/S/", "", $date_format);
		$pattern = array (
			'/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
			'/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
			'/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
			'/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
			'/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
			'/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
			'/April/','/June/','/July/','/August/','/September/','/October/',
			'/November/','/December/',
		);
		$replace = array ( 'Sen','Sel','Rab','Kam','Jum','Sab','Min',
			'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
			'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
			'Januari','Februari','Maret','April','Juni','Juli','Agustus','September',
			'Oktober','November','Desember',
		);
		$date = date ($date_format, $timestamp);
		$date = preg_replace ($pattern, $replace, $date);
		if ($suffix) {
			$date = "{$date} {$suffix}";
		}
		return $date;
	} 
	
}