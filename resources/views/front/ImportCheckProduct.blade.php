@extends('front.layouts.front',["active_menu"=>"mypage"])

@section ('styles')
     
      <link href="{{ asset('assets/css/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/dist/css/adminlte.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

@endsection

@section ('content')

<div class="container">
    <div class="row" style="margin-top: 90px;">
        <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>時刻</th>
                        <th>状態</th>
                        <th>インポート名</th>
                        <th>入力件数</th>
                        <th>1次合格件数</th>
                        <th>2次合格件数</th>
                        <th>操作</th>
                     </tr>
                  </thead>
                  <tbody>
                    <tr style="vertical-align: baseline;">
                        <td>
                            3
                        </td>
                        <td>
                            <div>開始: 2021／10／8  22:08:55</div>
                            <div>終了: 2021／10／8  22:08:55</div>

                        </td>

                        <td>
                            <div><button type="button" class="btn btn-primary btn-sm"  >1次終了</button></div>

                        </td>
                        <td style="width: 20%;">
                            <div >
                                third
                            </div>
                         </td>
                        <td> 78</td>
                        <td>77</td>
                        <td>0</td>
                        <td> 
                            <div><button type="button"  class="btn btn-danger btn-sm" >実行ログ</button></div>
                            <div><button type="button" class="btn btn-info btn-sm" >商品一覧</button></div>
                            <div><button type="button" class="btn btn-success btn-sm" >実行ログ</button></div>
                           
                        </td>
                   </tr>
                   <tr style="vertical-align: baseline;">
                    <td>
                        2
                    </td>
                    <td>
                        <div>開始: 2021／10／8  22:08:55</div>
                        <div>終了: 2021／10／8  22:08:55</div>

                    </td>

                    <td>
                        <div><button type="button" class="btn btn-primary btn-sm"  >1次終了</button></div>

                    </td>
                    <td style="width: 20%;">
                        <div >
                           second
                        </div>
                     </td>
                    <td> 78</td>
                    <td>77</td>
                    <td>0</td>
                    <td> 
                        <div><button type="button" class="btn btn-danger btn-sm" >実行ログ</button></div>
                        <div><button type="button" class="btn btn-info btn-sm" >商品一覧</button></div>
                        <div><button type="button" class="btn btn-success btn-sm" >実行ログ</button></div>
                       
                       
                    </td>
               </tr>
               <tr style="vertical-align: baseline;">
                <td>
                    1
                </td>
                <td>
                    <div>開始: 2021／10／8  22:08:55</div>
                    <div>終了: 2021／10／8  22:08:55</div>

                </td>

                <td>
                    <div><button type="button" class="btn btn-primary btn-sm"  >1次終了</button></div>

                </td>
                <td style="width: 20%;">
                    <div >
                        first
                    </div>
                 </td>
                <td> 78</td>
                <td>77</td>
                <td>0</td>
                <td> 
                    <div><button type="button" class="btn btn-danger btn-sm" >実行ログ</button></div>
                    <div><button type="button" class="btn btn-info btn-sm" >商品一覧</button></div>
                    <div><button type="button" class="btn btn-success btn-sm" >実行ログ</button></div>
                   
                  
                </td>
           </tr>
                 
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
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