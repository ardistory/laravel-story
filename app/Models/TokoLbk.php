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
    protected $fillable = ['kode_toko', 'nama_toko', 'ip_gateway', 'ip_induk', 'ip_anak', 'ip_stb', 'ip_wdcp', 'edparea'];
}
