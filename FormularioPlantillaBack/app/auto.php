<?php

namespace App;
use App\tipo_auto;
use Illuminate\Database\Eloquent\Model;

class auto extends Model
{
     public function user(): BelongsTo
     {
         return $this->belongsTo(tipo_auto::class);
     }
}
