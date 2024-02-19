<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checked extends Model
{
    protected $table = 'checked';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['kode_toko', 'is_checked', 'check_by', 'message'];
}
