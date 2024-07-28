<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;

    protected $fillable = [
        'incoming_msg_id',
        'outgoing_msg_id',
        'message',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
