@if ($users)
    @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><img src="{{ asset(config('setup.user_avatar') . $user['avatar']) }}" width="60" height="60"></td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->role  }}</td>
            <td>
                {!! Form::open([
                    'route' => ['admin.user.edit', $user['id']], 
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
                    'route' => ['admin.user.destroy', $user['id']], 
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
