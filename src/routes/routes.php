<?php

Route::group(['prefix' => 'tarif-pelayanan-kesehatan'], function() {
    Route::get('demo', 'Bantenprov\TarifPelayananKesehatan\Http\Controllers\TarifPelayananKesehatanController@demo');
});
