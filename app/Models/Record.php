<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    protected $table = 'medical_record';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'disease',
        'description',
        'medicine1',
        'medicine2',
        'medicine3',
        'medicine4'
    ];

    public function medicine_1()
    {
        return $this->belongsTo(Medicine::class, 'medicine1');
    }

    public function medicine_2()
    {
        return $this->belongsTo(Medicine::class, 'medicine2');
    }

    public function medicine_3()
    {
        return $this->belongsTo(Medicine::class, 'medicine3');
    }

    public function medicine_4()
    {
        return $this->belongsTo(Medicine::class, 'medicine4');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
