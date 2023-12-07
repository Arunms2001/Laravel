@extends('layouts.app')

@section('content')
<html>
<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            color: #000; 
        }

        .container-fluid {
            height: auto;
            display: flex;
             /* /* align-items: center; */
            justify-content: center;  
            
            
        }

        .card {
            width: 100%;
            max-width: 400px;
            background-color:lightgrey;
        }
        
        

        
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">{{ __('Dashboard') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{ __('Welcome: ' . Auth::user()->name) }}
            </div>
        </div>
    </div>
</body>
</html>
@endsection
</html>
