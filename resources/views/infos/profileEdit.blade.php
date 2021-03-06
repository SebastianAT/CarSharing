@extends('layouts.app')


@section('content')
<div class="col-lg-offset-4 col-lg-4">
    <div class="container">
        <br>
        <h5>Vorname:</h5>
        <p>{{ $user->first_name }} &emsp;&emsp;
            Bearbeiten:
            <a class="dropdown-toggle" role="button" data-toggle="collapse" href="#collapseFname" aria-expanded="false" aria-controls="collapseExp">

            </a>
            <div class="collapse" id="collapseFname">
                <div class="container"> Name ändern </div>
                <form class="form-horizontal" method="POST" action="{{ action('ProfileController@changeFname') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                        <div class="col-md-6">
                            <input id="first_name" type="name" class="form-control" name="first_name" required>

                            @if ($errors->has('first_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Ändern
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


        <h5>Nachname:</h5>
        <p>{{ $user->last_name }}&emsp;&emsp;

            Bearbeiten:
            <a class="dropdown-toggle" role="button" data-toggle="collapse" href="#collapseLname" aria-expanded="false" aria-controls="collapseExp">

            </a>
        <div class="collapse" id="collapseLname">
            <div class="container"> Name ändern </div>
            <form class="form-horizontal" method="POST" action="{{ action('ProfileController@changeLname') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                    <div class="col-md-6">
                        <input id="last_name" type="name" class="form-control" name="last_name" required>

                        @if ($errors->has('last_name'))
                        <span class="help-block">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Ändern
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <h5>Email:</h5>
        <p>{{ $user->email }}</p>

        <h5>Passwort:</h5>
        <p>
            Bearbeiten:
            <a class="dropdown-toggle" role="button" data-toggle="collapse" href="#collapsePW" aria-expanded="false" aria-controls="collapseExp">

            </a>
        <div class="collapse" id="collapsePW">
            <div class="container"></div>
                <form class="form-horizontal" method="POST" action="{{ action('ProfileController@changePW') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('passwordold') ? ' has-error' : '' }}">
                        <label for="password" class="col control-label">Aktuelles Passwort</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="passwordold" required>

                            @if ($errors->has('passwordold'))
                            <span class="help-block">
                                <strong>{{ $errors->first('passwordold') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col control-label">Neues Passwort</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col control-label">Confirm Password</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Ändern
                            </button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div><br>

<div class="container">
    </p>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="storage/userIMG/{{ $user->avatar }}" style="border-radius: 50%; margin-right: 25px; float:left; width: 150px; height: 150px" class="rounded-circle" />

            <h5>Upload Profilbild</h5><br>
            <form action="{{ action('UploadController@updateAvatar') }}" enctype="multipart/form-data" method="post">
                {{csrf_field()}}
                <input class="small" type="file" name="avatar" >
                <br><br>
                <input class="small" type="submit" value="Upload"><br>
                <br>
            </form>
        </div>
    </div>
</div><br><br><br><br><br><br>
@endsection