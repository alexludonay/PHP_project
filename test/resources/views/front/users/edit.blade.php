
<!DOCTYPE html>
@extends("back.default")
@section("content")
    <div class="row">
        <div class="col-md-8 col-md-push-2">
            <div class="box-header with-border">
                <h1 class="box-title">Modification d'un utilisateur</h1>
            </div>
            <div class="box-body">
                {!! BootForm::open()->action(route("users.update", array($user))) !!}
                {!! BootForm::hidden("_method")->value("put") !!}
                {!! BootForm::text("Nom","nom")->placeholder("Entrez le nom de l'utilisateur")->required(true)->defaultValue($user->nom) !!}
                {!! BootForm::text("Prénom","prenom")->placeholder("Entrez le prénom de l'utilisateur")->required(true)->defaultValue($user->prenom)!!}
                {!! BootForm::email("Email","email")->placeholder("Entrez l'email de l'utilisateur")->required(false)->defaultValue($user->email)!!}
                {!! BootForm::password("Mot de passe","password")->placeholder("Entrez le nom de l'utilisateur")!!}
                {!! BootForm::password("Confirmer le mot de passe","password_confirmation")->placeholder("Entrez de nouveau le mot de passe")!!}
            </div>
        </div>
    </div>
    <div class="col-md-4 col-md-push-2">
        <div class="box-header box-primary">
            <div class="box-header with-border">
                <h2 class="box-title">Date de Naissance</h2>
            </div>
            <div class="box-body">
                {!! BootForm::date('Date de Naissance',"birthday")->defualtValue($user->birthday) !!}
            </div>
        </div>
        <div class="box-body">
            <input class="btn btn-primary pull-right" type="submit" value="Modifier"/>
            {!! BootForm::close() !!}
        </div>
    </div>
    </div>

    </div>


@stop