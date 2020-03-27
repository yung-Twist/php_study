/*
    建表：
    create  table  表名 (
    字段名  字段类型  [字段属性],
    字段名  字段类型  [字段属性],
    ......
    ) [ charset=编码名称]  [engine=表类型名称]；
    表类型名称可用的也就几个，比如： InnoDB（默认的）, MyIsam,  BDB,  memory, 
    显示所有表：
    show  tables;

    显示某个表的创建语句：
    show  create  table  表名；

    显示某个表的结构：
    desc  表名；
*/
删除表：
drop  table  表名；
create table table1(id int, name varchar(10), sex char(1), age int);
create table info(
    id int,
    title varchar(20),
    email varchar(29),
    content text
)
charset utf8
engine MyIsam;-- 默认InnoDB

-- 添加字段：
-- alter  table  表名  add  字段名  字段类型  [字段属性...]  [after 某字段名 或first]
-- after 某字段名：意思是，新加的字段，放在该现有字段的后面；
-- first：表示新加的字段放在第一位（最前面）
alter table info add salary float ;
alter table table1 add edu varchar(5) after name;

-- 修改字段
-- alter  table  表名  change  旧字段名  新字段名  字段类型  [字段属性...]；
-- 如果不修改字段名，而只修改字段的其他信息，则可以使用：
-- alter  table  表名  modify  要修改的字段名  字段类型  [字段属性...]；
alter table info change salary grade varchar(3);
alter table table1 modify edu varchar(20);
-- 删除字段
-- alter  table  表名  drop  要删除的字段名；
-- 修改表明
-- alter  table  表名  rename  新的表名；