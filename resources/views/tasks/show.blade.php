@extends('layouts.app')

@section('content')
    <div class="container mt-4" style="background-color: #f4f4f4; padding: 20px; border-radius: 10px;">
        <h2 class="mb-4">SHOW TASK</h2>

        <table class="table table-bordered">
            <tr>
                <th>Title</th>
                <td>{{ $task->title }}</td>
            </tr>
            <tr>
                <th>Due Date</th>
                <td>{{ $task->duedate }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ $task->detail }}</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>{{ $task->category->name }}</td>
            </tr>
        </table>

        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <a class="btn btn-primary" href="{{ route('tasks.index') }}">BACK</a>
            </div>
        </div>
    </div>
@endsection
