@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div><br>
            <div class="text-center">
                <p>This button leads to User information page. <a class="btn btn-outline-secondary"  href="{{url('/userinformations')}}"> User Information</a></p>
                <p>This button leads to User information page. <a class="btn btn-outline-secondary"  href="{{url('/customers')}}">Customers</a></p>
                <p>This button leads to User information page. <a class="btn btn-outline-secondary"  href="{{url('/employees')}}">Employees</a></p>
                <p>This button leads to User information page. <a class="btn btn-outline-secondary"  href="{{url('/managers')}}"> Managers</a></p>
                <p>This button leads to User information page. <a class="btn btn-outline-secondary"  href="{{url('/departments')}}"> Departments</a></p>
                <p>This button leads to User information page. <a class="btn btn-outline-secondary"  href="{{url('/addresses')}}"> Addresses</a></p>
            </div>
            <form action="{{ route('logout') }}" method="POST" align="right">
                @csrf
                <input type="submit" class="btn btn-danger" value="Logout" name="logout">
            </form>
        </div>
    </div>
</div>
@endsection
