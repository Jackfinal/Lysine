<?php
/**
 * 缓存类接口
 * 采用统一的接口便于封装cache frontend类
 *
 * @author yangyi <yangyi@surveypie.com>
 */
interface Ly_Cache_Interface {
    /**
     * 保存缓存数据
     *
     * @param string $key
     * @param mixed $val
     * @param integer $life_time
     * @access public
     * @return boolean
     */
    public function set($key, $val, $life_time = null);

    /**
     * 获得缓存数据
     *
     * @param string $key
     * @access public
     * @return mixed
     */
    public function get($key);

    /**
     * delete
     *
     * @param string $key
     * @access public
     * @return boolean
     */
    public function delete($key);
}
