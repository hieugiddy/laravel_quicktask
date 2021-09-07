@extends('master')
@section('title',__('Home'))

@section('content')

<a href="{{ route('task.them') }}" class="btn btn-success mb-3 mt-3">
    <i class="fa fa-plus"></i> {{__('Add Task')}}
</a>


<table class="table table-striped mt-4">
    <thead class="thead-inverse">
        <tr>
            <th>#</th>
            <th>{{__('Task Name')}}</th>
            <th>{{__('Create At')}}</th>
            <th>{{__('Update At')}}</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td scope="row" class="column">
                </td>
                <td class="column">
                </td>
                <td class="column">
                </td>
                <td class="column">
                </td>
                <td width="150px" class="column">
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
<script src="{{ asset('js/home.js') }}"></script>


@endsection
