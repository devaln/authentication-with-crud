@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="text-center bg-dark text-danger col-lg-12">Create User : </h1>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> something we are problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('userinformations.store') }}" method="POST">
        <legend align="left">Fill required detail below :-</legend>
        @csrf
        <div align="center">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>First Name :</strong>
                        <input type="text" name="first_name" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Middle Name :</strong>
                        <input type="text" name="middle_name" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Last Name :</strong>
                        <input type="text" name="last_name" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Contact :</strong>
                        <input type="integer" name="contact" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Birth Date :</strong>
                        <input type="date" name="date_of_birth" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gender :</strong>
                        <input type="radio" name="gender" value="Male" placeholder="">&nbsp;Male&nbsp;&nbsp;
                        <input type="radio" name="gender" value="Male" placeholder="">&nbsp;Female&nbsp;&nbsp;
                        <input type="radio" name="gender" value="Male" placeholder="">&nbsp;Other&nbsp;&nbsp;
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PAN Card No :</strong>
                        <input type="integer" name="pan_card_number" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Adhaar Card Number :</strong>
                        <input type="integer" name="adhaar_card_number" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Maritial Status :</strong>
                        <input type="radio" name="maritial_status" value="Male">&nbsp;Male&nbsp;&nbsp;
                        <input type="radio" name="maritial_status" value="female">&nbsp;Female&nbsp;&nbsp;
                        <input type="radio" name="maritial_status" value="Other">&nbsp;Other&nbsp;&nbsp;
                    </div>
                </div>
                <div class="col-xs-12 col-lg-12 col-md-12 text-center">
                    <a class="btn btn-primary" href="{{ route('userinformations.index') }}"> Back</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection