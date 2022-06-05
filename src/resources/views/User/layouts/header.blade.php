@section('header')
<header>
    <div class="header-area">
        <div class="left_header">
            <a href="{{ route('home.top') }}" class="header_block">
                <img src="/image/login/22493487.jpg" class="header_img">
                <p class="header_title">はじめてのあかちゃん</p>
            </a>
            <div class="logo_center">
                <img src="/image/login/22757059.jpg" class="header_img">
                <img src="/image/login/22757059.jpg" class="header_img">
                <img src="/image/login/22757059.jpg" class="header_img">
                <img src="/image/login/22757059.jpg" class="header_img">
                <img src="/image/login/22757059.jpg" class="header_img">
                <img src="/image/login/22754775.jpg" class="header_img">
                <img src="/image/login/22757059.jpg" class="header_img">
                <img src="/image/login/22757059.jpg" class="header_img">
                <img src="/image/login/22757059.jpg" class="header_img">
                <img src="/image/login/22757059.jpg" class="header_img">
                <img src="/image/login/22757059.jpg" class="header_img">
            </div>
        </div>
        <div class="right_header">
            <div class="text-right">
                @auth
                {{-- 認証済み --}}
                    <div class="right_btn_position">
                        <div class="btn">
                            <a href="#" class="btn btn--blue">
                                マイページ
                            </a>
                        </div>
                        <div class="btn">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                                <button type="submit" class="btn btn--orange">
                                    ログアウト
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    {{-- 未認証 --}}
                    <div class="right_btn_position">
                        <div class="btn">
                            <a href="{{ route('register.form') }}" class="btn btn--yellow">
                                新規会員登録
                            </a>
                        </div>
                        <div class="btn">
                            <a href="{{ route('login.form') }}" class="btn btn--blue">
                                ログイン
                            </a>
                        </div>
                    </div>
                @endauth
            </div>


        </div>
    </div>
    <div class="header_bottom">
            <ul>
                <li><a href="">メニュー<i class="fas fa-home"></i></a></li>
                <li><a href="">ホーム<i class="fas fa-home"></i></a></li>
                <li><a href="">はじめてのあかちゃんとは？</a></li>
                <li><a href="">コラム<i class="fas fa-book-open"></i></a></li>
                <li><a href="">通販サイト<i class="fas fa-shopping-cart"></i></a></li>
                <li><a href="">サイトマップ<i class="fas fa-map-pin"></i></a></li>
                <li><a href="">ヘルプ・お問合せ<i class="fas fa-info-circle"></i></a></li>
            </ul>
        </div>
</header>
@endsection
