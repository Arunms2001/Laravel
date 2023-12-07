@extends('layouts.app')

@section('content')
    <style>
        body {
            background-color: #f8f9fa; 
        }

        .container {
            margin-top: 20px; 
        }

        h2 {
            color: #007bff; 
        }

        .btn-success {
            background-color: #28a745; 
            border-color: #28a745; 
            color: #fff; 
        }

        .table {
            background-color: #fff; 
        }

        th, td {
            text-align: center; 
        }

        .btn-info, .btn-primary, .btn-danger {
            margin-right: 5px; 
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>TASK DETAILS</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('tasks.create') }}">CREATE NEW TASK</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>TITLE</th>
            <th>DESCRIPTION</th>
            <th>DUE DATE</th>
            <th>CATEGORY</th>
            <th width="280px">ACTION</th>
        </tr>
        @php $i=0; @endphp
        @foreach ($tasks as $task)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $task->title }}</td>
            <td>{{ $task->description }}</td>
             <td>{{ $task->duedate }}</td>
             <td>{{$task->category->name}}</td>
            <td>
                <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('tasks.show',$task->id) }}">SHOW</a>
    
                    <a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}">EDIT</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            </td>
        </tr>
        @endforeach
        </table>
    </div>
@endsection
