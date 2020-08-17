@extends('index')

@section('page_title')
    Danh sách thành viên
@endsection

@section('main')
<div class="container">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong>{{ $message }}
        </div>
    @endif
    <table class="table table-hover table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $stt = 1 ?>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $stt }}</th>
                    <td>{{ $user->name }}</td>
                    <td>
                        @if ($user->gender == 1)
                            Male
                        @else
                            Femail
                        @endif
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->address }}</td>
                    <td class="d-flex d-inline">
                        <a href="{{ route('user.show', $user->id) }}"><button type="button" class="btn btn-info mr-2">Info</button></a>
                        <a href="{{ route('user.edit', $user->id) }}"><button type="button" class="btn btn-primary mr-2">Edit</button></a>
                        <form action="{{ route('user.destroy', $user ->id) }}" method="POST" class="delete-form float-right">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $stt++ ?>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
