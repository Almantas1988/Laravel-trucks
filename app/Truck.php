<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

/**
 * @method static sortable()
 */
class Truck extends Model
{
    use Sortable;

    protected $table = "trucks";

    protected $fillable = [
        'marke'
    ];

    public $sortable = ['marke', 'gamybos_metai',
        'savininko_vardas_pavarde', 'savininku_skaicius', 'komentarai'];


}
