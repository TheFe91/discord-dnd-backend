<?php


namespace AppBundle\Services;

use Psr\Container\ContainerInterface;

class ConnectionService
{
    public static function getConnection(ContainerInterface $container): \Pdo
    {
        $dsn = "mysql:host=" . $container->getParameter("database_host") . ";dbname=" . $container->getParameter("database_name");
        $connection = new \Pdo($dsn, $container->getParameter("database_user"), $container->getParameter("database_password"), array());
        $connection->setAttribute(\PDO::ATTR_TIMEOUT, '300');
        $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(\PDO::MYSQL_ATTR_LOCAL_INFILE, true);

        return $connection;
    }
}