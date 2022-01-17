<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top" style="@if($active_menu!='')background-color: #00bfd8; @endif">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand" href="/" style="@if($active_menu!='')margin-left:50px; @endif"><img src=" {{ asset('assets/images/logo.png') }}" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/manageProduct">商品管理<span class="sr-only">(current)</span></a>
                </li>
                 <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                     インポート系
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/import/importAsin"><i class="fas fa-upload"></i> ー括インポート</a>
                        <a class="dropdown-item" href="/import/blacklist"><i class="fas fa-eye-slash"></i> 
                            ブラックリスト</a>
                        <a class="dropdown-item" href="/import/checkProduct"><i class="fas fa-desktop"></i> インポート履歴</a>
                    </div>
                    <!-- <div class="message-ul dropdown-menu dropdown-menu-right notification-dropdown show" x-placement="bottom-end" style="position: absolute; transform: translate3d(-114px, 36px, 0px); top: 0px; left: 0px; will-change: transform;">
                    sssss</div> -->
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                     注文系
                    </a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="/order/manageOrder"><i class="fas fa-shipping-fast"></i>
                        注文管理</a>
                    <!-- <a class="dropdown-item" href="blacklist.html">Black list</a>
                    <a class="dropdown-item" href="checkproduct.html">Check Product</a> -->
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="managestock.html">Qoo10系</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                     管理系
                    </a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="/manage/editShop"><i class="fas fa-shopping-cart"></i> ショップ情報</a>
                    <a class="dropdown-item" href="/manage/Analyze"><i class="fas fa-chart-bar"></i> PV分析</a>
                    <!-- <a class="dropdown-item" href="checkproduct.html">Check Product</a> -->
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/register">登録</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/login">ログイン</a>
                </li>
            </ul>
            
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->