    


<div id="modal-detail" style="display: none;">
 <div class="row clearfix">
  <div class="col-lg-12">
    <div class="card">

      <div class="body">
        <div class="row">
          <div class="col-xs-5">
            <div class="profil-area" style="">
              <img style="width: 100%; height: 100% !important" id="ketProfil" alt="">
              
            </div>
          </div>
          <div class="col-xs-7">
            <table class="table table-bordered">
              <tr>
                <th style="width: 1%; white-space: nowrap">Nama</th>
                <td><span id="ketNama"></span></td>
              </tr>
              <tr>
                <th style="width: 1%; white-space: nowrap">Jenis Kelamin</th>
                <td><span id="ketJK"></span></td>
              </tr>

              <tr>
                <th style="width: 1%; white-space: nowrap">Jabatan</th>
                <td><span id="ketJabatan"></span></td>
              </tr>
              <tr>
                <th style="width: 1%; white-space: nowrap">NIP</th>
                <td><span id="ketNIP"></span></td>
              </tr>
              <tr>
                <th style="width: 1%; white-space: nowrap">TTL</th>
                <td><span id="ketTTL"></span></td>
              </tr>
              <tr>
                <th style="width: 1%; white-space: nowrap">Alamat</th>
                <td><span id="ketAlamat"></span></td>
              </tr>
              <tr>
                <th style="width: 1%; white-space: nowrap">Pendidikan Terakhir</th>
                <td><span id="ketPendidikanTerakhir"></span></td>
              </tr>
              <tr>
                <th style="width: 1%; white-space: nowrap">Pangkat/Golongan</th>
                <td><span id="ketPangkatGolongan"></span></td>
              </tr>

              
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

</div>
<?php $__env->startSection('js-inline'); ?>
##parent-placeholder-2f6c98b6640c9995d13240fcaae97e2145dfdc94##
<script>
  $("#modal-detail").iziModal({
    title: 'Detail Pegawai',
    width: '800px',
    subtitle: '',
    headerColor: '#88A0B9',
    onOpening: function(modal){
    },
    onOpened: function(modal){
    },
  });



  var show_detail = function(id)
  {
    $.ajax({
      url: SITE_URL + 'private/pegawai/info/'+id,
      type: 'GET',
      dataType: 'json',
    })
    .done(function(data) {
      console.log(data);
      set_modal_data(data);
    })
    .fail(function() {
      console.log("error retrieve");
    })
    .always(function() {
      console.log("complete retrieve");
    });
  }
  var set_modal_data = function(data)
  {
    $("#error-message").html("");

   
    $("#ketNama").text(data.nama);
    $("#ketJK").text(data.JK);
    $("#ketJabatan").text(data.jabatan);
    $("#ketNIP").text(data.nip);
    $("#ketTTL").text(data.TTL);
    $("#ketAlamat").text(data.alamat);
    $("#ketPendidikanTerakhir").text(data.pendidikan_terakhir);
    $("#ketPangkatGolongan").text(data.pangkat_golongan);
    $("#ketProfil").attr('src', data.photo_profil)
    $("#modal-detail").iziModal('open');
    $("#modal-detail .iziModal-wrap").scrollTop(0);            
  }
  var delete_user = function(id)
  {
    Swal.fire({
      title: 'Hapus ?',
      text: "Yakin ingin menghapus user ini ?",
      type: 'warning',
      showCancelButton: true,
      cancelButtonColor: '#3085d6',
      confirmButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus!'
    }).then((result) => {
      if (result.value) {
       $.ajax({
        url: SITE_URL + 'private/user/delete/users/'+id,
        type: 'GET',
        dataType: 'json',
      })
       .done(function(data) {
        swalInfo('Berhasil', 'success','','2000')
        .then((res) => {
          location.reload();
        })
      })
       .fail(function() {
        console.log("error retrieve");
      })
       .always(function() {
        console.log("complete retrieve");
      });
     }
   })
  }

  function print_pegawai(id)
  {

    window.open('<?php echo e(site_url('private/pegawai/print/')); ?>'+id);
  }
</script>
<?php $__env->stopSection(); ?><?php /**PATH D:\xZeroxSugarx\xampp\htdocs\pegawai-jemmy\application\views/private/pegawai/modal_pegawai.blade.php ENDPATH**/ ?>