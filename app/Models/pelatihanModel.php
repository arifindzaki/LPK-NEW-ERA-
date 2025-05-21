<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelatihanModel extends Model

    {
        use HasFactory;
        /**
         * The table associated with the model.
         *
         * @var string
         */
        protected $table = 'pelatihan';
        protected $fillable = ['judul','deskripsi','image'];
    }

