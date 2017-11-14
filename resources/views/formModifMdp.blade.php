@extends('layouts.master')
@section('content')
{!! Form::open(['url' => 'login']) !!}  
<div class="col-md-12 well well-md">
    <center><h1>Modification du mot de passe</h1></center>
    <div class="form-horizontal">    
        <div class="form-group">
            <label class="col-md-3 control-label">Mdp actuel : </label>
            <div class="col-md-6  col-md-3">
                <input type="password" name="expwd" class="form-control" placeholder="Votre ancien mdp" required autofocus>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">New mdp : </label>
            <div class="col-md-6 col-md-3">
                <input type="password" name="newpwd" ng-model="newpwd" class="form-control" placeholder="Votre nouveau mdp" required>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-md-3 control-label">Ressaisir le Nouveau mdp : </label>
            <div class="col-md-6 col-md-3">
                <input type="password" name="new2pwd" ng-model="new2pwd" class="form-control" placeholder="Votre nouveau mdp" required>
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-log-in"></span> Valider</button>
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3">
            @include('error')
        </div>
    </div>
</div>
{!! Form::close() !!}
@stop

