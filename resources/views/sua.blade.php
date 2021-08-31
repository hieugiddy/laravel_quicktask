@extends('master')
@section('title','Sua Task')

@section('content')
<nav class="breadcrumb">
    <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
    <a class="breadcrumb-item" href="{{ route('home') }}">Task</a>
    <span class="breadcrumb-item active">Chỉnh sửa Task</span>
</nav>
<form method="post">
    <input type="hidden" name="ID" value=""/>
    
    <label for="">Nhập nội dung vào ô bên dưới</label>
    <div class="input-group mb-3">
        <input type="text" class="col-md-4 form-control mr-3" value="">
        <button type="submit" class="btn btn-success">Lưu</button>
    </div>
</form>
</form>
@endsection
