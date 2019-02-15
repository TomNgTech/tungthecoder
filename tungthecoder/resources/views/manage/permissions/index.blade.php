@extends('layouts.manage')

@section('content')
<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column has-text-centered">
            <h1 class="title">Manage Permissions</h1>
        </div>
        <div class="column has-text-centered">
            <a href="{{route('permissions.create')}}" class="button is-primary"><i class="fa fa-user-plus m-r-10"></i> Create New Permission</a>
        </div>
    </div>
    <hr class="m-t-0">

    <div class="columns is-centered">
        <div class="card table__wrapper">
            <div class="card-content">
                <table class="table is-narrow">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($permissions as $permission)
                        <tr>
                            <th>{{$permission->display_name}}</th>
                            <td>{{$permission->name}}</td>
                            <td>{{$permission->description}}</td>
                            <td class="has-text-right"><a class="button is-outlined is-info m-r-5" href="{{route('permissions.show', $permission->id)}}">View</a><a class="button is-outlined is-danger" href="{{route('permissions.edit', $permission->id)}}">Edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection