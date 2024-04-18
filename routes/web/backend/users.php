<?php

Route::resource('users', 'UserController')->except(['destroy']);
