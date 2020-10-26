<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Prodi
 * 
 * @property int $ID_PRODI
 * @property string $NAMA_PRODI
 * @property string $TTD_KAPRODI
 * @property string $NAMA_KPS
 * 
 * @property Collection|Acara[] $acaras
 *
 * @package App\Models
 */
class Prodi extends Model
{
	protected $table = 'prodi';
	protected $primaryKey = 'ID_PRODI';
	public $timestamps = false;

	protected $fillable = [
		'NAMA_PRODI',
		'TTD_KAPRODI',
		'NAMA_KPS'
	];

	public function acaras()
	{
		return $this->hasMany(Acara::class, 'ID_PRODI');
	}
}
