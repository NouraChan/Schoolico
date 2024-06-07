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
    
    <form action="{{route('subject.update',['id'=>$subject->id])}}" method="POST">
        @csrf
        <div class="mt-3">
            <label for="subject_title">Enter subject title:</label>
            <input type="text" value="{{$subject->title}}" name="title" class="form-control" id="subject_title" placeholder="subject title">
        </div>
        <div class="mt-3">
            <label for="subject_code">Enter subject code:</label>

            <input type="text" value="{{$subject->code}}" name="code" class="form-control" id="subject_code" placeholder="subject code">
        </div>
        <div class="mt-3">
            <label for="subject_description">Enter description:</label>

            <textarea class="form-control" name="description" id="subject_description">{{$subject->description}}</textarea>
        </div>
        <div class="mt-3">
            <button class="btn btn-dark btn-block">Confirm</button>
        </div>
    </form>
    @endsection
</body>

</html>