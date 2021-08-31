@extends('master')
@section('title','Thêm Task')
@section('content')
<nav class="breadcrumb">
    <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
    <a class="breadcrumb-item" href="{{ route('home') }}">Task</a>
    <span class="breadcrumb-item active">Thêm Task</span>
</nav>
<form action="{{ route('task.them') }}" method="post">
    @csrf
    @method('post')
    <label for="">Nhập nội dung vào ô bên dưới</label>
    <div class="input-group mb-3">
        <input type="text" class="col-md-4 form-control mr-3" name="name">
        <button type="submit" class="btn btn-success">Thêm</button>
    </div>
    @error('name')
        <em>{{ $message }}</em>
    @enderror
</form>

@endsection