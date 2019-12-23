<div id="modal-detail-pegawai" class="modal-block modal-block-lg mfp-hide">
  <section class="panel">
    <header class="panel-heading">
      <h2 class="panel-title">Detail Pegawai</h2>

    </header>

    <div class="panel-body">
      <div class="tabs" id="tab-pegawai">
        <ul class="nav nav-tabs tabs-primary">
          <li class="active">
            <a href="#overview" data-toggle="tab">Data Diri</a>
          </li>
          <li>
            <a href="#edit" data-toggle="tab">Data Berkas</a>
          </li>
        </ul>
        <div class="tab-content">
          <div id="overview" class="tab-pane active">
            <div class="row">
              <div class="col-xs-5" >
                <div class="profil-area" style="">
                  <img style="width: 100%; height: 100% !important" id="ketProfil" alt="">

                </div>
              </div>
              <div class="col-xs-7" style="border-left: 1px solid #ddd;">
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
          <div id="edit" class="tab-pane">
            <div class="row">
              <div class="col-md-5" style="border-right: 1px solid #ddd;">
                <?php $__currentLoopData = hBerkasDokumen(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $dokumen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

                <button type="button" class="btn-berkas mb-xs mt-xs mr-xs btn btn-default btn-block"><?php echo e($dokumen['caption']); ?></button>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </div>
              <div class="col-md-7">
                <img style="width: 100%; height: 100% !important" id="berkas-photo" alt="">
                
              </div>
            </div>
          </div>
        </div>
      </div>

      

    </div>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-md-12 text-right">
          <button type="button" class="btn btn-default modal-dismiss" id="btn-keluar">Keluar</button>
        </div>
      </div>
    </footer>
  </section>
</div>    




</div>
<?php $__env->startSection('js-inline'); ?>
##parent-placeholder-2f6c98b6640c9995d13240fcaae97e2145dfdc94##
<script>

  <?php
  $arrayBerkas= hBerkasDokumen();
  $jsArrayBerkas = json_encode($arrayBerkas);
  echo "let arrayBerkas = ". $jsArrayBerkas . ";\n";
  ?>

  $("#berkas-photo,#ketProfil").click(function(event) {
   window.open($(this).attr('src'), '_blank');
 });

  $("#btn-keluar").click(function(event) {
   $.magnificPopup.close();
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
    $("#ketProfil").attr('src', data.photo_profil);
    $("#berkas-photo").attr('src', '');
    $(".btn-berkas").removeClass('btn-primary');


    var indexBerkas = 0;
    $.each(arrayBerkas, function(index, val) {
      var $currentBtn = $(".btn-berkas").eq(indexBerkas);

      $currentBtn.click(function(event) {
        $("#berkas-photo").attr('src', '<?php echo e(site_url('media/')); ?>'+data.data_dokumen[index]);
        $(".btn-berkas").removeClass('btn-primary');
        $(this).addClass('btn-primary');

      });


      indexBerkas++;
    })

    $.magnificPopup.open({
      items: {
        src : '#modal-detail-pegawai',

      },
      alignTop: true,
      type: 'inline',
      preloader: false,
      focus: '#name',
      modal: true,
      callbacks: {
        beforeOpen: function() {
          if($(window).width() < 700) {
            this.st.focus = false;
          } else {
            this.st.focus = '#name';
          }
        }
      }

    })


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
<?php $__env->stopSection(); ?><?php /**PATH D:\xZeroxSugarx\xampp\htdocs\pegawai-jemmy-baru\application\views/private/pegawai/modal_pegawai.blade.php ENDPATH**/ ?>