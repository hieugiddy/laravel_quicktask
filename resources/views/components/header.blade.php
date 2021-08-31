<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="#">TASK MANAGER</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Danh sách Task</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('task.them') }}">Thêm Task</a>
            </li>
        </ul>
    </div>
</nav>