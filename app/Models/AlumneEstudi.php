<?php
/*
aquest model ens permet fer la relacio entre la entitat de Alumnes i estudis*/

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AlumneEstudi extends Model
{
    protected $table = 'AlumnesEstudis';
    protected $primaryKey = ['alumne_id', 'estudi_id'];
    protected $fillable = ['alumne_id', 'estudi_id', 'any_finalitzacio'];

    public function alumne()
    {
        return $this->belongsTo(Alumne::class, 'alumne_id');
    }

    public function estudi()
    {
        return $this->belongsTo(Estudi::class, 'estudi_id');
    }

    public $timestamps = true;
}
