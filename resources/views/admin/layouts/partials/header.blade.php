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

        <div class="collapse navbar-collapse" id="navbarsExampleDefault" style="font-size:20px;"  >
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="/mypage" class="nav-link page-scroll @if($active_menu=='mypage')active-nav @endif">ユーザ管理<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/listing">連絡先管理</a>
                </li>
                
            </ul>
            
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->