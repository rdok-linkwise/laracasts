<?php

namespace App;

class Card extends Model
{
    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
