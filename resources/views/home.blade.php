@extends('master')
@section('title','Task Manager')

@section('content')

<a href="{{ route('task.them') }}" class="btn btn-success mb-3 mt-3">
    <i class="fa fa-plus"></i> Thêm Task
</a>

<!--        
        <div class="alert alert-success" role="alert">
            <strong>Thành công</strong>
        </div>


        <div class="alert alert-danger" role="alert">
            <strong>Thất bại</strong>
        </div>
-->
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
            <tr>
                <td scope="row" style="vertical-align: middle;">
                </td>
                <td style="vertical-align: middle;">
                </td>
                <td style="vertical-align: middle;">
                </td>
                <td style="vertical-align: middle;">
                </td>
                <td width="150px" style="vertical-align: middle;">
                    <form action="" method="post">
                        <a href="" class="btn btn-light">
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
    </tbody>
</table>
<br/>

<br/>
<script>
    setTimeout(function(){
        $(".alert").css("display","none");
    },2000);
</script>


@endsection
