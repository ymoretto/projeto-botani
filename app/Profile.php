<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {   //essa função vai pegar a imagem de perfil do usuário, ou a imagem default, se o usuário não tiver uma imagem
        $imagePath = ($this->image) ? $this->image : 'images/default_botani_image.png';

        return $imagePath;
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
