<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Partisipasi
 * 
 * @property int $ID_PARTISIPASI
 * @property string $PARTISIPASI
 * 
 * @property Collection|PesertaAcara[] $peserta_acaras
 *
 * @package App\Models
 */
class Partisipasi extends Model
{
	protected $table = 'partisipasi';
	protected $primaryKey = 'ID_PARTISIPASI';
	public $timestamps = false;

	protected $fillable = [
		'PARTISIPASI'
	];

	public function peserta_acaras()
	{
		return $this->hasMany(PesertaAcara::class, 'ID_PARTISIPASI');
	}
}
