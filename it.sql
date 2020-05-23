insert into lu (listid,userid) select distinct 333,userid from stm where count > 2 and userid not in (select userid from lu where listid=333);  
insert into lu (listid,userid) select distinct 323,userid from stm where count > 4 and userid not in (select userid from lu where listid=323);
