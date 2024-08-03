<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$pageTitle ?? 'The Travel Lanka Leisure'}}</title>
    <style>
        @page {
            size: A4 portrait;
        }
        html, body {
            font-size: 16px;
            font-family: 'Times New Roman', serif, sans-serif;
        }
        h1 {
            font-size: 3em;
        }
        h2 {
            font-size: 2em;
        }
        h3 {
            font-size: 1.5em;
        }
        .clearfix::after {
            content: '';
            display: block;
            width: 100%;
            clear: both;
        }
        .floated-img {
            width: 200px;
            float: left; 
            margin: 5px 15px 5px 0px;
        }
        .floatedrow {
            page-break-after: auto;
        }
        p {
            text-align: justify;
            margin-top: 0px;
        }
        .text-center {
            text-align: center;
        }
        .imgfullwidth {
            width: 100%;
            margin: 10px 0px;
            padding: 0px;
        }
    </style>
    <style>@yield('custom-css')</style>
</head>
<body>
    @yield('printable_content')
</body>
</html>