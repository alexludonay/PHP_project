<!DOCTYPE html>
@extends("back/default")
@section("content")
    <div class="row">
        <div class="col-md-8 col-md-push-2">
            <div class="box-header with-border">
                <h1 class="box-title">Création d'un utilisateur</h1>
            </div>
            <div class="box-body">
                {!! BootForm::open()->action(route("users.store")) !!}
                {!! BootForm::text("Nom","nom")->placeholder("Entrez le nom de l'utilisateur")->required(true)!!}
                {!! BootForm::text("Prénom","prenom")->placeholder("Entrez le prénom de l'utilisateur")->required(true)!!}
                {!! BootForm::email("Email","email")->placeholder("Entrez l'email de l'utilisateur")->required(false)!!}
                {!! BootForm::password("Mot de passe","password")->placeholder("Entrez le nom de l'utilisateur")->required(true)!!}
                {!! BootForm::password("Confirmer le mot de passe","password_confirmation")->placeholder("Entrez de nouveau le mot de passe")->required(true)!!}
                {!! BootForm::select('Rôle', 'role')->options(['admin' => 'Administrateur', 'student' => 'Etudiant','teacher' =>'Professeur']) !!}
            </div>
        </div>
     </div>
        <div class="col-md-4 col-md-push-2">
            <div class="box-header box-primary">


             </div>
                <div class="box-body">
                    <input class="btn btn-primary pull-right" type="submit" value="Créer"/>
                    {!! BootForm::close() !!}
                </div>
            </div>
        </div>

    @stop