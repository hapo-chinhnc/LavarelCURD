@extends('index')
@section('page_title')
    Chỉnh sửa thành viên
@endsection

@section('main')
<div class="container flex-column">
    @if (count($errors) > 0)
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <div class="alert alert-danger alert-dismissible fade show">
            <ul>
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div> 
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success! - </strong>{{ $message }}
        </div>
    @endif
    <form action="{{ route('user.update', $user->id) }}" method="POST" class="col-6 offset-3 d-flex justify-content-center flex-column">
        @csrf
        {{ method_field('PATCH') }}
        <input class="form-control mb-4" type="text" placeholder="Name" name="name" value="{{ $user->name }}">
        <input class="form-control mb-4" type="" placeholder="Gender" name="gender" value="{{ $user->gender }}">
        <input class="form-control mb-4" type="text" placeholder="Email" name="email" value="{{ $user->email }}">
        <input class="form-control mb-4" type="text" placeholder="Phone" name="phone" value="{{ $user->phone }}">
        <input class="form-control mb-4" type="text" placeholder="Address" name="address" value="{{ $user->address }}">
        <input type="submit" value="Submit" class="btn btn-outline-success m-auto" onclick="return confirm('Are you sure you want to delete this item?');">
    </form>
</div>
@endsection
