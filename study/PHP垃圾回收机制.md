**引用计数**

  每个PHP变量存在zval变量容器中，zval变量容器包括变量类型和值、is_ref（是个bool值）、refcount（表示指向这个zval变量容器的变量个数）。


        
        <?php
            
            $a = 123;
            
            xdebug_debug_zval('a');
           
  在上面例子中，会生成int类型和值为123的变量容器。
   安装Xdebug扩展后，调用xdebug_debug_zval()方法，会输出:
    
    a:(refcount=1, is_ref=false)=123;
    
    
当refcount = 0时，这个变量容器就会从内存中删除。
