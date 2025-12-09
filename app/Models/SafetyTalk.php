namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SafetyTalk extends Model
{
    protected $fillable = [
        'judul',
        'tanggal',
        'waktu_mulai',
        'waktu_selesai',
        'bukti_undangan',
        'bukti_notulensi',
        'bukti_dokumentasi',
        'bukti_absensi',
    ];
}
