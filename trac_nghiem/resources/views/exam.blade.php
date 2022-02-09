<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kiểm tra</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
    <div class="container">
        <form action="{{ route('exam.submit') }}" method="post">
            @csrf
            <input type="hidden" value="{{$de->de_id}}" name="de_id">
             <center>
            <h2>Đề số {{$de->de_id}}</h2>
        </center>
        @foreach ($cauhoi as $key=>$item)
        <b>
            <h4>Câu số {{$key+1}}: {{$item->content}}</h4>
        </b>

        @foreach ($item->dap_ans as $key2=>$dapan)
        <input type="radio" name="cauhoi{{$item->ch_id}}[]" required id="{{$dapan->id}}{{$key2}}" value="{{$dapan->id}}"> 
        <label for="{{$dapan->id}}{{$key2}}">{{$dapan->content}}</label><br>
        @endforeach
        @endforeach
        <br>
            <button type="submit" class="btn btn-success">Nộp bài</button>
        </form>
       <br>
    </div>

</body>

</html>
