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
    <div class="col-lg-6">
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
    <h2>Edit todo</h2>
</div>
<form action="{{route('todos.update', ['todo' => $todo->id])}}" method="POST">
    @csrf
    {{method_field('PUT')}}
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title" value="{{$todo->title}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="is_completed" id="" class="form-control">
                    <option value="1" @if($todo->is_completed==1) selected @endif>Complete</option>
                    <option value="0" @if($todo->is_completed==0) selected @endif>Not complete</option>
                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>
</html>
