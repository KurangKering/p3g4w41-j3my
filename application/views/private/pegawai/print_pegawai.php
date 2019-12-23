<html>
<body>
  <style>




  </style>
  <table border="0.5"  cellpadding="7" >
    <tr>
      <th width="35%">Nama</th>
      <th width="5%">:</th>
      <th width="55%"><?php echo $pegawai->id ?></th>
    </tr>
    <tr>
      <th>Jenis kelamin</th>
      <th>:</th>
      <th><?php echo $pegawai->jenis_kelamin ?></th>
    </tr>
    <tr>
      <th>Jabatan</th>
      <th>:</th>
      <th><?php echo $pegawai->jabatan ?></th>
    </tr>
    <tr>
      <th>Nip</th>
      <th>:</th>
      <th><?php echo $pegawai->nip ?></th>
    </tr>
    <tr>
      <th>Tempat lahir</th>
      <th>:</th>
      <th><?php echo $pegawai->tempat_lahir ?></th>
    </tr>
    <tr>
      <th>Tanggal lahir</th>
      <th>:</th>
      <th><?php echo indoDate($pegawai->tanggal_lahir, 'j F Y') ?></th>
    </tr>
    <tr>
      <th>Alamat</th>
      <th>:</th>
      <th><?php echo $pegawai->alamat ?></th>
    </tr>
    <tr>
      <th>Pendidikan terakhir</th>
      <th>:</th>
      <th><?php echo $pegawai->pendidikan_terakhir ?></th>
    </tr>
    <tr>
      <th>Pangkat golongan</th>
      <th>:</th>
      <th><?php echo $pegawai->pangkat_golongan ?></th>
    </tr>

  </table>
</body>
</html>