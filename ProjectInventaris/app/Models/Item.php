<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //kita masukkan tabel yg digunakan
    protected $table = 'items';


    //kolom-kolom yg di izinkan untuk diisi lewat form
    protected $fillable = [
        'code',
        'item_nama',
        'category',
        'stoc',
        'condition',
        'room_location'
    ];
}
