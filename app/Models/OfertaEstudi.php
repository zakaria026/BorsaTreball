<?php
/*
aquest model ens permet fer la relacio entre la entitat de Ofertes i estudis
*/

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class OfertaEstudi extends Model
{
    protected $table = 'OfertaEstudis';
    protected $primaryKey = ['oferta_id', 'estudi_id']; // Composite primary key
    public $timestamps = false;

    protected $fillable = ['oferta_id', 'estudi_id'];

    public function oferta()
    {
        return $this->belongsTo(Oferta::class, 'oferta_id');
    }

    public function estudi()
    {
        return $this->belongsTo(Estudi::class, 'estudi_id');
    }
}
