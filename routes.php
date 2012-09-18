<?php

Route::any('(:bundle)', 'pubnub::simplechat@index');
Route::any('(:bundle)/login', 'pubnub::simplechat@login');
Route::any('(:bundle)/logout', 'pubnub::simplechat@logout');