@extends('index')
@section('page_title')
    Thêm thành viên
@endsection

@section('main')
<div class="container d-flex flex-column justify-content-center">
    @if (count($errors)>0)
            <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <ul>
                @foreach ($errors ->all() as $err)
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
    <form class="col-6 m-auto" method="post" action="{{ url('user') }}" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="name" placeholder="Name" required>
            <div class="input-group-append">
                <select class="custom-select" name="gender" required>
                    <option value="1">Male</option>
                    <option value="0">Female</option>
                </select>
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text  pr-4" id="email">Email</span>
            </div>
            <input type="email" class="form-control" required name="email" aria-label="Default" aria-describedby="email">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text pr-4" id="phone">Phone</span>
            </div>
            <input type="number" class="form-control" required name="phone" aria-label="Default" aria-describedby="phone">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="address">Address</span>
            </div>
            <input type="text" class="form-control" required name="address" aria-label="Default" aria-describedby="address">
        </div>

        <div class="mb-5">
            <input type="file" name="avatar">
        </div>
        <div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
    </form>
</div>
@endsection
