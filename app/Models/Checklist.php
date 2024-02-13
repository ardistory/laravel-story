<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    protected $table = 'checklist';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['kode_toko', 'checklist_1', 'checklist_2', 'checklist_3', 'checklist_4', 'checklist_5', 'checklist_6', 'checklist_7', 'checklist_8', 'checklist_9', 'checklist_10'];
}
