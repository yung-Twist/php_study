select * from product where (pinpai,chandi) = (
    select pinpai,chandi from product where price = (
        select max(price) from product
    )
);