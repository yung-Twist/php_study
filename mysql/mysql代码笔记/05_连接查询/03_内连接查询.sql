select * from product
inner join
product_type
on product.protype_id = product_type.protype_id
where product_type.protype_id=1;

select * from product as p
inner join
product_type as t
on p.protype_id = t.protype_id
where t.protype_id = 1 and p.price > 5000;

select pro_name, price, pinpai from product as p
inner join 
product_type as t
on p.protype_id = t.protype_id
where t.protype_name = '家用电器' and p.price > 5000;
