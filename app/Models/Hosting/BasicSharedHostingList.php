<?php

namespace App\Models\Hosting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicSharedHostingList extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function hosting()
    {
        return $this->belongsTo('App\Models\Hosting\BasicSharedHosting', 'basic_id');
    }
}
