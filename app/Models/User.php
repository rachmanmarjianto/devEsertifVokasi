<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

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
class User extends Authenticatable
{
	use Notifiable;
	protected $table = 'user';
	protected $primaryKey = 'username';
	public $incrementing = false;
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $casts = [
		'ID_TIPE_USER' => 'int',
		'STATUS' => 'bool'
	];

	protected $fillable = [
		'ID_TIPE_USER',
		'password',
		'username',
		'STATUS',
		'NAMA_USER'
	];

	public function tipe_user()
	{
		return $this->belongsTo(TipeUser::class, 'ID_TIPE_USER');
	}

	public function peserta_acaras()
	{
		return $this->hasMany(PesertaAcara::class, 'username');
	}
}
