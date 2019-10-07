@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="z-depth-3 y-depth-3 x-depth-3 lighten-4 row" >
            <div class="section">
                <h3>{{ __('Login') }}</h3>
                
                <div class="section">
                    <form method="POST" action="{{ route('login') }}" class="col s12">
                        @csrf
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="" id="email" type="email" class="validate" name="email" autofocus>
                                <label for="email">{{ __('E-Mail Address') }}</label>
                            </div>                           
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="text" name="password" class="validate">
                                <label for="password">{{ __('Password') }}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <label>
                                    <input type="checkbox" class="filled-in" checked="checked" name="remember" />
                                    <span> {{ __('Remember Me') }}</span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s8">
                                <button type="submit" class="btn waves-effect waves-light" name="action">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn waves-effect waves-light" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>        
    </div>
</div>
@endsection
