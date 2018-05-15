<?php namespace Bantenprov\TarifPelayananKesehatan\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The TarifPelayananKesehatan facade.
 *
 * @package Bantenprov\TarifPelayananKesehatan
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TarifPelayananKesehatan extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tarif-pelayanan-kesehatan';
    }
}
