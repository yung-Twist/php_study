select * from product where chandi in (
    select chandi from product where price > 4000
);