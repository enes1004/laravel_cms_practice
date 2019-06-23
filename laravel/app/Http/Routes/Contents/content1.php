<?php

Route::get('/content1/{content_id}', 'Contents\Content1Controller@index')
->where('content_id','[0-9]+');



?>
