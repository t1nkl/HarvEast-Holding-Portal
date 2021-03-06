<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"> 
<body>
    <div class="wrapper">
        <div class="">
            <main class="login main_column">
                <section class="loginSection news_column">
                    <div class="loginForm_logo">
                        <!-- <div class="logo_img"></div> -->
                        <img src="/elements-img/logo/harveast-logo-big.svg" alt="Logo">
                    </div>
                    <div class="loginForm_wrap">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>Email или пароль не верны</strong>
                            </span>
                        @endif
                            <form class="loginForm" role="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}
                                <input id="email" type="email" class="login_item auth-input" name="email" value="{{ old('email') }}" placeholder="E-mail" required autofocus>
                                <input id="password" type="password" class="login_item auth-input" name="password" placeholder="Пароль" required>
                                
                                <div class="loginForm_checkbox">
                                    <!-- @foreach(App\User::whereIn('role_id', [1,3,4,6])->get() as $user)
                {{$user->role->display_name}} {{$user->email}}  - qwerty<br>
                @endforeach -->
                                    <input class="checkbox_item" id="id" type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> 
                                    <label class="order_checkbox" for="id">Запомнить меня на этом компьютере</label>
                                </div>
                                <div>
                                    <button type="submit" class="auth-button btn_submitLogin">
                                        Отправить
                                    </button>
                                </div>
                                <a class="readMore_button btn btn-link login_link" href="{{ url('/password/reset') }}">
                                    Забыли пароль?
                                </a>
                            </form>                
                        </div>                    
                </section>
            </main>
            
        </div>
        
    </div>
    
</body>

