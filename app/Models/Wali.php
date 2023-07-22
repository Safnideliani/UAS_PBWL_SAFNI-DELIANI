<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    use HasFactory;
    protected $table = 'tb_wali';
    protected $primaryKey = 'id_wali';
    protected $guarded = '[]';
    protected $fillable = [
        'id_wali',
        'id_kelas',
        'nama_wali',
        'tanggal_lahir',
    ];
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);    
    }
}
