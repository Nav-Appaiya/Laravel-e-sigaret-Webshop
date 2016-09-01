@extends('layouts.master')

@section('titel', 'Primera shop')
@section('seotags', 'seotags')

@section('sidebar')
    @parent
@endsection

@section('content')

        @if(Auth::check())
                    <ol class="breadcrumb">
                        <li><a href="{{ URL::route('homepage') }}">Homepage</a></li>
                        <li class="active">Klanten Pagina</li>
                    </ol>

                    <div class="content">
                        <div class="col-md-12">
                            <h3>Laatste bestellingen</h3>
                        </div>
                    </div>

                    <div class="content">
                        <div class="col-md-6">
                        <h3>Persoonlijke gegevens</h3>
                        <form class="form-horizontal" role="form">
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Voornaam:</label>
                            <div class="col-lg-8">
                              <input class="form-control" type="text" value="{{ $user->voornaam }}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Achternaam:</label>
                            <div class="col-lg-8">
                              <input class="form-control" type="text" value="{{ $user->achternaam }}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Geboortedatum:</label>
                            <div class="col-lg-8">
                              <input class="form-control" type="text" value="{{ $user->geboortedatum }}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Straat:</label>
                            <div class="col-lg-8">
                              <input class="form-control" type="text" value="{{ $user->adres }}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Postcode:</label>
                            <div class="col-md-8">
                              <input class="form-control" type="text" value="{{ $user->postcode }}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Plaats:</label>
                            <div class="col-md-8">
                              <input class="form-control" type="text" value="{{ $user->woonplaats }}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Telefoon:</label>
                            <div class="col-md-8">
                              <input class="form-control" type="text" value="{{ $user->telThuis }} & {{ $user->telMobiel }}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                              <input type="button" class="btn btn-primary" value="Save Changes">
                              <span></span>
                              <input type="reset" class="btn btn-default" value="Cancel">
                            </div>
                          </div>
                        </form>
                        </div>
                    <div class="col-md-6">
                        <h3>Account gegevens</h3>
                        <form class="form-horizontal" role="form">
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Email adres:</label>
                            <div class="col-lg-8">
                              <input class="form-control" type="text" value="{{ $user->email }}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Gebruikersnaam:</label>
                            <div class="col-lg-8">
                              <input class="form-control" type="text" value="{{ $user->name }}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-3 control-label">Wachtwoord:</label>
                            <div class="col-lg-8">
                              <input class="form-control" type="password" value="*******">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                              <input type="button" class="btn btn-primary" value="Save Changes">
                              <span></span>
                              <input type="reset" class="btn btn-default" value="Cancel">
                            </div>
                          </div>
                        </form>
                        </div>
                    </div>


        @endif()

@endsection

