<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Videos</title>
</head>
<body>
    <h1>All Videos</h1>
    <table border="1px solid black">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Actions</th>
                <th>Add Quiz</th>
            </tr>
        </thead>
        <tbody>
            @foreach($videos as $video)
                <tr>
                    <td>{{ $video->id }}</td>
                    <td><a href="{{ url('show_video/'.$video->id) }}">{{ $video->title }}</a></td>
                    <td>
                        <a href="{{ url('edit_video/'.$video->id) }}">Edit</a>
                        <a href="{{ url('delete_video/'.$video->id) }}">Delete</a>
                    </td>
                    <td>
                        <a href="{{ url('add_mcq/'.$video->id) }}">MCQ</a>
                        <a href="{{ url('add_blank/'.$video->id) }}">Blank</a>
                        <a href="{{ url('add_trueFalse/'.$video->id) }}">True False</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>