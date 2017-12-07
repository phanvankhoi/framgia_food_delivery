@extends('admin.layouts.master')
@section('title')
    {{ trans('admin_category.List Category') }}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2> {{ trans('admin_category.List Category') }} </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">                    
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="{{ route('admin.category.create') }}" class="btn btn-primary">{{ trans('admin_category.create') }}</a>
                        </div>
                        <div class="col-sm-6">
                            <div id="datatable_filter" class="dataTables_filter">
                                <label>
                                    <input type="search" class="form-control input-sm" placeholder="{{ trans('admin_category.Search') }}" aria-controls="datatable">
                                </label>
                            </div>
                        </div>
                        
                    </div>                    
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>{{ trans('admin_category.name') }}</th>
                                <th>{{ trans('admin_category.status') }}</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        @if ($categories)
                            @foreach($categories as $category)
                                <tbody>
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->status }}</td>
                                        <td>
                                            {!! Form::open([
                                                'route' => ['admin.category.edit', $category['id']], 
                                                'method' => 'get', 
                                                'id' => 'form-edit'
                                            ]) !!}
                                            {!! Form::button('Edit', [
                                                'type'=>'submit',
                                                'class' => 'btn btn-warning fa fa-edit'
                                            ]) !!}
                                            {!! Form::close() !!}
                                        </td>
                                        <td>
                                            {!! Form::open([
                                                'route' => ['admin.category.destroy', $category['id']], 
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
                                </tbody>
                            @endforeach
                        @endif        
                    </table>
                    {!! $categories->render() !!}
                    @stack('scripts')
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    {{ Html::script('js/admin.js') }}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
@endpush
