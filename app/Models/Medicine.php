<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    protected $table = 'medicine';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'price'
    ];

    public function record()
    {
        return $this->hasMany(Record::class);
    }
}
