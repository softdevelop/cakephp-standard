<?php
//list user
Router::connect('/admin/users', array('plugin' => 'admin', 'controller' => 'users', 'action'=>'index'));
//login
Router::connect('/users/login', array('plugin' => 'admin', 'controller' => 'users', 'action' => 'login'));
Router::connect('/admin/users/login', array('admin'=>true, 'plugin' => 'admin', 'controller' => 'users', 'action' => 'login'));
//logout
Router::connect('/users/logout', array('plugin' => 'admin', 'controller' => 'users', 'action' => 'logout'));
Router::connect('/admin/users/logout', array('admin'=>true, 'plugin' => 'admin', 'controller' => 'users', 'action' => 'logout'));
//user action
Router::connect('/admin/users/add', array('plugin' => 'admin', 'controller' => 'users', 'action'=>'add'));
Router::connect('/admin/users/view/*', array('plugin' => 'admin', 'controller' => 'users', 'action'=>'view'));
Router::connect('/admin/users/edit/*', array('plugin' => 'admin', 'controller' => 'users', 'action'=>'edit'));
Router::connect('/admin/users/delete/*', array('plugin' => 'admin', 'controller' => 'users', 'action'=>'delete'));
Router::connect('/admin/users/toggle/*', array('plugin' => 'admin', 'controller' => 'users', 'action'=>'toggle'));

//list group
Router::connect('/admin/groups', array('plugin' => 'admin', 'controller' => 'groups', 'action'=>'index'));
//groups action
Router::connect('/admin/groups/add', array('plugin' => 'admin', 'controller' => 'groups', 'action'=>'add'));
Router::connect('/admin/groups/edit/*', array('plugin' => 'admin', 'controller' => 'groups', 'action'=>'edit'));
Router::connect('/admin/groups/delete/*', array('plugin' => 'admin', 'controller' => 'groups', 'action'=>'delete'));

//list permissions
Router::connect('/admin/user_permissions', array('plugin' => 'admin', 'controller' => 'user_permissions', 'action'=>'index'));
?>
