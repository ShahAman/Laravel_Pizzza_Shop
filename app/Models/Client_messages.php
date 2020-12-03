<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client_messages extends Model
{
    use HasFactory;

    protected $table = 'messages';
    protected $fillable = ['id', 'message'];
    protected $primaryKey = 'id';
    
    public function api($request, $cm){
        $bod = $request->getContent();
        $cm->insert(['message' => $bod]);
    }
}

