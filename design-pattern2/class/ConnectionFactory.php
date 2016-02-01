<?php

class ConnectionFactory {
    public function getConnection(){
        
        $config = parse_ini_file('connection.ini');
        if( $config['drive'] == 'mysql'){
            $db = mysqli_connect($config['host'],$config['user'],$config['pass'],$config['db']);
        } else if( $config['drive'] == 'postgree'){
            $db = pg_connect($config['host'],$config['user'],$config['pass'],$config['db']);
        } else {
            $db = null;
        }
        
        return $db;
    }
}

