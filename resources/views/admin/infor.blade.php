@extends('index')

@section('page_title')
    Thông Tin Chi Tiết
@endsection
@section('main')
<div class="container d-flex justify-content-center flex-column">
    <table class="table table-bordered">
        <tr>
            <td><h4>ID</h4></td>
            <td class="text-center"><h3>{{ $user->id }}</h3></td>
            <td rowspan="6" class="w-25">
                <img src="{{ url('storage/images/', $user->img) }}" class="img-thumbnail">
            </td>
        </tr>
        <tr>
            <td><h4>Name</h4></td>
            <td><h5>{{ $user->name }}</h5></td>
        </tr>
        <tr>
            <td><h4>Gender</h4></td>
            <td>
                <h5>
                    @if ($user->gender == 1)
                        Male
                    @else
                        Female
                    @endif
                </h5>
            </td>
        </tr>
        <tr>
            <td><h4>Email</h4></td>
            <td><h5>{{ $user->email }}</h5></td>
        </tr>
        <tr>
            <td><h4>Phone</h4></td>
            <td><h5>{{ $user->phone }}</h5></td>
        </tr>
        <tr>
            <td><h4>Address</h4></td>
            <td><h5>{{ $user->address }}</h5></td>
        </tr>
    </table>
</div>
@endsection
