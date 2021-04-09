<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userCertificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'certificateId',
        'userId',
        
    ];

    public function certificateInfo(){
        return $this->belongsTo('App\Model\Certificate');
    }
}
