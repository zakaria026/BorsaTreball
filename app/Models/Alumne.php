<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumne extends Model
{
    protected $table = 'Alumnes';
    protected $primaryKey = 'alumne_id';
    protected $fillable = [
        'nom', 'primer_cognom', 'segon_cognom', 'dni', 'adreca', 'codi_postal', 'municipi',
        'provincia', 'data_naixement', 'primer_telefon', 'segon_telefon',
        'carnet_conduir', 'idioma1', 'idioma2', 'idioma3', 'idioma4', 'observacions', 'codi_acces',
        'usuari_id'
    ];

    public function usuari()
    {
        return $this->belongsTo('App\Models\Usuari', 'usuari_id');
    }

    public function estudis()
    {
        return $this->belongsToMany(Estudi::class, 'AlumnesEstudis', 'alumne_id', 'estudi_id');
    }

    public function ofertes()
    {
        return $this->belongsToMany(Oferta::class, 'AlumnesOfertes', 'alumne_id', 'oferta_id');
    }

    public $timestamps = true;
}
