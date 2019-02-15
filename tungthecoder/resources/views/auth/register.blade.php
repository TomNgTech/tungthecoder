@extends('layouts.app')

@section('content')

<div class="columns is-centered">
    <div class="column is-one-third-desktop is-half-tablet m-t-30">
        <div class="card">
            <div class="card-content">
                <h1 class="title has-text-centered">Register</h1>
                <div class="message is-primary has-text-centered">
                    <div class="message-body">
                        <p>This function is still under construction.</p>
                        <p>Please head to <a class="button is-rounded is-small is-outlined is-info" href="/login">Login Page</a> and login using:</p>
                        <p class="is-size-6">Email Address: guest</p>
                        <p class="is-size-6">Password: guest</p>
                    </div>
                </div>      

                
                <form action="{{ route('register') }}" method="POST" role="form">
                    {{ csrf_field() }}
                    
                    <div class="field">
                        <label for="name" class="label">Name:</label>
                        <p class="control">
                            <input class="input {{ $errors->has('name') ? 'is-danger' : '' }}" type="text" name="name" id="name" placeholder="Jane Doe" value="{{ old('name') }}" required/>
                        </p>
                        @if ($errors->has('name'))
                            <p class="help is-danger">{{ $errors->first('name') }}</p>
                        @endif
                        
                    </div>
                    
                    <div class="field">
                        <label for="email" class="label">Email Address:</label>
                        <p class="control">
                            <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="text" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" required/>
                        </p>
                        @if ($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @endif
                        
                    </div>

                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <label for="password" class="label">Password:</label>
                                <p class="control">
                                    <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" type="password" name="password" id="password" required/>
                                </p>
                                @if ($errors->has('password'))
                                <p class="help is-danger">{{ $errors->first('password') }}</p>
                                @endif
                    
                            </div>
                        </div>
                    
                        <div class="column">
                            <div class="field">
                                <label for="password_confirmation" class="label">Confirm Password:</label>
                                <p class="control">
                                    <input class="input {{ $errors->has('password_confirmation') ? 'is-danger' : '' }}" type="password" name="password_confirmation" id="password_confirmation" required/>
                                </p>
                                @if ($errors->has('password_confirmation'))
                                <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
                                @endif
                    
                            </div>
                        </div>
                    </div>
                    
                    

                    <button class="button is-primary is-outlined is-fullwidth m-t-35">Register</button>
                </form>
            </div>
        </div>
        
            <h5 class="has-text-centered m-t-15"><a href="{{ route('login') }}" class="has-text-grey-light">Already created an account? Login here!</a></h5>

    </div>
</div>

@endsection
