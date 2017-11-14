<?php

//ADMIN
// Index
$router->get('admin', 'Admin\AdminController@index');

// Feedback
$router->get('admin/feedback', 'Admin\FeedbackController@index');
$router->get('admin/feedback/delete', 'Admin\FeedbackController@delete');
$router->post('admin/feedback/reply', 'Admin\FeedbackController@reply');
$router->post('admin/feedback/searchFeedback', 'Admin\FeedbackController@searchFeedback');

// Login
$router->get('login', 'Admin\LoginController@index');
$router->post('login', 'Admin\LoginController@login');

// Logout
$router->get('logout', 'Admin\LoginController@logout');

// Register

$router->post('register', 'Admin\RegisterController@register');

// User
$router->get('admin/user', 'Admin\UserController@index');
$router->get('admin/user/add', 'Admin\UserController@addUser');
$router->post('admin/user/add', 'Admin\UserController@storeUser');
$router->post('admin/user/checkUser', 'Admin\UserController@checkUser');
$router->get('admin/user/edit', 'Admin\UserController@editUser');
$router->post('admin/user/edit', 'Admin\UserController@updateUser');
$router->get('admin/user/del', 'Admin\UserController@deleteUser');

//loadImages
$router->post('user/loadimage', 'UserController@loadImages');

// Forgot Password
$router->get('forgot', 'Admin\LoginController@viewForgotPassword');
$router->post('forgot', 'Admin\LoginController@forgotPassword');
//Search
$router->post('admin/user/searchUser', 'Admin\UserController@searchUser');

$router->post('admin/shop/searchShop', 'Admin\ShopController@searchShop');

// shop
$router->get('admin/shop', 'Admin\ShopController@index');
$router->get('admin/shop/add', 'Admin\ShopController@add');
$router->post('admin/shop/add', 'Admin\ShopController@addPost');
$router->get('admin/shop/edit', 'Admin\ShopController@edit');
$router->post('admin/shop/edit', 'Admin\ShopController@editPost');
$router->get('admin/shop/del', 'Admin\ShopController@delete');
//comment
$router->get('admin/shop/comment', 'Admin\ShopController@loadComments');
$router->get('admin/shop/comment/del', 'Admin\ShopController@deleteComment');

//ajax
$router->post('admin/shop/ajaxDiscount', 'Admin\ShopController@ajaxDiscount');
$router->post('shop/ajaxSave', 'Publics\ShopController@ajaxSave');
$router->post('shop/ajaxUnsave', 'Publics\ShopController@ajaxUnsave');
$router->post('shop/ajaxComment', 'Publics\ShopController@ajaxComment');
// Category
$router->get('admin/type', 'Admin\TypeController@index');
$router->get('admin/type/add', 'Admin\TypeController@add');
$router->post('admin/type/add', 'Admin\TypeController@addType');
$router->get('admin/type/edit', 'Admin\TypeController@edit');
$router->post('admin/type/edit', 'Admin\TypeController@editType');
$router->get('admin/type/delete', 'Admin\TypeController@deleteType');

// PUBLIC
// Home

//shop
$router->get('shop', 'Publics\ShopController@index');
$router->post('shop/rate', 'Publics\ShopController@rate');
$router->post('shop/updateRate', 'Publics\ShopController@updateRate');

$router->get('', 'Publics\HomeController@index');

// Profile

$router->get('profile', 'Publics\UserController@index');
$router->post('editUserInfo', 'Publics\UserController@editUser');
$router->get('editUserPassword', 'Publics\UserController@viewEditPassword');
$router->post('editUserPassword', 'Publics\UserController@editUserPassword');
$router->post('profile', 'Publics\UserController@editUserImage');
$router->get('saveShop', 'Publics\UserController@viewSaveShop');

// Contact
$router->get('contact', 'Publics\ContactController@index');
$router->post('contact/create', 'Publics\ContactController@create');

// Search
$router->get('search', 'Publics\SearchController@index');
$router->get('search/shop', 'Publics\SearchController@search');
