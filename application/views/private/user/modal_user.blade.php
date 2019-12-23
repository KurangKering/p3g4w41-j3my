  <div id="modal-user" class="modal-block modal-block-primary mfp-hide">
    <section class="panel">
      <div id="error-message">
      </div>
      <header class="panel-heading">
        <h2 class="panel-title"><span id="title-modal"></span></h2>
      </header>

      <form class="form-horizontal mb-lg" id="frm-user">
        <div class="panel-body">
          <input type="hidden" name="id" value="">
          <input type="hidden" name="type" value="get">

          <div class="form-group mt-lg">
            <label class="col-sm-3 control-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" id="nama" class="form-control" name="nama" >

            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
              <input type="text" id="email" name="email" class="form-control" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Username</label>
            <div class="col-sm-9">
              <input type="text" id="username" name="username" class="form-control" >
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
              <input type="text" id="password" name="password" class="form-control" >
              <span class="help-block" id="help-password">Kosongkan jika tidak ingin mengganti password</span>

            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Hak Akses</label>
            <div class="col-sm-9">
              <select  class="form-control" name="role_id" id="role_id">
                <option value="">-- Please select Role --</option>
                @foreach ($ALL_ROLE as $key => $role)
                <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                @endforeach
              </select>
            </div>
          </div>


        </div>
        <footer class="panel-footer">
          <div class="row">
            <div class="col-md-12 text-right">
              <button type="submit" id="btn-submit" class="btn btn-primary">TAMBAH</button>
              <button  type="button" 
               class="btn btn-default modal-dismiss" id="btn-keluar">Cancel</button>
            </div>
          </div>
        </footer>
      </form>
    </section>
  </div>

  


  


  @section('js-inline')
  @parent
  <script>



    $("#frm-user").submit(function(e) {
      e.preventDefault();

      submit_user();

    })
    $("#btn-keluar").click(function(event) {
     $.magnificPopup.close();
   });
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
      })
      .catch(err => {

      })
    }
    var show_modal = function(id)
    {
      clear_modal();

      if( id )
      {
        NProgress.start();

        $.ajax({
          url: SITE_URL + 'private/user/info/'+id,
          type: 'GET',
          dataType: 'json',

        })
        .done(function(data) {


          $("input[name='type']").val("edit");
          $("#btn-submit").text('Simpan');

          $("#title-modal").text('Modal Ubah Pengguna')

          $("#help-password").removeClass('hide');

          set_modal_data(data);


        })
        .fail(function() {
          console.log("error retrieve");
        })
        .always(function() {
          console.log("complete retrieve");
          NProgress.done();

        });


      }
      else
      {
        $("#help-password").addClass('hide');
        $("input[name='type']").val("new");
        $("#title-modal").text('Modal Tambah Pengguna')
        $("#btn-submit").text('Tambah');

        $.magnificPopup.open({
          items: {
            src : '#modal-user',

          },
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
    }
    var set_modal_data = function(data)
    {

      $("#error-message").html("");
      $("input[name='id']").val(data.id);
      $("input[name='nama']").val(data.nama);
      $("input[name='username']").val(data.username);
      $("input[name='email']").val(data.email);
      $("select[name='role_id']").val(data.role_id);

      $.magnificPopup.open({
        items: {
          src : '#modal-user',

        },
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
  @endsection