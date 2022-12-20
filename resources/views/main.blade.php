<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index page</title>
    {{-- Stilius keliasi i virsu --}}


    {{-- asset --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> 

</head>
<body>
    {{-- paveiksliukas gali buti panaudotas bet kur --}}


    {{-- scriptas kelias i apacia --}}


    {{-- asset('failas') = automatiskai sugeneruoja pilna kelia iki failo  --}}
    {{-- stiliams, paveiksliukams, scriptams, video medziaga atvaizduoti blade faile --}}



    {{-- linux sistema/window server--}}
    {{-- ima reliatyvuji kelia --}}
    {{-- linux sistema naudoja pilnaji kelia --}}
    {{-- https://localhost/style.css --}}


    <img src="{{asset('img/kaledinis_image.jpg')}}" alt=""/>



    <script src="{{asset('js/app.js')}}"></script>
{{-- includu kiekis --}}
{{-- tuo svetaine veiki greiciau --}}
</body>
</html>