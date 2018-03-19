**1.常用的字符串函数**
    
    left()        从左边截取指定的字符串
        select LEFT('My name is Huyueyang', 2) as str;
        结果：My
   &nbsp;
    
    right()       从右边截取指定的字符串
    select LEFT('My name is Huyueyang', 4) as str;
    结果：yang
    
  &nbsp;
  
    trim()        去掉字符串两边的空白
    select TRIM('  My name is Huyueyang ') as str;
    select TRIM(LEADING 'hyy' FROM 'hyyMy name is Huyueyang') as str;
    select TRIM(BOTH 'z' FROM 'zMzy nzame zis zHuyueyang') as str;
    结果：My name is Huyueyang
    
    
  &nbsp;
    
  
   参考[MySQL字符串连接函数]('https://imajinyun.xyz/2018/01/20/mysql-string-functions/')
    
    
       

