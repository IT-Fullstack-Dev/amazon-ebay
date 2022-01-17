<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>site</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- SEO Meta Tags -->
   <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
   <meta name="author" content="Inovatik">

   <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
   <meta property="og:site_name" content="" /> <!-- website name -->
   <meta property="og:site" content="" /> <!-- website link -->
   <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
   <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
   <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
   <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
   <meta property="og:type" content="article" />
            <link href="{{ asset('assets/css/fontawesome-all.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/css/swiper.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/css/dist/css/adminlte.min.css') }}" rel="stylesheet">


</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b style="color: white;">ログイン</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">ログイン情報を入力してください。</p>

      <form action="{{ route('login') }}" method="POST" id="LoginForm">
          @csrf
          <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" id="password" name="password">
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Remember Me
                  </label>
                </div>
              </div>
              
            </div>
            <div class="social-auth-links text-center mb-3">
        <button  type="submit" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> ログイン
         </button>
        <a href="/register" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> 登録
        </a>
      </div>
      </form>

      
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="#">I forgot my password</a>
      </p>
    
    </div>
    <!-- /.login-card-body -->
  </div>
</div>

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.validate.js') }}"></script>
<script src="{{ asset('js/login.js') }}"></script>
<script>

    $(document).ready(function(){
        $("#register").click(function(){
           $("#registerForm").submit();
        });
    });

</script>
</body>
</html>
