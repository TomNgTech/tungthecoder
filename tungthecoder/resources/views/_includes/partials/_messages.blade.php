@if (Session::has('success'))
    
    <div class="notification is-success">
        <strong>Success: </strong> {{ Session::get('success') }}
    </div>
    
@endif 

@if (count($errors) > 0)
    
    <div class="notification is-danger">
        <strong>Errors: </strong>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    
@endif