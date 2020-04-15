
select count(*) as '数量', avg(price) as '均价' from (
    select * from product where price > 4000
) as p;
-- 或者
select count(*) as '数量', avg(price) as '均价' from product where price > 4000;