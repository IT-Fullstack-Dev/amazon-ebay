@extends('front.layouts.front',["active_menu"=>"mypage"])

@section ('styles')
     
      <link href="{{ asset('assets/css/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/dist/css/adminlte.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

@endsection

@section ('content')
        <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row" >
      
        <!-- /.col -->
        <div class="col-md-12" style="margin-top:90px;">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
             
                <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">ユーザー情報</a></li>
                <li class="nav-item"><a class="nav-link" href="#jancode" data-toggle="tab">Jan Code</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                    <form class="form-horizontal">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">お名前</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputName" placeholder="Name" value="{{Auth::user()->name}}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">メールアドレス</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="{{Auth::user()->email}}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-2 col-form-label">MWS API Token</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" placeholder="MWS API Token">
                          </div>
                        </div>             
                       
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">保存</button>
                          </div>
                        </div>
                      </form>
                  <!-- /.post -->
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="jancode">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                  <h3 class="card-title">出品JAN Code テーブル</h3>
                  
                                  <div class="card-tools">
                                    
                                      <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data">
                                          @csrf
                                          <div class="input-group input-group-sm" style="width: 250px;">
                                          <input type="file" name="file" class="form-control float-right" placeholder="Jan code Upload">
                      
                                          <div class="input-group-append">
                                            <button type="submit" class="btn btn-info"><i class="fas fa-upload"></i></button>
                                          </div>
                                          </div>
                                     </form>
                                    
                                  </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0" style="height: 500px;">
                                  <table class="table table-head-fixed">
                                    <thead>
                                      <tr>
                                        <th>ID</th>
                                        <th>Jan Code</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($datas as $data=>$val) 
                                          <tr>
                                             <td>{{$data['jan']}}</td> 
                                             <td>{{$data['jan']}}</td> 
                                          </tr>   
                                        @endforeach                                 
                                                                             
                                    </tbody>
                                  </table>
                                </div>
                                <!-- /.card-body -->
                              </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                  <h3 class="card-title">Blacklist JAN Code テーブル</h3>
                  
                                  <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 250px;">
                                      <input type="file" name="table_search" class="form-control float-right" placeholder="Search">
                  
                                      <div class="input-group-append">
                                        <button type="submit" class="btn btn-info"><i class="fas fa-upload"></i></button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0" style="height: 500px;">
                                  <table class="table table-head-fixed">
                                    <thead>
                                      <tr>
                                        <th>ID</th>
                                        <th>Jan Code</th>
                                        
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>4905678</td>
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>4905679</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td>4905689</td>
                                          </tr>
                                          <tr>
                                            <td>4</td>
                                            <td>4905678</td>
                                          </tr>
                                          <tr>
                                            <td>5</td>
                                            <td>4905670</td>
                                          </tr>
                                          <tr>
                                            <td>6</td>
                                            <td>4905678</td>
                                          </tr>
                                          <tr>
                                            <td>7</td>
                                            <td>4905678</td>
                                          </tr>
                                          <tr>
                                            <td>8</td>
                                            <td>4905678</td>
                                          </tr>
                                          <tr>
                                            <td>9</td>
                                            <td>4905678</td>
                                          </tr>
                                          <tr>
                                            <td>10</td>
                                            <td>4905678</td>
                                          </tr>
                                                                             
                                    </tbody>
                                  </table>
                                </div>
                                <!-- /.card-body -->
                              </div>
                        </div>
                    </div>
                   
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">お名前</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputName" placeholder="Name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">メールアドレス</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-2 col-form-label">MWS API Token</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" placeholder="MWS API Token">
                          </div>
                        </div>             
                       
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">確認</button>
                          </div>
                        </div>
                      </form>
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->


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