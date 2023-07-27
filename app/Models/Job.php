<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    public function scopeSelectedOptions($query, $input = [])
{
    if(!empty($input)) {
        if(array_key_exists('type', $input)) {
            $query->whereHas('type', function($q) use ($input) {
                return $q->whereIn('type', $input['type']);
            });
        }
    }
    return $query;
}
}
