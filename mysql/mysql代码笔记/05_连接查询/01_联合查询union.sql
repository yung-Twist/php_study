select * from join1
union
select * from join2;

select id, f2 from join1
union
select id2, c2 from join2;

-- 消除重复行（默认消除）
select f1 from join1
union all
select c1 from join2;