<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 12/26/2018
 * Time: 10:20 PM
 */

class gioHang
{
    var $listSanPham;

    public function them($sanPham)
    {
        $this->listSanPham[] = $sanPham;
    }
    public function count()
    {
        $n = count($this->listSanPham);
        return $n;
    }
    public function xoa()
    {

    }

    public function __construct()
    {
        $this->listSanPham = array();
    }
}