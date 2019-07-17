<?php

Route::get('/content/{content_id}', 'Contents\ContentController@index')
->where('content_id','[0-9]+');



?>
