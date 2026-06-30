<?php
/*
aquest model ens permet fer la relacio entre la entitat de Alumnes i ofertes
*/
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AlumneOferta extends Model
{
    protected $table = 'AlumnesOfertes';
    protected $primaryKey = 'id'; // Composite primary key
    public $timestamps = true;

    protected $fillable = ['alumne_id', 'oferta_id', 'data_interes', 'vist_empresa' ];

    public function alumne()
    {
        return $this->belongsTo(Alumne::class, 'alumne_id');
    }

    public function oferta()
    {
        return $this->belongsTo(Oferta::class, 'oferta_id');
    }
}