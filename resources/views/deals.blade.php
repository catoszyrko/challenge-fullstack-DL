<!DOCTYPE html>
<html>
<head>
    <title>Deals</title>
</head>
<body>
    <h1>Deals</h1>
    <ul>
        @foreach($deals as $deal)
            <li>{{ $deal->title }}</li>
        @endforeach
    </ul>
</body>
</html>