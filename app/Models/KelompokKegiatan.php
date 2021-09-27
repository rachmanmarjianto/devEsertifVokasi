<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class KelompokKegiatan
 * 
 * @property int $ID_KELOMPOK_KEGIATAN
 * @property string $KELOMPOK_KEGIATAN
 * 
 * @property Collection|JenisKegiatan[] $jenis_kegiatans
 *
 * @package App\Models
 */
class KelompokKegiatan extends Model
{
	protected $table = 'kelompok_kegiatan';
	protected $primaryKey = 'ID_KELOMPOK_KEGIATAN';
	public $timestamps = false;

	protected $fillable = [
		'KELOMPOK_KEGIATAN'
	];

	public function jenis_kegiatans()
	{
		return $this->hasMany(JenisKegiatan::class, 'ID_KELOMPOK_KEGIATAN');
	}
}
