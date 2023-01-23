<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHOTO</title>
    <link rel="stylesheet" href="/style.css" >
</head>
<body>
    {{-- @if ($error->any()) --}}
    {{-- <div>
        <ul>
            @foreach ($error ->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div> --}}
    {{-- @endif --}}
    {{-- <form method="post" action="{{route('file_upload.action')}}" enctype="multipart/form-data">--}}
        <form method="post" action="{{ route('file_upload.action')}}" enctype="multipart/form-data">
        @csrf
        <input type="file" name='upload_file'>
        <button type="submit">送信する</button>
    </form>

    <ul>
        @foreach($images as $image)
        <form action="{{route('file_upload.edit')}}" method="post" enctype="multipart/form-data">
        @csrf
        <li class="a">
           {{-- <p>{{$image}}</p> --}}
            <img src="{{asset($image->path)}}" alt="error">  
            <div class="button">
                <input type="file" name='upload_file' >
                <input type="hidden" name="content_id" value="{{$image['id']}}">
                <input type="submit" value="送信">
            {{-- <button >削除</button> --}}
        </div>   
        </li></form>
        @endforeach
   
    </ul>
</body>
</html>