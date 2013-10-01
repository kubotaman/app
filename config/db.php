<?php
/**
 * Base Database Config.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
        'active' => 'testdb',

        /**
         * Base config, just need to set the DSN, username and password in env. config.
         */
        'default' => array(
                'type'        => 'pdo',
                'connection'  => array(
                        'persistent' => false,
                ),
                'identifier'   => '`',
                'table_prefix' => '',
                'charset'      => 'utf8',
                'enable_cache' => true,
                'profiling'    => false,
        ),

        'redis' => array(
                'default' => array(
                        'hostname'  => '127.0.0.1',
                        'port'      => 6379,
                )
        ),
        'testdb' => array(
            'type'   => 'mysql',
            'connection' => array(
                'hostname'   => 'localhost',
                'database'   => 'cas8rwl_aip',
                'username'   => 'cas8rwl_aip',
                'password'   => '7Th4udXS',
                'persistent' => FALSE,
            ),
            'table_prefix' => '',
            'charset'      => 'utf8',
            'caching'      => false,
            'profiling'    => true,
        ),

);
