<?php
return array(
    'Lysine\Application' => './mvc/application.php',
    'Lysine\Config' => './core.php',
    'Lysine\IStorage' => './interfaces.php',
    'Lysine\ORM' => './orm/orm.php',
    'Lysine\ORM\ActiveRecord' => './orm/activerecord/abstract.php',
    'Lysine\ORM\ActiveRecord\DBActiveRecord' => './orm/activerecord/db.php',
    'Lysine\ORM\ActiveRecord\MongoActiveRecord' => './orm/activerecord/mongo.php',
    'Lysine\ORM\DataMapper\DBData' => './orm/datamapper/data/db.php',
    'Lysine\ORM\DataMapper\DBMapper' => './orm/datamapper/mapper/db.php',
    'Lysine\ORM\DataMapper\Data' => './orm/datamapper/data.php',
    'Lysine\ORM\DataMapper\IData' => './orm/datamapper/data.php',
    'Lysine\ORM\DataMapper\Mapper' => './orm/datamapper/mapper.php',
    'Lysine\ORM\DataMapper\Meta' => './orm/datamapper/meta.php',
    'Lysine\ORM\DataMapper\MetaInspector' => './orm/datamapper/meta.php',
    'Lysine\ORM\DataMapper\MongoData' => './orm/datamapper/data/mongo.php',
    'Lysine\ORM\DataMapper\MongoMapper' => './orm/datamapper/mapper/mongo.php',
    'Lysine\ORM\IActiveRecord' => './orm/activerecord/abstract.php',
    'Lysine\Request' => './mvc/request.php',
    'Lysine\Request_Exception' => './mvc/request.php',
    'Lysine\Response' => './mvc/response.php',
    'Lysine\Response_Redirect' => './mvc/response.php',
    'Lysine\Router' => './mvc/router.php',
    'Lysine\Router_Abstract' => './mvc/router.php',
    'Lysine\Storage\Cache' => './storage/cache/abstract.php',
    'Lysine\Storage\Cache\Apc' => './storage/cache/apc.php',
    'Lysine\Storage\Cache\Eaccelerator' => './storage/cache/eaccelerator.php',
    'Lysine\Storage\Cache\Memcached' => './storage/cache/memcached.php',
    'Lysine\Storage\Cache\Xcache' => './storage/cache/xcache.php',
    'Lysine\Storage\DB' => './storage/db/db.php',
    'Lysine\Storage\DB\Adapter' => './storage/db/adapter.php',
    'Lysine\Storage\DB\Adapter\Mysql' => './storage/db/adapter/mysql.php',
    'Lysine\Storage\DB\Adapter\Pgsql' => './storage/db/adapter/pgsql.php',
    'Lysine\Storage\DB\Adapter\Sqlite' => './storage/db/adapter/sqlite.php',
    'Lysine\Storage\DB\Exception' => './storage/db/db.php',
    'Lysine\Storage\DB\Expr' => './storage/db/expr.php',
    'Lysine\Storage\DB\IAdapter' => './interfaces.php',
    'Lysine\Storage\DB\IResult' => './interfaces.php',
    'Lysine\Storage\DB\Result' => './storage/db/result.php',
    'Lysine\Storage\DB\Select' => './storage/db/select.php',
    'Lysine\Storage\Mongo' => './storage/mongo.php',
    'Lysine\Storage\Pool' => './storage/pool.php',
    'Lysine\Utils\Events' => './utils/events.php',
    'Lysine\Utils\ILogger' => './interfaces.php',
    'Lysine\Utils\Injection' => './utils/injection.php',
    'Lysine\Utils\Logger' => './utils/logger.php',
    'Lysine\Utils\Registry' => './utils/registry.php',
    'Lysine\Utils\Set' => './utils/set.php',
    'Lysine\Utils\Singleton' => './utils/singleton.php',
    'Lysine\View' => './mvc/view.php',
);