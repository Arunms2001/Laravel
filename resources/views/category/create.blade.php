@extends('layouts.app')

@section('content')
<html>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }

        .btn-secondary:hover {
            background-color: #545b62;
        }

        .btn-container {
            text-align: center; /* Center align the buttons */
            margin-top: 20px;
        }
    </style>
    <head>
    </head>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Add New Category</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('category.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Category:</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter category">
                            </div>
                            <div class="btn-container">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a class="btn btn-primary" href="{{ route('category.index') }}">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>
@endsection
