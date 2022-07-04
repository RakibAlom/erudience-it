<?php

namespace App\Models\Hosting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicShareHosting extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function list()
    {
        return $this->hasMany('App\Models\Hosting\BasicSharedHostingList', 'basic_id');
    }
    
}
