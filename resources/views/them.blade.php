@extends('master')
@section('title','Thêm Task')
@section('content')
<nav class="breadcrumb">
    <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
    <a class="breadcrumb-item" href="{{ route('home') }}">Task</a>
    <span class="breadcrumb-item active">Thêm Task</span>
</nav>
{{ Form::open(array('route' => 'task.them', 'method' => 'post')) }}
    {{ Form::label('TenTask', 'Nhập nội dung vào ô bên dưới') }}
    <div class="input-group mb-3">
        <input type="text" class="col-md-4 form-control mr-3" name="name">
        <button type="submit" class="btn btn-success">Thêm</button>
    </div>
    @error('name')
        <em>{{ $message }}</em>
    @enderror
{{ Form::close() }}

@endsection