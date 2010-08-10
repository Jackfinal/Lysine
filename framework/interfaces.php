<?php
namespace Lysine {
    /**
     * 缓存类接口
     *
     * @package base
     * @author yangyi <yangyi@surveypie.com>
     */
    interface ICache {
        /**
         * 保存缓存
         *
         * @param string $key
         * @param mixed $val
         * @param integer $life_time
         * @access public
         * @return boolean
         */
        public function set($key, $val, $life_time = null);

        /**
         * 批量保存
         *
         * @param array $data
         * @param mixed $life_time
         * @access public
         * @return boolean
         */
        public function mset(array $data, $life_time = null);

        /**
         * 读取缓存
         *
         * @param string $key
         * @access public
         * @return mixed
         */
        public function get($key);

        /**
         * 批量读取
         *
         * @param array $keys
         * @access public
         * @return array
         */
        public function mget(array $keys);

        /**
         * 删除缓存
         *
         * @param string $key
         * @access public
         * @return boolean
         */
        public function delete($key);

        /**
         * 批量删除
         *
         * @param array $key
         * @access public
         * @return boolean
         */
        public function mdelete(array $key);
    }
}

namespace Lysine\Db {
    /**
     * 数据库连接类接口
     * 实现了此接口就可以在Lysine内涉及数据库操作的类里通用
     *
     * @package DB
     * @author yangyi <yangyi.cn.gz@gmail.com>
     */
    interface IAdapter {
        /**
         * 构造函数
         *
         * @param string $dsn
         * @param string $user
         * @param string $pass
         * @param array $options
         * @access public
         * @return void
         */
        public function __construct($dsn, $user, $pass, array $options = array());

        /**
         * 返回实际的数据库连接句柄
         *
         * @access public
         * @return mixed
         */
        public function getHandle();

        /**
         * 开始事务
         *
         * @access public
         * @return void
         */
        public function begin();

        /**
         * 回滚事务
         *
         * @access public
         * @return void
         */
        public function rollback();

        /**
         * 提交事务
         *
         * @access public
         * @return void
         */
        public function commit();

        /**
         * 执行sql语句并返回IResult实例
         * 如果此adapter要使用Lysine db select和active record
         * 就必须返回IResult才行
         *
         * @param string $sql
         * @param mixed $bind
         * @access public
         * @return Lysine\Db\IResult
         */
        public function execute($sql, $bind = null);

        /**
         * 生成查询助手类
         *
         * @param string $table_name
         * @access public
         * @return Lysine\Db\Select
         */
        public function select($table_name);

        /**
         * 插入一条数据到指定的表
         * 返回affected row count
         *
         * @param string $table_name
         * @param array $row
         * @access public
         * @return integer
         */
        public function insert($table_name, array $row);

        /**
         * 根据条件更新指定的表
         * 返回affected row count
         *
         * @param string $table_name
         * @param array $row
         * @param string $where
         * @param mixed $bind
         * @access public
         * @return integer
         */
        public function update($table_name, array $row, $where, $bind = null);

        /**
         * 根据条件删除指定的数据
         * 返回affected row count
         *
         * @param string $table_name
         * @param string $where
         * @param mixed $bind
         * @access public
         * @return integer
         */
        public function delete($table_name, $where, $bind = null);

        /**
         * 获得表名字的完全限定名
         *
         * @param string $table_name
         * @access public
         * @return string
         */
        public function qtab($table_name);

        /**
         * 获得字段名字的完全限定名
         *
         * @param string $column_name
         * @access public
         * @return string
         */
        public function qcol($column_name);

        /**
         * 对数据进行安全逃逸处理
         *
         * @param mixed $val
         * @access public
         * @return mixed
         */
        public function qstr($val);

        /**
         * 获得指定表的指定字段最后一次自增长的值
         *
         * @param string $table_name
         * @param string $column
         * @access public
         * @return integer
         */
        public function lastId($table_name = null, $column = null);
    }

    /**
     * 数据库查询结果类接口
     * 这个类不应该被程序直接掉用
     * 应该是被IAdapter execute()方法生成
     *
     * @package DB
     * @author yangyi <yangyi.cn.gz@gmail.com>
     */
    interface IResult {
        /**
         * 获得一行数据
         *
         * @access public
         * @return array
         */
        public function getRow();

        /**
         * 获得指定列的数据
         *
         * @param int $col_number
         * @access public
         * @return mixed
         */
        public function getCol($col_number = 0);

        /**
         * 获得指定列的所有数据
         *
         * @param int $col_number
         * @access public
         * @return array
         */
        public function getCols($col_number = 0);

        /**
         * 获得所有数据
         *
         * @param string $col
         * @access public
         * @return array
         */
        public function getAll($col = null);
    }
}
