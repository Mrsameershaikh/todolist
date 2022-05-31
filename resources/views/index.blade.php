<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO APP</title>

    {{-- BOOTSTRAP CDN --}}
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <style>
        body{
            background-color: rgb(32, 31, 31);
        }
        .row{
            color: white;
        }
    </style>
</head>
<body><br> 
    <div class="col-md-3 m-auto" style="margin-left: 200px;">
    <button><a href="{{ url('/') }}">Exit</a></button>
    </div>
    <div class="row">
        <div class="col-md-3 m-auto" style="margin-left: 500px;">
            <h3>TODO APP</h3>
            <form action="{{url('/')}}/todo" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="items" placeholder="Add an item">
                </div>
                <input type="submit" class="btn btn-primary" name="add" value="Add Item">
            </form>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 m-auto" style="margin-left:500px">
            <table class="table">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Todo items</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <div style="display:none">{{ $count=0 }}</div>
                    
                    @foreach ($items as $item)
                    <div style="display: none">{{ $count=$count+1 }}</div>
                    <tr>
                        <td>{{ $count }}</td>
                        <td>{{$item->items}}</td>
                        <td>
                            <a href="{{ url('/show/edit/') }}/{{ $item->S_No}}">
                            <button class="btn btn-primary">Edit</button>
                            </a>
                        </td>
                        <td>
                            <a href="{{ url('/show/delete/') }}/{{ $item->S_No }}">
                            <button class="btn btn-danger">Delete</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
                        
                    
                            