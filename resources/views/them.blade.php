<nav class="breadcrumb">
    <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
    <a class="breadcrumb-item" href="{{ route('home') }}">Task</a>
    <span class="breadcrumb-item active">Thêm Task</span>
</nav>
<form method="post">
    <label for="">Nhập nội dung vào ô bên dưới</label>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">#</span>
        </div>
        <input type="text" class="col-md-4 form-control mr-3">
        <button type="submit" class="btn btn-success">Thêm</button>
    </div>
</form>