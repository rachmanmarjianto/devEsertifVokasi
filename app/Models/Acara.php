<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Acara
 * 
 * @property int $ID_ACARA
 * @property int $ID_TEMPLATE
 * @property int $ID_TINGKAT
 * @property int|null $ID_PRODI
 * @property int $ID_TAHUN_AKADEMIK
 * @property int $ID_JENIS_KEGIATAN
 * @property string $NAMA_ACARA
 * @property Carbon $TANGGAL_PENYELENGGARAAN
 * @property Carbon $TIMESTAMP
 * @property string|null $FILE_SERTIF
 * @property string $PENYELENGGARA
 * 
 * @property TahunAkademik $tahun_akademik
 * @property TemplateSertifikat $template_sertifikat
 * @property Prodi|null $prodi
 * @property Tingkat $tingkat
 * @property JenisKegiatan $jenis_kegiatan
 * @property Collection|PesertaAcara[] $peserta_acaras
 *
 * @package App\Models
 */
class Acara extends Model
{
	protected $table = 'acara';
	protected $primaryKey = 'ID_ACARA';
	public $timestamps = false;

	protected $casts = [
		'ID_TEMPLATE' => 'int',
		'ID_TINGKAT' => 'int',
		'ID_PRODI' => 'int',
		'ID_TAHUN_AKADEMIK' => 'int',
		'ID_JENIS_KEGIATAN' => 'int'
	];

	protected $dates = [
		'TIMESTAMP'
	];

	protected $fillable = [
		'ID_TEMPLATE',
		'ID_TINGKAT',
		'ID_PRODI',
		'ID_TAHUN_AKADEMIK',
		'ID_JENIS_KEGIATAN',
		'NAMA_ACARA',
		'TANGGAL_PENYELENGGARAAN',
		'TIMESTAMP',
		'FILE_SERTIF',
		'PENYELENGGARA'
	];

	public function tahun_akademik()
	{
		return $this->belongsTo(TahunAkademik::class, 'ID_TAHUN_AKADEMIK');
	}

	public function template_sertifikat()
	{
		return $this->belongsTo(TemplateSertifikat::class, 'ID_TEMPLATE');
	}

	public function prodi()
	{
		return $this->belongsTo(Prodi::class, 'ID_PRODI');
	}

	public function tingkat()
	{
		return $this->belongsTo(Tingkat::class, 'ID_TINGKAT');
	}

	public function jenis_kegiatan()
	{
		return $this->belongsTo(JenisKegiatan::class, 'ID_JENIS_KEGIATAN');
	}

	public function peserta_acaras()
	{
		return $this->hasMany(PesertaAcara::class, 'ID_ACARA');
	}
}
