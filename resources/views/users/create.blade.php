@extends('users.layouts')

@section('content')

    <form action="{{route('users.store')}}" method="POST" >
        @csrf

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name ="pass">
        </div>
        <input type="password" name="password_confirmation" />
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
