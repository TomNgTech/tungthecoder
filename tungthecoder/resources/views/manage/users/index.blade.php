@extends('layouts.manage')

@section('content')
<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column has-text-centered">
            <h1 class="title">Manage Users</h1>
        </div>

        <div class="column has-text-centered">
            <a href="{{ route('users.create') }}" class="button is-primary"><i class="fas fa-user-plus m-r-10"></i>Create New User</a>
        </div>
    </div>

    <hr>

    <div class="columns is-centered">
        <div class="card table__wrapper">
            <div class="card-content">
                <table class="table is-narrow">
                    <thead>
                        <tr>
                            <th>
                                Id
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Date Created
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <th>
                                {{$user->id}}
                            </th>
                            <td>
                                {{$user->name}}
                            </td>
                            <td>
                                {{$user->email}}
                            </td>
                            <td>
                                {{$user->created_at->toFormattedDateString()}}
                            </td>
                            <td class="has-text-right">
                                <a class="button is-info is-outlined m-r-5" href="{{route('users.show', $user->id)}}">View</a><a class="button is-danger is-outlined" href="{{route('users.edit', $user->id)}}">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$users->links()}}
            </div>
        </div>
    </div>
</div>

@endsection