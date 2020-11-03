<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PesertaAcara
 * 
 * @property string $USERNAME
 * @property int $ID_ACARA
 * @property int $ID_PARTISIPASI
 * @property string|null $DIGITAL_SIGNATURE
 * 
 * @property User $user
 * @property Acara $acara
 * @property Partisipasi $partisipasi
 *
 * @package App\Models
 */
class PesertaAcara extends Model
{
	protected $table = 'peserta_acara';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_ACARA' => 'int',
		'ID_PARTISIPASI' => 'int'
	];

	protected $fillable = [
		'ID_PARTISIPASI',
		'ID_ACARA',
		'DIGITAL_SIGNATURE',
		'NIM',
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'nim');
	}

	public function acara()
	{
		return $this->belongsTo(Acara::class, 'ID_ACARA');
	}

	public function partisipasi()
	{
		return $this->belongsTo(Partisipasi::class, 'ID_PARTISIPASI');
	}
}
