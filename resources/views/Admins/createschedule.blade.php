<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @extends('../home')
    @section('content2')
    <h1>Create a new schedule for students to enroll in</h1>
    <form action="{{route('schedule.store')}}" method="POST">
        @csrf
        <div class="mt-3">
            <label for="subject_title">Enter subject title:</label>
            <select type="text" name="title" class="form-select" id="subject_title" placeholder="subject title">
                @foreach ($subjects as $subject)
                    <option>{{$subject->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-3">
            <label for="subject_code">Subject code:</label>

            <input type="text" name="code" class="form-control" id="subject_code" placeholder="subject code">
        </div>
        <div class="mt-3">
            <label for="subject_type">Type:</label>

            <select name="sub_type" class="form-select" id="subject_type" placeholder="subject type">
                <option>class</option>
                <option>lab</option>
                </select>
        </div>
        <div class="mt-3">
            <label for="schedule">Enter schedule:</label>

            <select class="form-select col-sm-3 m-2">
                <option>Monday</option>
                <option>Tuesday</option>
                <option>Wednesday</option>
                <option>Thursday</option>
                <option>Saturday</option>
                <option>Sunday</option>
            </select>
            <select class="form-select col-sm-3 m-2">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>4</option>
                <option>4</option>
                <option>4</option>
                <option>4</option>
                <option>4</option>
                <option>4</option>
                <option>4</option>
                <option>4</option>

            </select>
        </div>
        <div class="mt-3">
            <button class="btn btn-dark btn-block">Create</button>
        </div>
    </form>
    @endsection
</body>

</html>