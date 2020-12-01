<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@1.4.6/dist/tailwind.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Show Tweets</title>
    <style>
        .panel{
            width: 50%;
            margin: 0 auto;
        }
        body{
            background: #f1f1f1;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="panel-group pt-5">
            <div class="panel panel-primary">
              <div class="panel-heading text-center"> ID: {{ $tweet->id }} </div>
              <div class="panel-body text-center"> {{ $tweet->body }} </div>
            </div>
        </div>
    </div>
</body>
</html>