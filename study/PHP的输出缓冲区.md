**系统输出缓冲区**

            php的系统输出缓存区在5.2之前是默认关闭的，在5.3之后是默认开启的，
        通过output_buffering的值来控制。如果开启则在PHP的header头之前输出也不会报错。
        比如：11111<?php ; ,  此时PHP不会报错。


**内容输出缓冲区**
        
         PHP的用户内容输出缓存区是通过ob_start() 打开的。       
        
        
        
        
        

         
                