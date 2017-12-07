@foreach($foods as $food)
    <tr>
        <td>{{ $food->name }}</td>
        <td><img src="{{ asset(config('setup.food_image') . $food['image']) }}" class="img-rounded" alt="none">></td>
        <td>{{ $food->discountFood->discount }}</td>
        <td>{{ $food->price }}</td>
        <td>{{ $food->status == 1 ? trans('admin_food.activate') : trans('admin_food.pending') }}</td>
        <td>{{ $food->description }}</td>
        <td>{{ $food->is_top == 1 ? trans('admin_food.yes') : trans('admin_food.no') }}</td>
        <td>{{ $food->category->name }}</td>
        <td>
            {!! Form::open([
                'route' => ['admin.food.edit', $food['id']], 
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
                'route' => ['admin.food.destroy', $food['id']], 
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
