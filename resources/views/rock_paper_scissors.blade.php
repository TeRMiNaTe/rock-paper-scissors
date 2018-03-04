<!DOCTYPE html>
<html>
    <head>
        <title>Rock, Paper, Scissors via Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <meta name="author" content="Vladislav Dimitrov">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                @foreach ($output as $line)
                    <div>{{ $line }}</div>
                @endforeach
            </div>
        </div>
    </body>
</html>
