<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitly</title>
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="semantic/dist/semantic.min.js"></script>
</head>
<body style="background-color: #F1F1F1" id="id">
    <div id="app">
        <a href="{{ url('/') }}" class="ui button mini blue">Go to Url shortened</a><br><br>

        <i style="font-size: 12px">*Note: I use or I installed bitly.</i>
        <bitly-url-shortener></bitly-url-shortener>
    </div>
    <script src="{{ asset('js/bitly.js') }}"></script>
</body>
</html>