**什么是CGI**
    
    CGI是Common Gateway Interface的缩写，即通用网关接口。它是一段程序，运行在服务器上如：HTTP 服务器，提供同客户端 HTML 页面的接口。
    CGI工作原理：每个Http请求过来时，CGI都会fork一个新进程来进行处理（解析配置文件、初始化执行环境、处理请求），
    然后把出理结果通过web服务器返回给客户端，这个进程也随之退出，如果下次再有一个新的请求进来，会再次fork一个新进程进行处理。
    


**FastCGI**

    FastCGI 是 CGI 的升级版本，为了提升 CGI 的性能而生。FastCGI会先fork一个master主进程，解析配置文件，
    初始化执行环境，然后再fork多个worker进程，当有一个请求进来时，master主进程会把它传递给一个worker进程，
    然后可以立即接受下一个请求，避免了重复的初始化工作，效率大大提高。而且当 worker 进程不够用时，master 进程
    还可以根据配置预先启动几个 worker 进程等着；当空闲 worker 进程太多时，也会关掉一些，这样不仅提高了性能，还节约了系统资源。
    
    
**PHP-FPM**

    FastCGI 只是一个协议规范，需要每个语言具体去实现，PHP-FPM 就是 PHP 版本的 FastCGI 协议实现，有了它，就是实现 PHP 脚本
    与 Web 服务器（通常是 Nginx）之间的通信，同时它也是一个 PHP SAPI，从而构建起 PHP 解释器与 Web 服务器之间的桥梁。
   
    PHP-FPM 负责管理一个进程池来处理来自 Web 服务器的 HTTP 动态请求，在 PHP-FPM 中，master 进程负责与 Web 服务器进行通信，
    接收 HTTP 请求，再将请求转发给 worker 进程进行处理，worker 进程主要负责动态执行 PHP 代码，处理完成后，将处理结果返回给 
    Web 服务器，再由 Web 服务器将结果发送给客户端。这就是 PHP-FPM 的基本工作原理，