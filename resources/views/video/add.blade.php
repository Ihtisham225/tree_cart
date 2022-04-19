<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add new Video</title>
</head>
<body>
    <h1>Add new Video</h1>

    <form action="{{ Route('save_video') }}" id="feedback-form" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- Video Title --}}
        <label for="">Title</label>
        <input type="text" name="title">
        
        {{-- Video File --}}
        <label for="">Video</label>
        <input type="file" name="video">

        <button>Submit</button>
    </form>

</body>
</html>