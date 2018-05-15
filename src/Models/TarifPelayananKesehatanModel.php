<?php namespace Bantenprov\TarifPelayananKesehatan\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The TarifPelayananKesehatanModel class.
 *
 * @package Bantenprov\TarifPelayananKesehatan
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TarifPelayananKesehatanModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'tarif_pelayanan_kesehatan';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
