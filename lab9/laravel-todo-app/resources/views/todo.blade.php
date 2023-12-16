<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="antialiased">
<div class="row justify-content-center mt-5">
    <div class="col-auto">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
        @endif
        @if($errors->any())
            @foreach($errors->all() as $error)
                <dib class="alert alert-danger">
                    {{$error}}
                </dib>
            @endforeach
        @endif
    </div>
</div>
<div class="text-center mt-5">
    <h2>Add todo</h2>
    <form action="{{route('todos.store')}}" method="POST" class="row g-3 justify-content-center">
        @csrf
        <div class="col-6">
            <input type="text" class="form-control" placeholder="Title" name="title">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </div>
    </form>
</div>
<div class="text-center">
    <h3>All todos</h3>
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($todos as $todo)
                    <tr>
                        <th>{{$todo->id}}</th>
                        <td>{{$todo->title}}</td>
                        <td>{{$todo->created_at}}</td>
                        <td>
                            @if($todo->is_completed)
                                <span class="badge bg-success">Completed</span>
                            @else
                                <span class="badge bg-warning">Not completed</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('todos.edit', ['todo' => $todo->id])}}" class="btn btn-info">Edit</a>
                            <a href="{{route('todos.destroy', ['todo' => $todo->id])}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"
        defer></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"
        defer></script>
</body>
</html>
