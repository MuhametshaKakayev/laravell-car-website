<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arabalar extends Model
{
    use HasFactory;

    protected $table = 'arabalars'; // Veritabanı tablosunun adını belirtin
    protected $fillable = ['marka', 'model','adi','sene','fiyat','renk','vites','km' ]; // Eklenebilir sütunlar

    // Eğer başka ilişkiler veya fonksiyonlar varsa burada tanımlayabilirsiniz
}

?>
