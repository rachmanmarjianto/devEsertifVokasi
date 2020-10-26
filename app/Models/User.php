<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property string $USERNAME
 * @property int $ID_TIPE_USER
 * @property string $PASSWORD
 * @property bool $STATUS
 * 
 * @property TipeUser $tipe_user
 * @property Collection|PesertaAcara[] $peserta_acaras
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'user';
	protected $primaryKey = 'USERNAME';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_TIPE_USER' => 'int',
		'STATUS' => 'bool'
	];

	protected $fillable = [
		'ID_TIPE_USER',
		'PASSWORD',
		'STATUS'
	];

	public function tipe_user()
	{
		return $this->belongsTo(TipeUser::class, 'ID_TIPE_USER');
	}

	public function peserta_acaras()
	{
		return $this->hasMany(PesertaAcara::class, 'USERNAME');
	}
}
