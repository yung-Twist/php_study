-- date类型：
-- 表示日期，格式类似这样：'0000-00-00'

-- time类型：
-- 表示时间，格式类似这样：'00:00:00'

-- datetime类型：
-- 表示日期时间，格式类似这样：'0000-00-00 00:00:00'

-- timestamp类型：
-- 表示“时间戳”，其实就是一个整数数字，该数字是从是“时间起点”到现在为止的“秒数”。
-- “时间起点”是：1970-1-1 0:0:0
-- timestamp类型的字段，无需插入数据，而是会自动取得当前的日期时间（表示当前时刻）。
-- 而且，此类型字段会在数据被更新时，也同样自动取得当前的日期时间（表示修改的时刻）。
-- 特别总结：它在insert或update某行数据的时候，能够自动获得当前时间。

-- year类型：
-- 表示年份，格式为：'0000'
create table time1 (
    t_time time,
    t_date date,
    t_datetime datetime,
    t_timestamp timestamp DEFAULT CURRENT_TIMESTAMP  ,
    t_year year
);
insert into time1 (t_time,t_date,t_datetime,t_year) values ('10:23:22','2020-10-11',now(),'2009');