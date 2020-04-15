-- any关键字
select * from product where chandi = '北京' && price > any(
    select price from product where chandi = '深圳'
);
-- all关键字
select * from product where chandi = '北京' && price > all(
    select price from product where chandi = '深圳'
);

select * from product where chandi = '北京' && price > (
    select max(price) from product where chandi = '深圳'
);