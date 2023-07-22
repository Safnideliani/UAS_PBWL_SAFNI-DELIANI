<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'tb_Kelas';
    protected $primaryKey = 'id_kelas';
    protected $guarded = '[]';
    protected $fillable = [
        'id_kelas',
        'kelas', 
    ];
    public function wali()
    {
        return $this->hasMany(Wali::class);    
    }
}
