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
                            </tr>
                        </thead>                        
                        <tbody>
                            @if ($orders)
                                @foreach($orders->foodOrders as $detailOrder)
                                    <tr>
                                        <td>{{ $detailOrder->food->name }}</td> 
                                        <td>{{ $detailOrder->quantity }}</td>
                                        <td>{{ number_format($detailOrder->price) }}đ</td>                                
                                    </tr>                             
                                @endforeach
                            @endif
                        </tbody>        
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
