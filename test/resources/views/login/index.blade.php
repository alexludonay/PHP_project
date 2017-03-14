@extends('back/default')
@section('content')
   {!! BootForm::open()->action(route("connexion")) !!}
   <div class="login-box-body">
        <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="email" name="email" value="{{ old("email") }}"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
       <div class="form-group has-feedback">
           <input type="password" class="form-control" placeholder="password" name="password"/>
           <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
       </div>

       <div class="row">
           <div class="col-xs-8">
               <div class="checkbox">
                   <label>
                       <input name="remerber" type="checkbox"> Se rappeler de moi
                   </label>
               </div>
           </div>
       </div>
        <div class="col-xs-4">
            <input type="submit" class="btn btn-primary btn-block btn-flat" value="Se connecter"/>
        </div>
       <br>
       {!! BootForm::close() !!}
  </div>