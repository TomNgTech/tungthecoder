@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="notification is-success">
            {{ session('status') }}
        </div>
    @endif
    
<div class="columns is-centered">
    <div class="column is-one-third-desktop is-half-tablet m-t-30">
        <div class="card">
            <div class="card-content">
                <h1 class="title has-text-centered is-tab">Forgot Password?</h1>

                <form action="{{ route('password.email') }}" method="POST" role="form">
                    {{ csrf_field() }}
                    
                    <div class="field">
                        <label for="email" class="label">Email Address:</label>
                        <p class="control">
                            <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="text" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" required/>
                        </p>
                        @if ($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @endif
                        
                    </div>

                    <button class="button is-primary is-outlined is-fullwidth m-t-35">Get Reset Link</button>
                </form>
            </div>
        </div>
        
            <h5 class="has-text-centered m-t-15"><a href="{{ route('login') }}" class="has-text-grey-light"><i class="fa fa-caret-left m-r-10"></i> Return to Login Page</a></h5>

    </div>
</div>

@endsection
