<?php
/**
 * Created by PhpStorm.
 * User: G
 * Date: 2020/11/24
 * Time: 16:32
 */
use think\facade\Route;
Route::get('think', function () {
    return 'hello,ThinkPHP6!';
});
