<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan_item extends Model
{
    use HasFactory;
    public $table = "nota_dnas_item";
    protected $guarded=[];
}
