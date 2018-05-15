<?php namespace Bantenprov\TarifPelayananKesehatan\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\TarifPelayananKesehatan\Facades\TarifPelayananKesehatan;
use Bantenprov\TarifPelayananKesehatan\Models\TarifPelayananKesehatanModel;

/**
 * The TarifPelayananKesehatanController class.
 *
 * @package Bantenprov\TarifPelayananKesehatan
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TarifPelayananKesehatanController extends Controller
{
    public function demo()
    {
        return TarifPelayananKesehatan::welcome();
    }
}
