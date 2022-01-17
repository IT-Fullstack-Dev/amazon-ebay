@extends('front.layouts.front',["active_menu"=>"listing"])

@section ('styles')
           
            <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome-free/css/all.min.css') }}">
       
           <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   
           <link rel="stylesheet" href="{{ asset('assets/css/dist/css/adminlte.min.css')}}">
           <link rel="stylesheet" href="{{ asset('assets/css/dist/css/adminlte.css')}}">
                        
@endsection

@section('content')
 
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
 
  <section class="content" style="margin-top:90px;">
    <div class="container-fluid">
      <div class="row">
      
         <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title"></h3>
                  <div class="card-tools">
                     
                    </div>
                </div>
        
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>番号</th>
                      <th>JAN Code</th>
                      <th>タイトル</th>
                      <th>価格(Bookoff)</th>
                      <th>個数</th>
                      <th>カテゴリー</th>
                      <th>画像</th>
                      <th>価格(Amazon)</th>
                      <th>利益</th>
                      <th>状態</th>
                    
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>4905678</td>
                      <td>Canon</td>
                      <td>1000</td>
                      <td>2</td>
                      <td>film camera</td>
                      <td>image</td>
                      <td> 2000</td>
                      <td>1000</td>
                      <td>Extracting</td>
                     

                    </tr>
                    <tr>
                        <td>1</td>
                        <td>4905678</td>
                        <td>Canon</td>
                        <td>1000</td>
                        <td>2</td>
                        <td>film camera</td>
                        <td>image</td>
                        <td> 2000</td>
                        <td>1000</td>
                        <td>Extracting</td>
                       
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>4905678</td>
                        <td>Canon</td>
                        <td>1000</td>
                        <td>2</td>
                        <td>film camera</td>
                        <td>image</td>
                        <td> 2000</td>
                        <td>1000</td>
                        <td>Extracting</td>
                       
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>4905678</td>
                        <td>Canon</td>
                        <td>1000</td>
                        <td>2</td>
                        <td>film camera</td>
                        <td>image</td>
                        <td> 2000</td>
                        <td>1000</td>
                        <td>Extracting</td>
                       
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>4905678</td>
                        <td>Canon</td>
                        <td>1000</td>
                        <td>2</td>
                        <td>film camera</td>
                        <td>image</td>
                        <td> 2000</td>
                        <td>1000</td>
                        <td>Extracting</td>
                       
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>4905678</td>
                        <td>nikon</td>
                        <td>1000</td>
                        <td>2</td>
                        <td>film camera</td>
                        <td>image</td>
                        <td> 2000</td>
                        <td>1000</td>
                        <td>Extracting</td>
                       
                      </tr>

                   

                    </tbody>
                   
                  </table>
                </div>
      
              </div> 
        </div>
        
      </div>

    </div>
  </section>
 

  @endsection

  @section('scripts')
     
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