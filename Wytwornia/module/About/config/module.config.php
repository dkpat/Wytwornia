<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
     'controllers' => array(
         'invokables' => array(
             'About\Controller\About' => 'About\Controller\AboutController',
         ),
     ),
    
    'router' => array(
         'routes' => array(
             'about' => array(
                 'type'    => 'segment',
                 'options' => array(
                     'route'    => '/about[/:action][/:id]',
                     'constraints' => array(
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                         'id'     => '[0-9]+',
                     ),
                     'defaults' => array(
                         'controller' => 'About\Controller\About',
                         'action'     => 'index',
                     ),
                 ),
             ),
         ),
     ),
    
     'view_manager' => array(
         'template_path_stack' => array(
             'about' => __DIR__ . '/../view',
         ),
     ),
 );