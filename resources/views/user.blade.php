<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>

<div>
    <h2>Welcome Ali .. This is user view</h2>
    <h3>Title is : {{$title}}</h3>
    <p>Name is : {{$info['name']}}</p>
    <p>Age is : {{$info['age']}}</p>
    <p>Address is : {{$info['address']}}</p>
</div>


@if($info['address']=='shipin')
    <h4>welcome shipin</h4>
@elseif($info['address']=='banha')
    <h4>welcome banha</h4>
@else
    <h4>welcome {{$info['address']}}</h4>
@endif

<br><br>


@foreach($info as $item)
<p>{{$item}}</p>
@endforeach


<br><br>


<!--  عشان لو ال array فاضية  -->
@forelse($arr as $item)
    <p>{{$item}}</p>
@empty
    <p>empty array</p>
@endforelse



</body>
</html>
