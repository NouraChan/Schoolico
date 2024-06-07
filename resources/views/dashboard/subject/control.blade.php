<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @extends('../../home')
    @section('content2')
    <h1>Create a new subject for students to enroll in.</h1>
    <form action="{{route('subject.store')}}" method="POST">
        @csrf
        <div class="mt-3">
            <label for="subject_title">Enter subject title:</label>
            <input type="text" name="title" class="form-control" id="subject_title" placeholder="subject title">
        </div>
        <div class="mt-3">
            <label for="subject_code">Enter subject code:</label>

            <input type="text" name="code" class="form-control" id="subject_code" placeholder="subject code">
        </div>
        <div class="mt-3">
            <label for="subject_description">Enter description:</label>

            <textarea class="form-control" name="description" id="subject_description"></textarea>
        </div>
        <div class="mt-3">
            <button class="btn btn-dark btn-block">Create</button>
        </div>
    </form>
    @endsection
</body>

</html>