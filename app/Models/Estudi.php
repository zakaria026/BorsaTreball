<?php
/*
Aquest model ens permet insertar estudis en la base de dades i a mes a mes cercar els alumnes i les ofertes relacionades amb aquests estudis
*/
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Estudi extends Model
{
    protected $table = 'Estudis';
    protected $primaryKey = 'estudi_id';
    protected $fillable = ['nom', 'descripcio'];

    public function alumnes()
    {
        return $this->belongsToMany(Alumne::class, 'AlumnesEstudis', 'estudi_id', 'alumne_id');
    }

    public function ofertes()
    {
        return $this->belongsToMany(Oferta::class, 'OfertesEstudis', 'estudi_id', 'oferta_id');
    }

    public $timestamps = true;
}