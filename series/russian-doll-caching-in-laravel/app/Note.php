<?php

namespace App;

class Note extends Model
{
    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
