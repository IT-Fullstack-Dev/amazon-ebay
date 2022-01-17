@extends('front.layouts.front',["active_menu"=>"mypage"])

@section ('styles')
     
      <link href="{{ asset('assets/css/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/dist/css/adminlte.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

@endsection

@section ('content')

        <div class="container">
                <div class="row center">
                    <div class="col-md-5">
                        <div class="card" style="margin-top: 80px;">
                            <div class="card-header" style="background-color: #f3eacf ;">
                            <h3 class="card-title">出品 ASIN Code テーブル</h3>
            
                            <div class="card-tools">
                            
                            </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" >
                                <div class="form-group" style="margin-top:10px; padding: 5px 10px 5px 10px">
                                    <label for="comment">ASIN 入力(limit:100件)
                                        :</label>
                                    <textarea class="form-control" rows="10" id="comment"></textarea>
                                </div>

                                <div class="form-group" style="padding: 5px 10px 5px 10px;">
                                    <label for="usr">インポート名:</label>
                                    <input type="text" class="form-control" id="usr" >
                                </div>
            
                                <div class="form-check" style="margin:5px 10px 5px 10px">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="" >重複商品を除外

                                    </label>
                                </div>
            
                                <button type="button" class="btn btn-primary" style=" float: right;">ー括登録
                                </button>
                            </div>

                            
                            <!-- /.card-body -->
                        </div>
                    </div>
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