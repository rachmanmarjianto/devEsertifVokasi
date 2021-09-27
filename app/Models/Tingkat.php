<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tingkat
 * 
 * @property int $ID_TINGKAT
 * @property string $TINGKAT
 * 
 * @property Collection|Acara[] $acaras
 *
 * @package App\Models
 */
class Tingkat extends Model
{
	protected $table = 'tingkat';
	protected $primaryKey = 'ID_TINGKAT';
	public $timestamps = false;

	protected $fillable = [
		'TINGKAT'
	];

	public function acaras()
	{
		return $this->hasMany(Acara::class, 'ID_TINGKAT');
	}
}
