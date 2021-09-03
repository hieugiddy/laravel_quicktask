@extends('master')
@section('title','Chỉnh sửa Task')

@section('content')
<nav class="breadcrumb">
    <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
    <a class="breadcrumb-item" href="{{ route('home') }}">Task</a>
    <span class="breadcrumb-item active">Chỉnh sửa Task</span>
</nav>
<form action="{{ route('task.sua',['id'=>$data->id]) }}" method="post">
    @csrf
    @method('put')
    <label for="">Nhập nội dung vào ô bên dưới</label>
    <div class="input-group mb-3">
        <input type="text" class="col-md-4 form-control mr-3" value="{{ $data->name }}" name="name">
        <button type="submit" class="btn btn-success">Lưu</button>
    </div>
    @error('name')
        <em>{{ $message }}</em>
    @enderror
</form>
@endsection