<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>App core</title>
 
        <link rel='stylesheet' href='//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <style>
            body {
                margin-top: 1%;
                margin-left: 4%;
            }
        </style>
    </head>
    <body>
        <div class='container-fluid'>
            <div class='row'>
                @yield('content')
            </div>
        </div>
    </body>
</html>