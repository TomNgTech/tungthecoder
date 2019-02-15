@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column has-text-centered">
        <h1 class="title">View Permission Details</h1>
      </div> <!-- end of column -->

      <div class="column has-text-centered">
        <a href="{{route('permissions.edit', $permission->id)}}" class="button is-primary"><i class="fa fa-edit m-r-10"></i> Edit Permission</a>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
      <div class="column">
        <div class="box">
          <article class="media">
            <div class="media-content">
              <div class="content">
                <div class="field">
                    <label for="name" class="label">Permission Display Name:</label>
                    <pre><strong>{{$permission->display_name}}</strong></pre>
                </div>
                
                <div class="field">
                    <label for="slugName" class="label">Permission Slug Name:</label>
                    <pre><small>{{$permission->name}}</small></pre>
                </div>
                
                <div class="field">
                    <label for="description" class="label">Permission Description:</label>
                    <pre><small>{{$permission->description}}</small></pre>
                </div>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
@endsection