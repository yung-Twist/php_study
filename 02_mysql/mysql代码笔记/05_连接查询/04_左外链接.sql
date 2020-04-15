-- 左外链接
select * from join1 left join join2
on join1.f1 = join2.c1;

select protype_name, pro_name, price, pinpai from product_type as t 
    left join product as p on t.protype_id = p.protype_id;

-- 右外链接
select * from join1 right join join2
on join1.f1 = join2.c1;