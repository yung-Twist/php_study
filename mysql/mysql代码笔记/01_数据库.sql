创建数据库：
create  database  数据库名  charset  编码名（推荐utf8）；
显示所有数据库：
show  databases  ；
显示某个数据库的创建语句：
show  create  database  数据库名；
删除数据库：
drop  database  数据库名；
修改某个数据库（的字符集和排序规则）
alter  database  数据库名   charset  新字符集名称   collate  新校对规则名；
使用（进入/选择）数据库：
use  数据库名；