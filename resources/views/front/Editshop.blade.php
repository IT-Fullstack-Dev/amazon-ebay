@extends('front.layouts.front',["active_menu"=>"mypage"])

@section ('styles')
     
      <link href="{{ asset('assets/css/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/dist/css/adminlte.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

@endsection

@section ('content')

<div class="container-fluid">
    <div class="row" style="margin-top: 90px;">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    Qoo10ショップ情報編集ページ
                </div>
                <div class="card-body">
                    <form class="form-horizontal">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-3 col-form-label">Store ID:</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputName" placeholder="Name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-3 col-form-label">Store Login ID:</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="password" class="col-sm-3 col-form-label">Store Login Password:</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="password" placeholder="password">
                          </div>
                        </div>    
                        <div class="form-group row">
                            <label for="key" class="col-sm-3 col-form-label">Qoo10 API Key:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="key" placeholder="MWS API Token">
                            </div>
                          </div>            
                       
                        <div class="form-group row">
                          <div class="offset-sm-3 col-sm-9">
                            <button type="submit" class="btn btn-danger" style="float: right;">保存</button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
            <!-- /.card -->
  
           
          </div>
          <!-- /.col -->
    </div>
   </div>



@endsection

@section('scripts')
      <!-- <script src="{{ asset('assets/css/plugins/jquery/jquery.min.js') }}"></script> -->
      <!-- <script src="{{ asset('assets/css/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->
      <!-- <script src="{{ asset('assets/css/dist/js/adminlte.min.js') }}"></script> -->
      <!-- <script src="{{ asset('assets/css/dist/js/demo.js') }}"></script> -->
      <!-- <script src="{{ asset('assets/css/plugins/jquery/jquery.min.js') }}"></script> -->
      <!-- <script src="{{ asset('assets/css/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->
      <script src="{{ asset('assets/css/plugins/datatables/jquery.dataTables.js') }}"></script>
      <script src="{{ asset('assets/css/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
      <!-- <script src="{{ asset('assets/css/dist/js/adminlte.min.js') }}"></script> -->
      <!-- <script src="{{ asset('assets/css/dist/js/demo.js') }}"></script> -->
      <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            });
        });
        </script>
@endsection