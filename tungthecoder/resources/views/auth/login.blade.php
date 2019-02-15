@extends('layouts.app')

@section('content')

<div class="columns is-centered">
    <div class="column is-one-third-desktop is-half-tablet m-t-30">
        <div class="card">
            <div class="card-content">
                <h1 class="title has-text-centered">Log In</h1>
                <div class="message is-primary has-text-centered">
                    <div class="message-body">
                        <p>You can also login using credential guest/guest to visit my custom-built CMS Admin Panel.</p>
                        <p class="is-size-6">*Some functions will be DENIED for guest account!!!*</p>
                        <p class="is-size-6"><a class="button is-rounded is-small is-outlined is-info" href="/contact">Contact Me</a> 
                        if you're a Recruiter and need full access!</p>
                    </div>
                </div>                
                
                <form action="{{ route('login') }}" method="POST" role="form">
                    {{ csrf_field() }}
                    
                    <div class="field">
                        <label for="email" class="label">Email Address:</label>
                        <p class="control">
                            <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="text" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" />
                        </p>
                        @if ($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @endif
                        
                    </div>

                    <div class="field">
                        <label for="password" class="label">Password:</label>
                        <p class="control">
                            <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" type="password" name="password" id="password" />
                        </p>
                        @if ($errors->has('password'))
                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                        @endif
                        
                    </div>
                    
                    <div class="field">
                        <b-checkbox name="remember" class="m-t-10" type="is-primary">Remember Me</b-checkbox>
                    </div>
                    
                    <button class="button is-primary is-outlined is-fullwidth m-t-15">Log In</button>
                </form>
            </div>
        </div>
        
            <h5 class="has-text-centered m-t-15"><a href="{{ route('password.request') }}" class="has-text-grey-light">Forgot Your Password?</a></h5>

    </div>
</div>

@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        checkbox: false,
      }
    });
  </script>
@endsection