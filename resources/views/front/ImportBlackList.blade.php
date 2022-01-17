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
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Blacklist ASIN Code</h3>
  
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 250px;">
                      <input type="file" name="table_search" class="customer-control form-control float-right "  placeholder="Jan code Upload">
  
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
                        <th>ASIN Code</th>
                        
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

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Blacklist NG ワード</h3>
  
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 250px;">
                      <input type="file" name="table_search" class=" customer-control form-control float-right" placeholder="Search">
  
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
                        <th>NG ワード</th>
                        
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