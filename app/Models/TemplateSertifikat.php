<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TemplateSertifikat
 * 
 * @property int $ID_TEMPLATE
 * @property string $NAMA_TEMPLATE
 * @property string $FILE_TEMPLATE
 * @property string $FILE_PHP
 * 
 * @property Collection|Acara[] $acaras
 *
 * @package App\Models
 */
class TemplateSertifikat extends Model
{
	protected $table = 'template_sertifikat';
	protected $primaryKey = 'ID_TEMPLATE';
	public $timestamps = false;

	protected $fillable = [
		'NAMA_TEMPLATE',
		'FILE_TEMPLATE',
		'FILE_PHP'
	];

	public function acaras()
	{
		return $this->hasMany(Acara::class, 'ID_TEMPLATE');
	}
}
