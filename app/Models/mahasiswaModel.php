<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswaModel extends Model
{
    
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mahasiswa'; 
    protected $fillable = ['nim','nama','prodi','jurusan'];
}
