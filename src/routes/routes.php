<?php

Route::group(['prefix' => '/'], function() {
    Route::resource('tarif-pelayanan-kesehatan', 'Bantenprov\TarifPelayananKesehatan\Http\Controllers\TarifPelayananKesehatanController');
});
