<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class SqlNote extends Controller{
    /**
     * 表名
     * @var 
     */
    const TABLE_NAME='test';
    const SQL_STATEMENT='select * from '.self::TABLE_NAME;

    public function index()
    {
    }

    /**
     * 执行一条SQL语句
     * 返回更变的行数
     */
    public function executeNote()
    {
        $result= Db::execute(self::SQL_STATEMENT);

        echo "结果：改变了 $result 条数据";
        dump($result);
    }

    /**
     * 查询一条SQL语句
     * 返回查询的结果
     */
    public function queryNote()
    {
        $result= Db::query(self::SQL_STATEMENT);

        dump($result);
    }

    /**
     * 查询一条SQL语句
     * 返回查询的结果
     */
    public function tableNote()
    {
        // 等同于 select * from table
        $result= Db::table(self::TABLE_NAME)->select();

        dump($result);
    }


}