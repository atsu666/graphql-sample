<?php
/**
 * Created by PhpStorm.
 * User: atsu666
 * Date: 2017/04/07
 * Time: 9:08
 */

Relay::group(['namespace' => 'App\\GraphQL', 'middleware' => 'auth'], function () {
    Relay::group(['namespace' => 'Mutations'], function () {
        Relay::mutation('createUser', 'UpdatePassword');
    });

    Relay::group(['namespace' => 'Queries'], function () {
        Relay::query('userQuery', 'UserQuery');
    });

    Relay::group(['namespace' => 'Types'], function () {
        Relay::type('user', 'UserType');
    });
});
