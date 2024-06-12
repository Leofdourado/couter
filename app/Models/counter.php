<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class counter extends Model
{
    use HasFactory;
    protected $fillable = ['value'];
    public function logs()
    {
        return $this->hasMany(Log::class);
    }
}
