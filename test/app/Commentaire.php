<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $table = 'commentaires';
    protected $fillable = array("auteur","content","created_at","update_at","user_id","active");
    public static $rules = array(
        "create" => array(
            'auteur' => 'required|string',
            'content' => 'required|string',
            'user_id' => 'required|integer',
            'active' => 'boolean',
        ),
        "update" => array(
            'auteur' => 'required|string',
            'content' => 'required|string',
            'user_id' => 'required|integer',
            'active' => 'boolean',
        ),
        "valide" => array(
            "active" => 'boolean',
        )
    );

    public function user()
    {
        return $this->belongsTo("App\User","user_id","id");
    }

}
