select a.area_name, b.area_name from area as a join area as b 
on a.id = b.parent_id;