<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetQuote extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function list()
    {
        return $this->hasMany('App\Models\Admin\GetQuoteList');
    }
}
