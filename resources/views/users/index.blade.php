@extends('users.layouts')

@section('content')

    <table class="table">
        <thead>
        <tr>

            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">created_at</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>

            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>

        </tr>
        @endforeach

        </tbody>
    </table>

@endsection
