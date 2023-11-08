<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = ['nominal', 'deskripsi', 'jenis', 'tanggal'];

    const UANG_MASUK = 1;
    const UANG_KELUAR = 2;

    // protected static function booted()
    // {
    //     static::creating(function($q){
    //         if (!isset($q->jenis)) {
    //             $q->jenis = self::UANG_MASUK;
    //         }
    //     });
    // }

    public function translate($status)
    {
        switch ($status) {
            case self::UANG_MASUK:
                return 'Masuk';
                break;
            case self::UANG_KELUAR:
                return 'Keluar';
                break;
        }
    }

}
