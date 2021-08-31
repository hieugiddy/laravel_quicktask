@extends('master')
@section('title','Task Manager')

@section('content')

<a href="{{ route('task.them') }}" class="btn btn-success mb-3 mt-3">
    <i class="fa fa-plus"></i> Thêm Task
</a>

@php
    if (session('message'))
    {
      echo '<div class="alert alert-success" role="alert">
                <strong>Thành công</strong>
            </div>';
    }
    if (session('error'))
    {
      echo '<div class="alert alert-danger" role="alert">
                <strong>Thất bại</strong>
            </div>';
    }
@endphp

<table class="table table-striped mt-4">
    <thead class="thead-inverse">
        <tr>
            <th>#</th>
            <th>Task</th>
            <th>Tạo ngày</th>
            <th>Sửa đổi lần cuối</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
            <tr>
                <td scope="row" style="vertical-align: middle;">
                    {{ $item->id }}
                </td>
                <td style="vertical-align: middle;">
                    {{ $item->name }}
                </td>
                <td style="vertical-align: middle;">
                    {{ $item->created_at }}
                </td>
                <td style="vertical-align: middle;">
                    {{ $item->updated_at }}
                </td>
                <td width="150px" style="vertical-align: middle;">
                    <form action="{{ route('task.xoa',['id'=>$item->id]) }}" method="post">
                        <a href="{{ route('task.sua',['id'=>$item->id]) }}" 
                        class="btn btn-light">
                            <i class="fa fa-edit"></i>
                        </a>

                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-light">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<br/>
{{ $data->links() }}
<br/>
<script>
    setTimeout(function(){
        $(".alert").css("display","none");
    },2000);
</script>

@endsection