select * from product where price > (select avg(price) from product where chandi='北京');

select * from product where price > (
    select avg(price) from product where price > (
        select avg(price) from product
    )
);