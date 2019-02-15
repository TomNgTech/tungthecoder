@extends('layouts.app')

@section('content')
<div class="container m-t-25 m-b-25">

    @if (Session::has('successContact'))
        <div class="notification is-success">
             <strong>Status: </strong> {!! Session::get('successContact') !!}
        </div>
    @endif 

</div>

<div class="columns is-centered">
    <div class="column is-one-third-desktop is-half-tablet m-t-30">
        <div class="card">
            <div class="card-content">
                <h1 class="title has-text-centered is-tab">Contact Me</h1>
                <hr>
                
                <form action="{{ route('contact') }}" method="POST" role="form">
                    {{ csrf_field() }}
                    <div class="field">
                        <label for="name" class="label">Full Name:</label>
                        <p class="control">
                            <input class="input {{ $errors->has('name') ? 'is-danger' : '' }}" type="text" name="name" id="name" placeholder="Jane Doe">
                        </p>
                        @if ($errors->has('name'))
                            <p class="help is-danger">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
        
                    <div class="field">
                        <label for="subject" class="label">Email Subject:</label>
                        <p class="control">
                            <input class="input {{ $errors->has('subject') ? 'is-danger' : '' }}" type="text" name="subject" id="subject" placeholder="Subject Title">
                        </p>
                        @if ($errors->has('subject'))
                            <p class="help is-danger">{{ $errors->first('subject') }}</p>
                        @endif
                    </div>
        
                    <div class="field">
                        <label for="message" class="label">Message:</label>
                        <p class="control">
                            <textarea class="textarea {{ $errors->has('message') ? 'is-danger' : '' }}" id="message" name="message" placeholder="Type your message here..."></textarea>
                        </p>
                        @if ($errors->has('message'))
                            <p class="help is-danger">{{ $errors->first('message') }}</p>
                        @endif
                    </div>
                    
                    <div class="columns">
                        <div class="field column">
                            <label for="email" class="label">Email Address:</label>
                            <p class="control">
                                <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="text" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" />
                            </p>
                            @if ($errors->has('email'))
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        
                        <div class="field column">
                            <label for="email_confirmation" class="label">Confirm Email Address:</label>
                            <p class="control">
                                <input class="input {{ $errors->has('email_confirmation') ? 'is-danger' : '' }}" type="text" name="email_confirmation" id="email_confirmation" placeholder="name@example.com" value="{{ old('email_confirmation') }}" />
                            </p>
                            @if ($errors->has('email_confirmation'))
                                <p class="help is-danger">{{ $errors->first('email_confirmation') }}</p>
                            @endif

                        </div>
                    </div>
        
                    <input type="submit" value="Send Message" class="button is-primary is-outlined is-fullwidth m-t-5">
                </form>
            </div>
        </div>    
    </div>
</div>
@endsection