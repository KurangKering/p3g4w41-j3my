<html>
<body>
  <p style="text-align: center; font-size: 14; font-weight: bold">DATA SELURUH PEGAWAI</p>
  <table border="1" cellpadding="4">
    <tr>
      <th style="text-align: center; font-weight: bold;">Nama</th>
      <th style="text-align: center; font-weight: bold;">JK</th>
      <th style="text-align: center; font-weight: bold;">Jabatan</th>
      <th style="text-align: center; font-weight: bold;">NIP</th>
      <th style="text-align: center; font-weight: bold;">TTL</th>
      <th style="text-align: center; font-weight: bold;">Alamat</th>
      <th style="text-align: center; font-weight: bold;">Pendidikan Terakhir</th>
      <th style="text-align: center; font-weight: bold;">Pangkat</th>
    </tr>
    <?php foreach ($dataPegawai as $key => $pegawai): ?>
      <tr>
        <td><?php echo $pegawai->nama ?></td>
        <td><?php echo $pegawai->jenis_kelamin ?></td>
        <td><?php echo $pegawai->jabatan ?></td>
        <td><?php echo $pegawai->nip ?></td>
        <td><?php echo $pegawai->tempat_lahir .', '. indoDate($pegawai->tanggal_lahir, 'd-m-Y') ?></td>
        <td><?php echo $pegawai->alamat ?></td>
        <td><?php echo $pegawai->pendidkan_terakhir ?></td>
        <td><?php echo $pegawai->pangkat_golongan ?></td>
      </tr>
    <?php endforeach ?>
    
  </table>
</body>
</html>