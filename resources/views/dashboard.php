<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic/dist/semantic.min.css') }}">
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="{{ asset('semantic/dist/semantic.min.js') }}"></script>
</head>
<body style="margin: 3%">
    <div id="app">
        <router-link to="/" style="margin-right: 10px">Dashboard</router-link>
        <router-link to="/profile" style="margin-right: 10px">Profile</router-link>
        <router-link to="/logout" style="margin-right: 10px">Logout</router-link><br><br>
        <router-view></router-view>
        
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>