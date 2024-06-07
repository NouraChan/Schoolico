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
    <h1>Subjects registered here</h1>
    <br>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Code</th>
                <th scope="col">Discription</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($subjects as $subject)
                <tr>
                    <th scope="row">{{$subject->id}}</th>
                    <td>{{$subject->title}}</td>
                    <td>{{$subject->code}}</td>
                    <td>{{$subject->description}}</td>
                    <td class="p-3"><a href="{{route('subject.edit',['id' => $subject->id])}}"><i class="fa-solid fa-pencil text-dark"></i></a></td>
                    <td class="p-3"><a href="{{route('subject.destroy',['id' => $subject->id])}}"><i class="fa-regular fa-trash-can text-dark"></i></a></td>

                </tr>
            @endforeach

        </tbody>
    </table>

    @endsection
</body>

</html>