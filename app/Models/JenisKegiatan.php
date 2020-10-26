<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class JenisKegiatan
 * 
 * @property int $ID_JENIS_KEGIATAN
 * @property int $ID_KELOMPOK_KEGIATAN
 * @property string $JENIS_KEGIATAN
 * 
 * @property KelompokKegiatan $kelompok_kegiatan
 * @property Collection|Acara[] $acaras
 *
 * @package App\Models
 */
class JenisKegiatan extends Model
{
	protected $table = 'jenis_kegiatan';
	protected $primaryKey = 'ID_JENIS_KEGIATAN';
	public $timestamps = false;

	protected $casts = [
		'ID_KELOMPOK_KEGIATAN' => 'int'
	];

	protected $fillable = [
		'ID_KELOMPOK_KEGIATAN',
		'JENIS_KEGIATAN'
	];

	public function kelompok_kegiatan()
	{
		return $this->belongsTo(KelompokKegiatan::class, 'ID_KELOMPOK_KEGIATAN');
	}

	public function acaras()
	{
		return $this->hasMany(Acara::class, 'ID_JENIS_KEGIATAN');
	}
}
