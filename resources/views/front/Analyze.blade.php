@extends('front.layouts.front',["active_menu"=>"mypage"])

@section ('styles')
     
      <link href="{{ asset('assets/css/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/dist/css/adminlte.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@endsection

@section ('content')

<div class="container-fluid">
    <div class="row" style="margin-top: 90px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row" >
                        <div class="col-md-2">
                            ステータス
                        </div>    
                        <div class="col-md-9">
                            <div class="form-check" style="display: inline; margin:5px 5px 5px 5px;">
                                <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Option 1
                                </label>
                            </div>
                            <div class="form-check" style="display: inline; margin:5px 5px 5px 5px;">
                                <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Option 1
                                </label>
                            </div>
                            <div class="form-check" style="display: inline; margin:5px 5px 5px 5px;">
                                <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Option 1
                                </label>
                            </div>
                            <div class="form-check" style="display: inline; margin:5px 5px 5px 5px;">
                                <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Option 1
                                </label>
                            </div>
                            <div class="form-check" style="display: inline; margin:5px 5px 5px 5px;">
                                <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Option 1
                                </label>
                            </div>
                            <div class="form-check" style="display: inline; margin:5px 5px 5px 5px;">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">Option 1
                                </label>
                            </div>
                            <div class="form-check" style="display: inline; margin:5px 5px 5px 5px;">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">Option 1
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2" style="display: flex; align-items: center;">
                            カテゴリー
                        </div>   
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-2" style="display: inline !important; padding: 5px 5px 5px 5px;">
                                    <select class="form-control category-select" id="sel1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    </select>
                                </div>
                                <div class="col-md-2" style="display: inline; padding: 5px 5px 5px 5px;">
                                    <select class="form-control" id="sel1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    </select>
                                </div>
                                <div class="col-md-2" style="display: inline; padding: 5px 5px 5px 5px;">
                                    <select class="form-control" id="sel1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    </select>
                                </div>
                                <div class="col-md-1" style="display: inline; padding: 5px 5px 5px 5px; display: flex; align-items: center;">
                                    登録日
                                </div>
                                <div class="col-md-2" style="display: inline; padding: 5px 5px 5px 5px; height: 30px;">
                                    <input id="datepicker1" style="height: 30px;" />
                                </div>
                                <div style="display: inline; display: flex; align-items: center;">
                                    --    
                                </div>
                                
                                <div class="col-md-2" style="display: inline; padding: 5px 5px 5px 5px; height: 30px;">
                                    <input id="datepicker2" style="height: 30px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2" style="align-items: center; display: flex;">
                            キーワード
                        </div>   
                        <div class="col-md-9" >
                            <div class="row" >
                                <div class="col-md-3">
                                    <div class="form-group"  style="align-items: center; display: flex; margin-bottom: unset;">
                                        <input type="text" class="form-control" id="usr" style="height: 30px;">
                                    </div>
                                </div>  
                                <div class="col-md-2" style="align-items: center; display: flex;">
                                    <button type="button" class="btn btn-info" style="line-height: 1;">Search</button>
                                    <button type="button" class="btn btn-info" style="margin-left: 10px; line-height: 1;">Search</button>
                                </div>  
                                
                            </div>
                            
                           

                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                     <tr>
                        <th>商品番号</th>
                        <th>商品</th>
                        <th>価格＆在庫</th>
                        <th>送料＆出発国</th>
                        <th>おまけ</th>
                        <th>販売</th>
                        <th>Page View</th>

                        
                     </tr>
                  </thead>
                  <tbody>
                    <tr style="vertical-align: baseline;">
                        <td>
                            1
                        </td>
                        <td style="width: 40%;">
                            <table>
                                <tr>
                                    <td style="width: 30%;">
                                        <img src="images/0.png" style="width: 100%; height: 100%;"/>
                                    </td>
                                    <td>
                                        <p　style="color:red;">出品中</p>
                                        <p　style="color:black;">this is product title</p>
                                    </td>
                                </tr>
                            </table>
                        </td>

                        <td>
                            <p>10,000円</p>
                            <p>5個</p>
                        </td>

                        <td style="width: 20%;">
                           　<p>JP</p>
                        </td>

                        <td></td>

                        <td>
                            　<p>１</p>
                            　<p>5</p>
                            　<p>10</p>
                        </td>

                        <td> 
                            　<p>１</p>
                            　<p>5</p>
                            　<p>10</p>
                        </td>
                   </tr>
                   <tr style="vertical-align: baseline;">
                    <td>
                        1
                    </td>
                    <td style="width: 40%;">
                        <table>
                            <tr>
                                <td style="width: 30%;">
                                    <img src="images/0.png" style="width: 100%; height: 100%;"/>
                                </td>
                                <td>
                                    <p　style="color:red;">出品中</p>
                                    <p　style="color:black;">this is product title</p>
                                </td>
                            </tr>
                        </table>
                    </td>

                    <td>
                        <p>10,000円</p>
                        <p>5個</p>
                    </td>

                    <td style="width: 20%;">
                       　<p>JP</p>
                    </td>

                    <td></td>

                    <td>
                        　<p>１</p>
                        　<p>5</p>
                        　<p>10</p>
                    </td>

                    <td> 
                        　<p>１</p>
                        　<p>5</p>
                        　<p>10</p>
                    </td>
                   </tr>
                   <tr style="vertical-align: baseline;">
                    <td>
                        1
                    </td>
                    <td style="width: 40%;">
                        <table>
                            <tr>
                                <td style="width: 30%;">
                                    <img src="images/0.png" style="width: 100%; height: 100%;"/>
                                </td>
                                <td>
                                    <p　style="color:red;">出品中</p>
                                    <p　style="color:black;">this is product title</p>
                                </td>
                            </tr>
                        </table>
                    </td>

                    <td>
                        <p>10,000円</p>
                        <p>5個</p>
                    </td>

                    <td style="width: 20%;">
                       　<p>JP</p>
                    </td>

                    <td></td>

                    <td>
                        　<p>１</p>
                        　<p>5</p>
                        　<p>10</p>
                    </td>

                    <td> 
                        　<p>１</p>
                        　<p>5</p>
                        　<p>10</p>
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
      <script src="{{ asset('assets/css/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->
      <script src="{{ asset('assets/css/plugins/datatables/jquery.dataTables.js') }}"></script>
      <script src="{{ asset('assets/css/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <script>
        $(function () {

            $(".btn-danger").click(function(){
         location.href="checkdetail.html";
      });
      $(".btn-success").click(function(){
          location.href="listingLog.html";
      });
      $('#datepicker1').datepicker({
            uiLibrary: 'bootstrap4'
        });
       $('#datepicker2').datepicker({
            uiLibrary: 'bootstrap4'
        });
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