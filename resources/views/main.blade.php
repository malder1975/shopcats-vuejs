<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Главная Магазин на VUEJS (SPA)</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">

        <!--shop-header></shop-header-->

        <section class="section">
        <div class="container">
            <div class="columns">
                <categories-sidebar></categories-sidebar>
                <content-goods></content-goods>
            </div>
        </div>
        </section>

    </div>

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>