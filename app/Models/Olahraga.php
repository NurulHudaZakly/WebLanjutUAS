<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Olahraga extends Model
{
    use HasFactory;

    protected $table = 'olahraga';

    protected $fillable = ['id', 'nama', 'sinopsis', 'category_id', 'tahun', 'penemu', 'foto_sampul'];

    public $incrementing = false;
    protected $keyType = 'string';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
