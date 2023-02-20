<header id="header">
    <div class="container">
        <div class="header-flex">
            <div class="header-logo">LIBRARY</div>
            @auth
                <div class="header-btn">
                    <a href="#" class="add-book">Добавить книгу</a>
                </div>
            @endauth
            <div class="header-sign">
                @auth
                    <a href="#" class="proifle-btn">Профиль</a>
                    <a href="{{route('logout')}}" class="logout">Выход</a>
                @endauth
                @guest
                    <a href="{{route('signin')}}" class="sign-in">Sign-in</a>
                    <a href="{{route('signup')}}" class="sign-up">Sign-up</a>
                @endguest
            </div>
        </div>
    </div>
</header>
