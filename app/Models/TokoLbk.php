<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokoLbk extends Model
{
    protected $table = 'tokolbk';
    protected $primaryKey = 'kode_toko';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;
    protected $guard = [];
    protected $fillable = ['*'];
}
