@extends('admin.layouts.master')
@section('title')
    {{ trans('Edit') }}
@endsection

@section('content')
    <section class="content-header">
        <h1>{{ trans('admin_user.edit user') }}</h1>
        <div class="">

            @if (count($errors))      
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach   
                    </ul>
                </div>    
            @endif
            
            {!! Form::open(['route' => [
                'admin.user.update', $users['id']], 
                'method' => 'PUT', 'enctype' => 'multipart/form-data'],
                ['class' => 'form-group'
                ]) !!}
            <table class="table">
                <tr>
                    <td>{!! Form::label('name', trans('admin_user.name')) !!}</td>
                    <td>{!! Form::text('name', $value = $users['name'], ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('email', trans('admin_user.email')) !!}</td>
                    <td>{!! Form::text('email', $value = $users['email'], ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('password', trans('admin_user.password')) !!}</td>
                    <td>{!! Form::password('password', ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('password_confirmation', trans('admin_user.confirm password')) !!}</td>
                    <td>{!! Form::password('password_confirmation',  ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('address', trans('admin_user.address')) !!}</td>
                    <td>{!! Form::text('address', $value = $users['address'], ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('phone', trans('admin_user.phone')) !!}</td>
                    <td>{!! Form::text('phone', $value = $users['phone'], ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    
                    <td>{!! Form::label('avatar', trans('admin_user.avatar')) !!}</td>
                    <td><img src="{{asset( $users->avatar)}}" width="60" height="60">
                        {!! Form::file('avatar', $value = '') !!}
                    </td>
                </tr>
                <tr>
                    <td>{!! Form::label('role', trans('admin_user.role')) !!}</td>
                    <td>{!! Form::select('role',  [
                            'admin' => trans('admin_user.admin'),
                            'customer' => trans('admin_user.customer'),
                        ],
                        $value = $users['role']) !!}</td>
                </tr>
            </table>
            {!! Form::submit(trans('admin_user.update'), ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </section>
@endsection
