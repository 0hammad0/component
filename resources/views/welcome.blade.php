<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Home Page</h1>
    <hr>
    @php
        $desc = 'Description 1 & 2';
    @endphp
    <x-Card title="title 1" subTitle="subTitle 1" :description=$desc />
    <x-Card title="title 2" subTitle="subTitle 2" :description=$desc />
    <x-asd title="asd 1" />
</body>

</html>
