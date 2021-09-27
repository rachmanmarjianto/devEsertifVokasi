<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TahunAkademik
 * 
 * @property int $ID_TAHUN_AKADEMIK
 * @property string $TAHUN_AKADEMIK
 * 
 * @property Collection|Acara[] $acaras
 *
 * @package App\Models
 */
class TahunAkademik extends Model
{
	protected $table = 'tahun_akademik';
	protected $primaryKey = 'ID_TAHUN_AKADEMIK';
	public $timestamps = false;

	protected $fillable = [
		'TAHUN_AKADEMIK'
	];

	public function acaras()
	{
		return $this->hasMany(Acara::class, 'ID_TAHUN_AKADEMIK');
	}
}
