  <div id="modal-user" style="display: none;">

    <div class="card">
      <div class="header">
        
    </div>
    <div class="body">
     <div id="error-message">

     </div>
     <form class="form-horizontal" id="frm-user">
      <input type="hidden" name="id" value="">

      <input type="hidden" name="type" value="get">

      <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
          <label for="nama">Nama</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
          <div class="form-group">
            <div class="form-line">
              <input type="text" id="nama" class="form-control" name="nama" >
            </div>
          </div>
        </div>
      </div>
      <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
          <label for="email">Email</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
          <div class="form-group">
            <div class="form-line">
              <input type="text" id="email" name="email" class="form-control" >
            </div>
          </div>
        </div>
      </div>
      <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
          <label for="username">Username</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
          <div class="form-group">
            <div class="form-line">
              <input type="text" id="username" name="username" class="form-control" >
            </div>
          </div>
        </div>
      </div>

      <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
          <label for="password">Password</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
          <div class="form-group">
            <div class="form-line">
              <input type="text" id="password" name="password" class="form-control" >
            </div>
          </div>
        </div>
      </div>
      <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
          <label for="password">Hak Akses</label>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
          <div class="form-group">
            <div class="form-line">
             <select  class="form-control" name="role_id" id="role_id">
              <option value="">-- Please select Role --</option>
              <?php $__currentLoopData = $ALL_ROLE; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($role->id); ?>"><?php echo e($role->role_name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
        </div>
      </div>
    </div>


    <div class="row clearfix">
      <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
        <button type="submit" id="btn-submit" class="btn btn-primary m-t-15 waves-effect">TAMBAH</button>
      </div>
    </div>
  </form>
</div>
</div>



</div>


<div id="modal-detail" style="display: none;">
  <div class="box">
    <div class="box-header"></div>
    <div class="box-body">
      <form  id="frm-detail" class="form-horizontal">
        <div class="form-group ">
          <label for="" class="control-label col-lg-3">Nama</label>
          <div class="col-lg-9">
            <input type="text" readonly class="form-control" id="det-nama">
          </div>
        </div>
        <div class="form-group ">
          <label for="" class="control-label col-lg-3">Username</label>
          <div class="col-lg-9">
            <input type="text" readonly class="form-control" id="det-username">
          </div>
        </div>
        <div class="form-group ">
          <label for="" class="control-label col-lg-3">Email</label>
          <div class="col-lg-9">
            <input type="text" readonly class="form-control" id="det-email">
          </div>
        </div>
        <div class="form-group ">
          <label for="" class="control-label col-lg-3">Sub Bidang</label>
          <div class="col-lg-9">
            <input type="text" readonly class="form-control" id="det-subbidang">
          </div>
        </div>
        <div class="form-group ">
          <label for="" class="control-label col-lg-3">Hak Akses</label>
          <div class="col-lg-9">
            <input type="text" readonly class="form-control" id="det-hak-akses">
          </div>
        </div>
        <div class="box-footer">
         <div class="text-center">
           <button data-iziModal-close data-iziModal-transitionOut="bounceOutDown" class="btn bg-olive">Tutup</button>
         </div>
       </div>
     </form>
   </div>
 </div>
</div>


<?php $__env->startSection('js-inline'); ?>
##parent-placeholder-2f6c98b6640c9995d13240fcaae97e2145dfdc94##
<script>
  $("#modal-user").iziModal({
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
  $("#modal-detail").iziModal({
    title: 'Detail Pengguna',
    subtitle: '',
    headerColor: '#88A0B9',
    onOpening: function(modal){
      modal.startLoading();
    },
    onOpened: function(modal){
      modal.stopLoading();
    },

  });
  $("#frm-user").submit(function(e) {
    e.preventDefault();
    submit_user();

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
        url: SITE_URL + 'private/user/info/'+id,
        type: 'GET',
        dataType: 'json',

      })
      .done(function(data) {


        $("input[name='type']").val("edit");
        $("#btn-submit").text('Simpan');

        $("#modal-user").iziModal('setTitle', 'Form Ubah Data Pengguna');

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
      $("#btn-submit").text('Tambah');

      $("#modal-user").iziModal('setTitle', 'Form Input Pengguna Baru');
      $("#modal-user").iziModal("open");
    }
  }
  var set_modal_data = function(data)
  {

    $("#error-message").html("");
    $("input[name='id']").val(data.id);
    $("input[name='nama']").val(data.nama);
    $("input[name='username']").val(data.username);
    $("input[name='email']").val(data.email);
    $("select[name='role_id']").val(data.role_id);
    $("#modal-user").iziModal('open');
    $("#modal-user .iziModal-wrap").scrollTop(0);            
  }
  var submit_user = function()
  {
    var type = $("input[name='type']").val();
    var uri = type == 'new'? 'store' : type == 'edit' ? 'update' : 'delete';
    var url = SITE_URL + 'private/user/' + uri;

    $("#btn-submit").attr('disabled', true);
    var formData = $('#frm-user').serializeArray();

    $.ajax({
      url: url,
      type: 'POST',
      dataType: 'json',
      data: formData,
    })
    .done(function(resp) {


      $('#error-message').html("");

      if (resp.status == 'error') 
      {
        let errors = '';
        $.each(resp.messages, function(index, val) {
          errors += '<li>'+val+'</li>';
        });
        $("#error-message").html(
         `<div class=\"alert alert-danger\">
         <ul>
         `         
         +errors+
         `
         </ul>
         </div>
         `);
        $("#modal-user .iziModal-wrap").scrollTop(0);  
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
      $("#btn-submit").attr('disabled', false);
      console.log("complete post");
    });


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
  var clear_modal = function()
  {
    $("#error-message").html("");
    $("input[name='id']").val("");
    $("input[name='nama']").val("");
    $("input[name='username']").val("");
    $("input[name='email']").val("");
    $("input[name='password']").val("");
    $("select[name='role_id']").val("");
    $('.input-data').attr('disabled', false);

  }
</script>
<?php $__env->stopSection(); ?><?php /**PATH D:\xZeroxSugarx\xampp\htdocs\pegawai-jemmy\application\views/private/user/modal_user.blade.php ENDPATH**/ ?>