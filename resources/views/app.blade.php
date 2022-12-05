<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/style.css">

    <title>@yield('title', $title)</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <div class="right">
        <img src="assets/2002.jpeg" alt="">
    </div>
</body>
</html>