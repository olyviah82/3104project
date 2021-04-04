<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <div class="container">
        <img src="equilateral.png" alt="FLOSSPA" srcset="{{ URL::to('/images/logo-flosspa.svg') }}">
        <br />
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>

                    <th>Fullname</th>
                    <th>Surname</th>

                    <th>Speciality</th>
                    <th>Email</th>

                    <th>Age</th>


                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registries as $registry)
                <tr>
                    <td>{{$registry['id']}}</td>
                    <td>{{$registry['fullname']}}</td>
                    <td>{{$registry['surname']}}</td>
                    <td>{{$registry['speciality']}}</td>
                    <td>{{$registry['email']}}</td>

                    <td><a href="{{action('smsController@edit', $registry['id'])}}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <form onsubmit="return confirm('Do you really want to delete?');"
                            action="{{action('smsController@destroy', $registry['id'])}}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html