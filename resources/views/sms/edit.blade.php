<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>FLOSSPA Editar Asistencia Evento </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/registry.css')}}">


</head>

<body>
    <div class="container">
        <img src="equilateral.png" alt="FLOSSPA" srcset="{{ URL::to('/images/logo-flosspa.svg') }}">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
        @endif

        <form method="post" action="{{action('smsController@update', $id)}}" id="formRegistry">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <div class="row">
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">admin:</label>
                    <input type="text" class="form-control" name="admin" value="{{$registry->admin}}">
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">Fullname:</label>
                    <input type="text" class="form-control" name="fullname" value="{{$registry->fullname}}">
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">Surname:</label>
                    <input type="text" class="form-control" name="surname" value="{{$registry->surname}}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">NATIONAL ID:</label>
                    <input type="text" class="form-control" name="nationalid" value="{{$registry->nationalid}}">
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">Speciality:</label>
                    <input type="text" class="form-control" name="speciality" value="{{$registry->speciality}}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">Email:</label>
                    <input type="text" class="form-control" name="email" value="{{$registry->email}}">
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">Age:</label>
                    <input type="text" class="form-control" name="age" value="{{$registry->age}}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">GUARDIAN FULLNAME:</label>
                    <input type="text" class="form-control" name="guardianfname" value="{{$registry->guardianfname}}">
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">Guardian nationalid:</label>
                    <input type="text" class="form-control" name="guarrdian_nationalid"
                        value="{{$registry->guarrdian_nationalid}}">
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-6">
                    <label for="name">Guardian Mobile:</label>
                    <input type="text" class="form-control" name="guardian_mobile"
                        value="{{$registry->guardian_mobile}}">
                </div>
            </div>





            <div class="row">

                <div class="form-group col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </form>
    </div>
    <div id="toast-container" class="toast-top-right">
    </div </body>

</html>