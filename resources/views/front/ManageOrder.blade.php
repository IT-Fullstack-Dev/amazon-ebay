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
                        <th>時間</th>
                        <th>時刻</th>
                        <th>状態</th>
                        <th>メール</th>
                        <th>注文情報</th>
                        
                     </tr>
                  </thead>
                  <tbody>
                    <tr style="vertical-align: baseline;">
                        <td>
                            1
                        </td>
                        <td>
                            <div>開始: 2021／10／8  22:08:55</div>
                            

                        </td>

                        <td>
                            <div><button type="button" class="btn btn-primary btn-sm"  ><i class="fas fa-edit"></i>詳細＆編集</button></div>
                            <div><button type="button" class="btn btn-warning btn-sm" style="color: white;"  ><i class="far fa-paper-plane"></i>評価依頼メール</button></div>
                            <div><button type="button" class="btn btn-success btn-sm"  ><i class="far fa-envelope"></i>メール履歴</button></div>
                            <div><button type="button" class="btn btn-info btn-sm"  ><i class="fas fa-exchange-alt"></i>注文再取得</button></div>
                            <div><button type="button" class="btn btn-secondary btn-sm"  >メール上から削除</button></div>

                        </td>
                        <td style="width: 20%;">
                            <div>状態：出荷完了済</div>
                            <div>注文ステータス：未指定</div>
                            <div>決済ステータス：未指定</div>
                            <div>受注結果：未指定</div>
                            <div>支払ステータス：未指定</div>
                            <div>支払方法：Visa/MasterCard</div>
                         </td>
                      
                        <td>
                            <div>未入金案内：未</div>
                            <div>注文承認：済</div>
                            <div>出荷通知：済</div>
                            <div>キャンセル：未</div>
                            <div>評価依頼：未</div>
                            <button type="button" class="btn btn-info btn-sm"><i class="far fa-paper-plane"></i>自由入力メール</button>
                        </td>
                        <td> 
                            <div><button type="button" class="btn btn-info btn-sm"><i class="far fa-paper-plane"></i>QMS注文管理</button></div>
                            <div><button type="button" class="btn btn-info btn-sm"><i class="far fa-paper-plane"></i>送料追加確認メール</button></div>

                        </td>
                   </tr>
                   <tr style="vertical-align: baseline;">
                    <td>
                        1
                    </td>
                    <td>
                        <div>開始: 2021／10／8  22:08:55</div>
                        

                    </td>

                    <td>
                        <div><button type="button" class="btn btn-primary btn-sm"  ><i class="fas fa-edit"></i>詳細＆編集</button></div>
                        <div><button type="button" class="btn btn-warning btn-sm" style="color: white;"  ><i class="far fa-paper-plane"></i>評価依頼メール</button></div>
                        <div><button type="button" class="btn btn-success btn-sm"  ><i class="far fa-envelope"></i>メール履歴</button></div>
                        <div><button type="button" class="btn btn-info btn-sm"  ><i class="fas fa-exchange-alt"></i>注文再取得</button></div>
                        <div><button type="button" class="btn btn-secondary btn-sm"  >メール上から削除</button></div>

                    </td>
                    <td style="width: 20%;">
                        <div>状態：出荷完了済</div>
                        <div>注文ステータス：未指定</div>
                        <div>決済ステータス：未指定</div>
                        <div>受注結果：未指定</div>
                        <div>支払ステータス：未指定</div>
                        <div>支払方法：Visa/MasterCard</div>
                     </td>
                  
                    <td>
                        <div>未入金案内：未</div>
                        <div>注文承認：済</div>
                        <div>出荷通知：済</div>
                        <div>キャンセル：未</div>
                        <div>評価依頼：未</div>
                        <button type="button" class="btn btn-info btn-sm"><i class="far fa-paper-plane"></i>自由入力メール</button>
                    </td>
                    <td> 
                        <div><button type="button" class="btn btn-info btn-sm"><i class="far fa-paper-plane"></i>QMS注文管理</button></div>
                        <div><button type="button" class="btn btn-info btn-sm"><i class="far fa-paper-plane"></i>送料追加確認メール</button></div>

                    </td>
                   </tr>
                   <tr style="vertical-align: baseline;">
                    <td>
                        1
                    </td>
                    <td>
                        <div>開始: 2021／10／8  22:08:55</div>
                        

                    </td>

                    <td>
                        <div><button type="button" class="btn btn-primary btn-sm"  ><i class="fas fa-edit"></i>詳細＆編集</button></div>
                        <div><button type="button" class="btn btn-warning btn-sm" style="color: white;"  ><i class="far fa-paper-plane"></i>評価依頼メール</button></div>
                        <div><button type="button" class="btn btn-success btn-sm"  ><i class="far fa-envelope"></i>メール履歴</button></div>
                        <div><button type="button" class="btn btn-info btn-sm"  ><i class="fas fa-exchange-alt"></i>注文再取得</button></div>
                        <div><button type="button" class="btn btn-secondary btn-sm"  >メール上から削除</button></div>

                    </td>
                    <td style="width: 20%;">
                        <div>状態：出荷完了済</div>
                        <div>注文ステータス：未指定</div>
                        <div>決済ステータス：未指定</div>
                        <div>受注結果：未指定</div>
                        <div>支払ステータス：未指定</div>
                        <div>支払方法：Visa/MasterCard</div>
                     </td>
                  
                    <td>
                        <div>未入金案内：未</div>
                        <div>注文承認：済</div>
                        <div>出荷通知：済</div>
                        <div>キャンセル：未</div>
                        <div>評価依頼：未</div>
                        <button type="button" class="btn btn-info btn-sm"><i class="far fa-paper-plane"></i>自由入力メール</button>
                    </td>
                    <td> 
                        <div><button type="button" class="btn btn-info btn-sm"><i class="far fa-paper-plane"></i>QMS注文管理</button></div>
                        <div><button type="button" class="btn btn-info btn-sm"><i class="far fa-paper-plane"></i>送料追加確認メール</button></div>

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