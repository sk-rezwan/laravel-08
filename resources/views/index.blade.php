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
        .table-dark{
            background: #4c4b4b;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <table class="table table-dark" style="width: 90%">
            <thead>
              <tr>
                <th width="10%" scope="col">ID</th>
                <th width="40%" scope="col">Body</th>
                <th width="30%" colpsan="2">Action</th>
              </tr>
            </thead>
            <tbody>
        @foreach($tweets as $tweet)
              <tr>
              <td width="10%">{{ $tweet->id }}</td>
              <td width="40%">{{ $tweet->body }}</td>
              <td width="30%">
                
              <a href="{{route('profile.id', $tweet->id )}}"  class="btn btn-primary"> Show</a>
              <a href="{{route('update', $tweet->id)}}"  class="btn btn-warning"> Edit</a>
              <a href="{{route('profile.delete', $tweet->id)}}" class="btn btn-danger"> Delete </a>
            </td>
              </tr>
              
        @endforeach
            </tbody>
          </table>
          
    </div>
    <div class="container">
      <div class="text-center mt-5" >
        {{ $tweets->links() }}
      </div>
    </div>
</body>
</html>