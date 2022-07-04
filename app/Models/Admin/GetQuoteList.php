<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetQuoteList extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function quote()
    {
        return $this->belongsTo('App\Models\Admin\GetQuote', 'get_quote_id');
    }
}
