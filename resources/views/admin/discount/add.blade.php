@extends('admin.layouts.master')
@section('title')
    {{ trans('admin_discount.Add Discount') }}
@endsection
@section('content')
    <section class="content-header">
        <h1>{{ trans('admin_discount.add discount') }}</h1>
        <div class="">

            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if (session()->has('fail'))
                <div class="alert alert-danger">
                {{ session()->get('fail') }}
                </div>
            @endif
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            @if (count($errors))      
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach   
                    </ul>
                </div>    
            @endif
            
            {!! Form::open(['route' => 'admin.discount.store', 'method' => 'post', 'enctype' => 'multipart/form-data'], ['class' => 'form-group'])  !!}
                <table class="table">
                    <tr>
                        <td>{!! Form::label('discount', trans('admin_discount.discount')) !!}</td>
                        <td>{!! Form::text('discount', $value = '', ['class' => 'form-control']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('start_date', trans('admin_discount.start date')) !!}</td>
                        <td>{!! Form::date('start_date', $value = '', ['class'  => 'form-control'], 'mm/dd/YY') !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('end_date', trans('admin_discount.end date')) !!}</td>
                        <td>{!! Form::date('end_date', $value = '', ['class'  => 'form-control'], 'mm/dd/YY') !!}</td>
                    </tr>
                </table>
                {!! Form::submit(trans('admin_discount.add'), ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </section>
@endsection
