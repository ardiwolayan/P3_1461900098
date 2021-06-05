<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Kamar extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'id_pasien', 'id_dokter',
    ];
}