<!DOCTYPE html>
@extends("front/default")

@section("content")
    <div class="col-md-12 col-lg-12 col-sm-12">
    <div class="container">
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>modifier</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>tag</th>
            <th>commentaire</th>

        </tr>

        <tbody>
        <tr>

        @foreach($users as $user)
                <td><a href="{{ route("users.edit",$user)}}"><input type="button" value="Modifier" class="btn-primary"/></a></td>
           <td> {{$user->nom}} </td>
                <td>{{$user->prenom}} </td>

            @foreach($user->tags as $tag)
                <td>{{$tag->nom}}</td>
            @endforeach
            @foreach($user->commentaires as $commentaire)
                <td> {{$commentaire->content}} </td>
            @endforeach
            <td></td>
            <td>

            </td>

            {!! BootForm::open()->action(route("users.destroy",$user))->style("display:inline") !!}
            {!! BootForm::hidden("_method")->value('delete')!!}
            <td>
                <input type="submit" value="Supprimer" class="del btn btn-danger"/>
            </td>
            {!! BootForm::close() !!}
        </tr>

        @endforeach </tbody>
    </table>
    </div>
    </div>
    @stop