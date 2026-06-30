<?php
/*
aquest model ens permet insertar ofertes a la base de dades  i tambe cercar totes les empreses, estudis, i alumnes relacionats amb aquestes ofertes
*/
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $table = 'Ofertes';
    protected $primaryKey = 'oferta_id';
    protected $fillable = [
        'empresa_id', 'horari', 'incorporacio', 'sou', 'edat', 'idioma1', 'idioma2',
        'idioma3', 'idioma4', 'tipus_contracte', 'caducitat_oferta', 'descripcio'
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }

    public function estudis()
    {
        return $this->belongsToMany(Estudi::class, 'OfertesEstudis', 'oferta_id', 'estudi_id');
    }

    public function alumnes()
    {
        return $this->belongsToMany(Alumne::class, 'AlumnesOfertes', 'oferta_id', 'alumne_id');
    }

    public $timestamps = true;
}
