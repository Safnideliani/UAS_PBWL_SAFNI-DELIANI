<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'tb_siswa';
    protected $primaryKey = 'id_siswa';
    protected $guarded = '[]';
    protected $fillable = [
        'id_siswa',
        'id_kelas',
        'id_wali',
        'nama_siswa',
        'tanggal_lulus',
        'user_hp'
    ];
    public function kelas()
    {
        return $this->hasMany(Kelas::class);    
    }
}
