@extends('layouts.app')

@section('content')
    <div class="container mt-5" style="background-color: #f8f9fa; padding: 20px; border-radius: 10px;">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="pull-left">
                    <h2>CATEGORIES</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('category.create') }}">Create new Category</a>
                </div>
            </div>
        </div>

        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No.</th>
                <th>Name</th>
            </tr>
            @php $i=0; @endphp
            @foreach($categories as $category)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $category->name }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
