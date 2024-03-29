  <div id="modal-create-lembar-disposisi" style="display: none;">


    <div class="card">
     <form class="form-horizontal" action="" id="frm-create-lembar-disposisi" method="post" enctype="multipart/form-data">

      <div class="card-body">

       <div id="error-message">

       </div>
       <input type="hidden" name="peminjamanRuanganId" value="">
       <div class="form-group row">
        <label class="col-md-4 col-form-label" for="nama">Nama</label>
        <div class="col-md-8">
          <input class="form-control" readonly name="nama" id="nama" type="text">

        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-4 col-form-label" for="nama">NIP/NIM</label>
        <div class="col-md-8">
          <input class="form-control" readonly name="number_id" id="number_id" type="text">

        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-4 col-form-label" for="nama">Pekerjaan</label>
        <div class="col-md-8">
          <input class="form-control" readonly name="pekerjaan" id="pekerjaan" type="text">

        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-4 col-form-label" for="nama">Keperluan</label>
        <div class="col-md-8">
          <input class="form-control" readonly name="keperluan" id="keperluan" type="text">

        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-4 col-form-label" for="nama">Ruangan</label>
        <div class="col-md-8">
          <input class="form-control" readonly name="ruangan" id="ruangan" type="text">

        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-4 col-form-label" for="waktu">Waktu Peminjaman</label>
        <div class="col-md-8">
          <input class="form-control" readonly name="waktu" id="waktu" type="text">

        </div>
      </div>

    </div>

    <div class="card-body">
      <div class="form-group row">
        <label class="col-md-4 col-form-label">Disposisi Kepada</label>
        <div class="col-md-8 col-form-label">

          <div class="form-check">
            <input class="form-check-input" checked="" id="disposisiToDekan" type="radio" value="<?php echo e('4'); ?>" name="disposisiToDekan">
            <label class="form-check-label" for="disposisiToDekan"><?php echo e(hHasDisposisiRoles(4)); ?></label>
          </div>


        </div>
      </div>
    </div>
    <div class="card-footer text-right">
      <button class="btn btn-primary mr-1" type="submit">Submit</button>
    </div>

  </form>

</div>
</div>






<?php $__env->startSection('js'); ?>
##parent-placeholder-93f8bb0eb2c659b85694486c41717eaf0fe23cd4##
<script>
  $("#modal-create-lembar-disposisi").iziModal({
    subtitle: '',
    zindex: 5000,

    headerColor: '#6777ef',
    onOpening: function(modal){
      // modal.startLoading();
    },
    onOpened: function(modal){
      // modal.stopLoading();
    },

  });
  
  $("#frm-create-lembar-disposisi").submit(function(e) {
    e.preventDefault();
    submitCreateLembarDisposisi();

  })
  var show_detail = function(id)
  {
    axios.get(SITE_URL+id)
    .then(response => {
      res = response.data;
      res.subbid = res.subbidang ? res.subbidang.nama : '-';
      $("#det-nama").val(res.name);
      $("#det-username").val(res.username);
      $("#det-email").val(res.email);
      $("#det-subbidang").val(res.subbid);
      $("#det-hak-akses").val(res.hak_akses);
      $("#modal-detail").iziModal("open");  
    })
    .catch(err => {

    })
  }
  var show_modal = function(id)
  {
    clear_modal();

    if( id )
    {
      $.ajax({
        url: SITE_URL + 'private/peminjaman_ruangan/info/'+id,
        type: 'GET',
        dataType: 'json',

      })
      .done(function(data) {


        $("button[type='submit']").text('Disposisi');

        $("#modal-create-lembar-disposisi").iziModal('setTitle', 'Form Lembar Disposisi');

        set_modal_data(data);


      })
      .fail(function() {
        console.log("error retrieve");
      })
      .always(function() {
        console.log("complete retrieve");
      });
      

    }
    else
    {
      $("input[name='type']").val("new");
      $("button[type='submit']").text('Tambah');

      $("#modal-create-lembar-disposisi").iziModal('setTitle', 'Form Input Pengguna Baru');
      $("#modal-create-lembar-disposisi").iziModal("open");
    }
  }
  var set_modal_data = function(data)
  {

    $("#error-message").html("");
    $("input[name='peminjamanRuanganId']").val(data.id);
    $("input[name='nama']").val(data.nama);
    $("input[name='number_id']").val(data.number_id);
    $("input[name='pekerjaan']").val(data.pekerjaan);
    $("input[name='keperluan']").val(data.keperluan.keperluan);
    $("input[name='ruangan']").val(data.ruangan.nama);
    $("input[name='waktu']").val(data.waktu_mulai + ' - '+ data.waktu_selesai);
    $("input[name='tgl_peminjaman']").val(data.tgl_peminjaman);

    $("#modal-create-lembar-disposisi").iziModal('open');
    $("#modal-create-lembar-disposisi .iziModal-wrap").scrollTop(0);            
  }
  var submitCreateLembarDisposisi = function()
  {
    var url = SITE_URL + 'private/lembar_disposisi/create';

    $("button[type='submit']").attr('disabled', true);
    var formData = $('#frm-create-lembar-disposisi').serializeArray();

    $.ajax({
      url: url,
      type: 'POST',
      dataType: 'json',
      data: formData,
    })
    .done(function(resp) {
      console.log(resp);

      $('#error-message').html("");
      if (resp.status == 'error') 
      {
       $("#error-message").html(
         `<div class=\"alert alert-danger\">
         <strong>Ooops!</strong> Terdapat Error.<br><br>
         `
         +resp.messages+
         `
         </div>
         `);
       $("#modal-create-lembar-disposisi .iziModal-wrap").scrollTop(0);  
     } else if (resp.status == 'success')
     {
      swalInfo('Berhasil', 'success','','2000')
      .then((result) => {

        location.reload();
        
      })
    } else 
    {
      alert('gagal');
    }
  })
    .fail(function() {
      console.log("error post");
    })
    .always(function() {
      $("button[type='submit']").attr('disabled', false);
      console.log("complete post");
    });


  }
  var delete_ruangan = function(id)
  {
    Swal.fire({
      title: 'Hapus ?',
      text: "Yakin ingin menghapus ruangan ini ?",
      type: 'warning',
      showCancelButton: true,
      cancelButtonColor: '#3085d6',
      confirmButtonColor: '#d33',
      confirmButtonText: 'Ya, Hapus!'
    }).then((result) => {
      if (result.value) {
       $.ajax({
        url: SITE_URL + 'private/ruangan/delete/ruangan/'+id,
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
  var clear_modal = function()
  {
    $("#error-message").html("");
    $("input[name='id']").val("");
    $("input[name='nama']").val("");
    $('.input-data').attr('disabled', false);

  }
</script>
<?php $__env->stopSection(); ?><?php /**PATH D:\xZeroxSugarx\xampp\htdocs\kp-edu\application\views/private/peminjaman_ruangan/modal_create_lembar_disposisi.blade.php ENDPATH**/ ?>