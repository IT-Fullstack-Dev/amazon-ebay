@extends('front.layouts.front',["active_menu"=>"mypage"])

@section ('styles')
     
      <link href="{{ asset('assets/css/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/dist/css/adminlte.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

@endsection

@section ('content')
<div class="container-fluid">
       <div class="row">
           <div class="col-md-2">
                <button type="button" class="btn btn-success btn-sm" style="margin-top: 100px;" >検索項目を非表示</button>
           </div>

       </div>
      <div class="row">
          <div class="col-md-2">
                <div class="input-group mb-3 input-group-sm" >
                    <div class="input-group-prepend">
                    <span class="input-group-text">商品ID</span>
                    </div>
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="col-md-2">
                 <div class="input-group mb-3 input-group-sm"  >
                    <div class="input-group-prepend">
                    <span class="input-group-text">商品ゴード</span>
                    </div>
                    <input type="text" class="form-control">
                 </div>
             </div> 

             <div class="col-md-2">
                <div class="input-group mb-3 input-group-sm" >
                    <div class="input-group-prepend">
                    <span class="input-group-text">ASIN</span>
                    </div>
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="col-md-2">
                 <div class="input-group mb-3 input-group-sm"  >
                    <div class="input-group-prepend">
                    <span class="input-group-text">楽天カテゴリ</span>
                    </div>
                    <input type="text" class="form-control">
                 </div>
             </div> 
      </div>

      <div class="row">
        <div class="col-md-2">
              <div class="input-group mb-3 input-group-sm">
                  <div class="input-group-prepend">
                  <span class="input-group-text">インポートID</span>
                  </div>
                  <input type="text" class="form-control">
              </div>
          </div>

          <div class="col-md-2">
               <div class="input-group mb-3 input-group-sm"  >
                  <div class="input-group-prepend">
                  <span class="input-group-text">インポート名</span>
                  </div>
                  <input type="text" class="form-control">
               </div>
           </div> 

           <div class="col-md-2">
              <div class="input-group mb-3 input-group-sm" >
                  <div class="input-group-prepend">
                  <span class="input-group-text">商品名</span>
                  </div>
                  <input type="text" class="form-control">
              </div>
          </div>

          <div class="col-md-2">
               <div class="input-group mb-3 input-group-sm"  >
                  <div class="input-group-prepend">
                      <span class="input-group-text">キーワード</span>
                  </div>
                  <input type="text" class="form-control">
               </div>
           </div> 
    </div>
    <div class="row">
        <div class="col-md-2">
              <div class="input-group mb-3 input-group-sm">
                  <div class="input-group-prepend">
                      <span class="input-group-text">ランキング</span>
                  </div>
                  <input type="text" class="form-control" placeholder="下限">
              </div>
          </div>
          ~
          <div class="col-md-1">
               <div class="input-group mb-3 input-group-sm"  >
                  
                  <input type="text" class="form-control" placeholder="上限">
                  <div class="input-group-append">
                       <span class="input-group-text">位</span>
                  </div>
               </div>
           </div> 
           <div class="col-md-2">
            <div class="input-group mb-3 input-group-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text">販売価格</span>
                </div>
                <input type="text" class="form-control" placeholder="下限">
            </div>
        </div>
        ~
        <div class="col-md-1">
             <div class="input-group mb-3 input-group-sm"  >
                
                <input type="text" class="form-control" placeholder="上限">
                <div class="input-group-append">
                     <span class="input-group-text">円</span>
                </div>
             </div>
         </div> 
  
         <div class="col-md-2">
            <div class="input-group mb-3 input-group-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text">最安FBA価格</span>
                </div>
                <input type="text" class="form-control" placeholder="下限">
            </div>
        </div>
        ~
        <div class="col-md-1">
             <div class="input-group mb-3 input-group-sm"  >
                
                <input type="text" class="form-control" placeholder="上限">
                <div class="input-group-append">
                     <span class="input-group-text">円</span>
                </div>
             </div>
         </div> 

        
          
    </div>

    <div class="row">
        <div class="col-md-2">
              <div class="input-group mb-3 input-group-sm">
                  <div class="input-group-prepend">
                  <span class="input-group-text">商品サイズ</span>
                  </div>
                  <input type="text" class="form-control">
              </div>
          </div>

          <div class="col-md-2">
               <div class="input-group mb-3 input-group-sm"  >
                  <div class="input-group-prepend">
                  <span class="input-group-text">商品入り数</span>
                  </div>
                  <input type="text" class="form-control">
               </div>
           </div> 

           <div class="col-md-2">
              <div class="input-group mb-3 input-group-sm" >
                  <div class="input-group-prepend">
                  <span class="input-group-text">予約商品</span>
                  </div>
                  <input type="text" class="form-control">
              </div>
          </div>

          <div class="col-md-2">
               <div class="input-group mb-3 input-group-sm"  >
                  <div class="input-group-prepend">
                  <span class="input-group-text">カテゴリ名</span>
                  </div>
                  <input type="text" class="form-control">
               </div>
           </div> 

    　  <div class="col-md-2">
            <div class="input-group mb-3 input-group-sm" >
                <div class="input-group-prepend">
                <span class="input-group-text">登録日</span>
                </div>
                <input type="text" class="form-control" placeholder="開始">
            </div>
        </div>

        ~
        <div class="col-md-1">
             <div class="input-group mb-3 input-group-sm"  >
                
                <input type="text" class="form-control" placeholder="終了">
                <div class="input-group-append">
                     <span class="input-group-text"></span>
                </div>
             </div>
         </div> 
    </div>


    <div class="row">
        <div class="col-md-2">
              <div class="input-group mb-3 input-group-sm">
                  <div class="input-group-prepend">
                      <span class="input-group-text">販売個数</span>
                  </div>
                  <input type="text" class="form-control" placeholder="下限">
              </div>
          </div>
          ~
          <div class="col-md-1">
               <div class="input-group mb-3 input-group-sm"  >
                  
                  <input type="text" class="form-control" placeholder="上限">
                  <div class="input-group-append">
                       <span class="input-group-text">個</span>
                  </div>
               </div>
           </div> 
           <div class="col-md-１">
            <div class="input-group mb-3 input-group-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text">PV数
                    </span>
                </div>
                <input type="text" class="form-control" placeholder="下限">
            </div>
        </div>
        ~
        <div class="col-md-1">
             <div class="input-group mb-3 input-group-sm"  >
                
                <input type="text" class="form-control" placeholder="上限">
                <div class="input-group-append">
                     <span class="input-group-text">PV</span>
                </div>
             </div>
         </div> 
  
         <div class="col-md-2">
            <div class="input-group mb-3 input-group-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text">個別設定利益率
                    </span>
                </div>
                <input type="text" class="form-control" placeholder="下限">
            </div>
        </div>
        ~
        <div class="col-md-1">
             <div class="input-group mb-3 input-group-sm"  >
                
                <input type="text" class="form-control" placeholder="上限">
                <div class="input-group-append">
                     <span class="input-group-text">％</span>
                </div>
             </div>
         </div> 

    </div>


    <div class="row">
        <div class="col-md-2">
              <div class="input-group mb-3 input-group-sm">
                  <div class="input-group-prepend">
                  <span class="input-group-text">出品中</span>
                  </div>
                  <input type="text" class="form-control">
              </div>
          </div>

          <div class="col-md-2">
               <div class="input-group mb-3 input-group-sm"  >
                  <div class="input-group-prepend">
                  <span class="input-group-text">在庫</span>
                  </div>
                  <input type="text" class="form-control">
               </div>
           </div> 

           <div class="col-md-2">
              <div class="input-group mb-3 input-group-sm" >
                  <div class="input-group-prepend">
                  <span class="input-group-text">NG商品</span>
                  </div>
                  <input type="text" class="form-control">
              </div>
          </div>

          <div class="col-md-2">
               <div class="input-group mb-3 input-group-sm"  >
                  <div class="input-group-prepend">
                  <span class="input-group-text">商品名ズレ</span>
                  </div>
                  <input type="text" class="form-control">
               </div>
           </div> 

           <div class="col-md-2">
            <div class="input-group mb-3 input-group-sm"  >
               <div class="input-group-prepend">
               <span class="input-group-text">編集ロック</span>
               </div>
               <input type="text" class="form-control">
            </div>
        </div> 
    </div>

    <div class="row">
        <button type="button" class="btn btn-info btn-sm" style="margin:0px 5px 0px 5px; padding: 5px 10px 5px 10px !important; "  ><i class="fas fa-search"></i> 検索</button>
        <button type="button" class="btn btn-success btn-sm" style="margin:0px 5px 0px 5px; padding: 5px 10px 5px 10px !important; "  ><i class="fas fa-download"></i> この条件でCSVエクスポート</button>
        <button type="button" class="btn btn-dark btn-sm" style="margin:0px 5px 0px 5px; padding: 5px 10px 5px 10px !important; " ><i class="fas fa-trash-alt"></i>
             この条件の商品をー括ブラックリスト</button>
        <button type="button" class="btn btn-danger btn-sm" style="margin:0px 5px 0px 5px; padding: 5px 10px 5px 10px !important; "  ><i class="fas fa-ban"></i>
             この条件の商品をー括ブラックリスト解除</button>
    </div>

     <!-- Main content -->
     <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                     <tr>
                        <th>操作</th>
                        <th>ランク等</th>
                        <th>アマゾン画像</th>
                        <th>サイズ情報</th>
                        <th>価格情報</th>
                        <th>統計情報</th>
                        <th>基本情報</th>
                     </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>
                            <div class="item"><span class="letter-border">商品ID</span>725076</div>
                            <div class="item"><span class="letter-border">商品コード</span>49100000725076</div>
                           
                            <div><button type="button" class="btn btn-danger btn-sm"  ><i class="fas fa-shopping-cart" ></i> Qoo10</button></div>
                            <div><button type="button" class="btn btn-dark btn-sm"  ><i class="fab fa-amazon" ></i> アマゾン</button></div>
                            <div><button type="button" class="btn btn-warning btn-sm"  ><i class="fas fa-chart-bar" ></i> モノレート</button></div>
                            <div><button type="button" class="btn btn-dark btn-sm"  ><i class="fas fa-ban" ></i> ブラックリスト</button></div>
                            <div><button type="button" class="btn btn-success btn-sm"  ><i class="fas fa-lock" ></i> 編集ロック</button></div>
                            <div><button type="button" class="btn btn-info btn-sm"  ><i class="far fa-edit" ></i> 編集</button></div>
                            <div><button type="button" class="btn btn-success btn-sm"  ><i class="fas fa-history" ></i> 価格履歴</button></div>
                            <div><button type="button" class="btn btn-danger btn-sm"  ><i class="fas fa-search" ></i> 検索結果</button></div>
                        </td>
                        <td>
                            <div class="item"><span class="letter-border">ASIN</span>B06Y63281P</div>
                            <div class="item"><span class="letter-border">RANK</span>318</div>
                            <div class="item"><span class="letter-border">出品状態</span></div>
                            <div class="item"><span class="letter-border">NG商品</span></div>
                            <div class="item"><span class="letter-border">登録日</span>2021/10/11</div>
                            <div class="item"><span class="letter-border">予約商品</span>いいえ</div>
                            <div class="item"><span class="letter-border">発送期間</span>0-2 days</div>
                            <div class="item"><span class="letter-border">登録</span>2020/07/10 21:29:01</div>
                            <div class="item"><span class="letter-border">商品ID</span>2020/07/12 19:00:08</div>
                        </td>
                        <td style="width: 10%;">
                            <div >
                                <img src="images/0.png" style="width: 100%; height: 10%;">
                                <img src="images/8.png" style="width: 100%; height: 10%;">
                            </div>
                         </td>
                        <td> 
                            <div class="item"><span class="letter-border">サイズ</span>SSサイズ</div>
                            <div class="item"><span class="letter-border">縦</span>17cm</div>
                            <div class="item"><span class="letter-border">横</span>14cm</div>
                            <div class="item"><span class="letter-border">高さ</span>2cm</div>
                            <div class="item"><span class="letter-border">重さ</span>80g</div>

                        </td>
                        <td>
                            <div class="item"><span class="letter-border">最安</span>7600円</div>
                            <div class="item"><span class="letter-border">重さ</span>３pt</div>
                            <div class="item"><span class="letter-border">仕入値</span>7,407円</div>
                            <div class="item"><span class="letter-border">送料</span>348円</div>
                            <div class="item"><span class="letter-border">手数料</span>912円</div>
                            <div class="item"><span class="letter-border">販売価格</span>9125円</div>
                            <div class="item"><span class="letter-border">利益額</span>458円</div>
                            <div class="item"><span class="letter-border">利益率</span>５％</div>
                            <div class="item"><span class="letter-border">定価</span>9878円</div>
                            <div class="item"><span class="letter-border">カート在庫数</span>0</div>
                            <div class="item"><span class="letter-border">個別設定利益率</span></div>

                        </td>
                        <td> 
                            <div class="item"><span class="letter-border">販売</span>0</div>
                            <div class="item"><span class="letter-border">PV</span>0</div>

                        </td>
                        <td style="width: 20%;">
                            <div class="item"><span class="letter-border">Amazonカテゴリー</span>ゲーム</div>
                            <div class="item"><span class="letter-border">Qoo10カテゴリー</span>（320000341）</div>
                            <div class="item"><span class="letter-border">商品名</span>[PS4] ドラゴンクエストXI</div>
                            <div class="item"><span class="letter-border">商品名ズレ</span></div>
                            <div class="item"><span class="letter-border">商品説明</span></div>
                            <div class="item"><span class="letter-border">インポート名</span></div>
                            <div class="item"><span class="letter-border">インポートID</span>20589</div>


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
        <!-- /.row -->
      </section>
      <!-- /.content -->

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