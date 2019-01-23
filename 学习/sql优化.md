**1.** 对查询进行优化，尽量避免全表扫描，首先应考虑在where及order by 涉及的列上建立索引。

**2.** 应尽量避免在where子句中使用!=或<>操作符，否则将引擎放弃使用索引而进行全表扫描。

**3.** 尽量避免在where子句中对字段进行null值判断，否则否则将引擎放弃使用索引而进行全表扫描，比如：
select id from user where age is null ,可以在age字段上设置默认值0，确保age列中没有空值，然后：
select id from user where age = 0。

**4.** 尽量避免在where子句中使用or来连接条件，否则将导致引擎放弃使用索引而进行全表扫描，如：
select id from user where age = 5 or age = 10;
 可以改成：select id from user where age = 5 union all select id from user where age = 10; 
 
 **5.** 要慎用in和not in，否则会导致全表扫描，比如：select id form user where age in (6, 7, 8);连续的数值，能用between就不要用in，可以写成：select id from user where age between 1 and 3。
 
 **6.** 尽量避免在where子句中对字段进行表达式、函数操作，这将导致引擎放弃使用索引而进行全表扫描。如：select id from user where age/2 = 5应写成select id from user where age = 5*2;
 
 **7.** 可以使用exists代替in：select name from user_a where name in (select name from user_b)可以改成：select name form user_a where name exists(select 1 from user_b where name = user_a.name);
