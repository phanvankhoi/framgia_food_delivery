@extends('admin.layouts.master')
@section('title')
    {{ trans('admin_order.Order detail') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2> {{ trans('admin_order.Order detail') }} </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                
                <div class="x_content">                    
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                            	<th>{{ trans('admin_order.food') }}</th>
                                <th>{{ trans('admin_order.quantity') }}</th>
                                <th>{{ trans('admin_order.price') }}</th>
                                <th></th>
                                <th></th>                               
                            </tr>
                        </thead>                        
                        <tbody>
                            @if ($orders)
                                @foreach($orders->foodOrders as $order)
                                    <tr>                                        
                                        <td>{{ $order->food->name }}</td> 
                                        <td>{{ $order->quantity }}</td>
                                        <td>{{ number_format($order->price) }}đ</td> 
                                        <td>
                                            {!! Form::open([
                                                'route' => ['admin.order.update', $orders['id']], 
                                                'method' => 'PUT', 
                                                'enctype' => 'multipart/form-data',
                                                'class' => 'form-group'
                                            ]) !!}
                                            {!! Form::select('status', [
                                                '0' => trans('admin_order.pending'),
                                                '1' => trans('admin_order.confirmed'),
                                                '2' => trans('admin_order.shipped'),
                                                '3' => trans('admin_order.done'),
                                                '4' => trans('admin_order.canceled'),
                                            ], $value = $orders['status'])
                                            !!}
                                            {!! Form::button('Update', [
                                                'type'=>'submit',
                                                'class' => 'btn btn-success fa fa-check'
                                            ]) !!}
                                            {!! Form::close() !!}                    
                                        </td>
                                        <td>
                                            {!! Form::open([
                                                'route' => ['admin.order.destroy', $orders->id], 
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
                </div>
                <div>
                </div>
            </div>
        </div>
    </div>
@endsection
