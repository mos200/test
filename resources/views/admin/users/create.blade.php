@extends('layouts.admin')

@section('content')
    <h1>Create User</h1>
    {!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store', 'files'=>true]) !!}

    @include('includes.form_error')

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name',null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email',null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id', 'Role:') !!}
        {!! Form::select('role_id', [''=>'Choose Options'] + $roles, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('is_active', 'Status:') !!}
        {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'),0, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id',null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

    {{--<div class="col-md-12">--}}
        {{--<div class="panel panel-default">--}}
            {{--<div class="panel-heading">Register</div>--}}

            {{--<div class="panel-body">--}}
                {{--<form class="form-horizontal" method="POST" action="{{ route('register') }}">--}}
                    {{--{{ csrf_field() }}--}}

                    {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                        {{--<label for="name" class="col-md-4 control-label">Name</label>--}}

                        {{--<div class="col-md-6">--}}
                            {{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

                            {{--@if ($errors->has('name'))--}}
                                {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                            {{--@endif--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                        {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                        {{--<div class="col-md-6">--}}
                            {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

                            {{--@if ($errors->has('email'))--}}
                                {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                            {{--@endif--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                        {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                        {{--<div class="col-md-6">--}}
                            {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                            {{--@if ($errors->has('password'))--}}
                                {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                            {{--@endif--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

                        {{--<div class="col-md-6">--}}
                            {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<div class="col-md-6 col-md-offset-4">--}}
                            {{--<button type="submit" class="btn btn-primary">--}}
                                {{--Register--}}
                            {{--</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

@endsection










