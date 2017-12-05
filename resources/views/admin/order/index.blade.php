@extends('admin.layouts.master')
@section('title')
    {{ trans('admin_order.List order') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2> {{ trans('admin_order.List order') }} </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                @include('admin.layouts.common')

                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <div id="datatable_filter" class="dataTables_filter">
                                <label>
                                    <input type="search" class="form-control input-sm" placeholder="{{ trans('admin_order.Search') }}" aria-controls="datatable">
                                </label>
                            </div>
                        </div>
                    </div>                    
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>{{ trans('admin_order.name') }}</th>
                                <th>{{ trans('admin_order.email') }}</th>
                                <th>{{ trans('admin_order.total price (vnd)') }}</th>
                                <th>{{ trans('admin_order.status') }}</th>
                                <th>{{ trans('admin_order.description') }}</th>
                                <th>{{ trans('admin_order.create date') }}</th>
                                <th>{{ trans('admin_order.update date') }}</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>                        
                        <tbody>
                            @if ($orders)
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->user->name }}</td>
                                        <td>{{ $order->user->email }}</td>
                                        <td>{{ $order->total_price }}</td>
                                        <td>
                                            {!! Form::open([
                                                'route' => ['admin.order.update', $order['id']], 
                                                'method' => 'PUT', 
                                                'enctype' => 'multipart/form-data',
                                                'class' => 'form-group'
                                            ]) !!}
                                            {!! Form::select('status', [
                                                '0' => trans('admin_order.pending'),
                                                '1' => trans('admin_order.canceled'),
                                                '2' => trans('admin_order.shipped'),
                                                '3' => trans('admin_order.expired'),
                                            ], $value = $order['status'])
                                            !!}
                                            {!! Form::button('Update', [
                                                'type'=>'submit',
                                                'class' => 'btn btn-success fa fa-check'
                                            ]) !!}
                                            {!! Form::close() !!}
                                        </td>
                                        <td>{{ $order->description }}</td>
                                        <td>{{ $order->created_at }}</td>
                                        <td>{{ $order->updated_at }}</td>
                                        <td>
                                            {!! Form::open([
                                                'route' => ['admin.order.detailOrder', $order->id], 
                                                'method' => 'get', 
                                                'id' => 'form-edit'
                                            ]) !!}
                                            {!! Form::button('Detail', [
                                                'type'=>'submit',
                                                'class' => 'btn btn-primary fa fa-info-circle'
                                            ]) !!}
                                            {!! Form::close() !!}
                                        </td>
                                        <td>
                                            {!! Form::open([
                                                'route' => ['admin.order.destroy', $order->id], 
                                                'method' => 'delete', 
                                                'id' => 'form-delete'
                                            ]) !!}
                                            {!! Form::button('Delete', [
                                                'type'=>'submit',
                                                'class' => 'btn btn-danger fa fa-trash'
                                            ]) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>                             
                                @endforeach
                            @endif
                        </tbody>        
                    </table>
                    {{ $orders->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
