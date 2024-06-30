<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <title>Document</title>
</head>
<body>
    <div class="flex">
        @foreach ($comics as $fumetto)
            <div class="card">
                <h1> {{ $fumetto['title']}}</h1>
                <div class="img-container"><img src="{{ $fumetto['thumb']}}" alt=""></div>
                <div><span>Price:</span> {{ $fumetto['price']}}</div>
                <div><span>Sale date:</span>  {{ $fumetto['sale_date']}}</div>
                <div><span>Type:</span>  {{ $fumetto['type']}}</div>
                <div><span>Series:</span> {{ $fumetto['series']}}</div>
                <div><span>Plot:</span>  {{ $fumetto['description']}}</div>
            </div>
        @endforeach
    </div>
</body>

<style>

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: rgb(41, 41, 41);
        color: white;
    }

    .flex {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
        padding: 2rem 0
    }

    .card {
        display: flex;
        flex-direction: column;
        width: calc(20% - 1rem);
        border: 3px solid rgba(255, 255, 255, 0.576);
        border-radius: 10px;
        padding:.5rem;

    }

    h1 {
        height: 6rem;
        text-align: center;
        padding: 1rem 0;
    }

    span {
        font-size: 30px;
        color: rgb(207, 114, 0)
    }

    .img-container {
        width: 100%;
        height: 25rem;
        overflow: hidden;
        border-radius: 10px;
    }

    img{
        width: 100%;
    }

    .img-container {
        margin-bottom: 1rem;
    }
</style>

</html>
