@extends('layouts.app')
@section('content')
<style>
    body {
        background-color: #f4f4f4; 
    }

    .container {
        background-color: #fff; 
        border-radius: 8px; 
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        margin-top: 20px;
        padding: 20px; 
    }

    h2 {
        color: #333; 
    }

    
</style>

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>EDIT TASK</h2>
            </div>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" value="{{$task->title}}" class="form-control" placeholder="title">
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            <textarea class="form-control" style="150px" name="description" placeholder="Detail">{{ $task->description }}</textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Due Date:</strong>
            <input type="date" class="form-control" value="{{$task->duedate}}"  name="duedate">
        </div>
    </div>
    <div class="gorm-group">
        <label for="category_id">Category:</label>
        <select name="category_id" id="category_id" class="form-control">
            @foreach($categories as $category)
            <option value="{{$category->id}}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{$category->name}}</OPTion>
                            @endforeach
        </select>
    </div>

    <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <div class="form-group">
                        <a class="btn btn-primary" href="{{ route('tasks.index') }}">BACK</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection