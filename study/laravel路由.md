**Laravel路由**
    
路由是laravel框架的重要组成部分
    
**基本路由**
    
一个简单的闭包路由：
    <?php
    
        Route::get('/hello', function(){
            return 'Hello Laravel!';
        });

**默认路由文件**
    
自laravel5.3开始，所有的的路由都定义在routes目录下的路由文件中，路由文件通过框架自动加载。routes/web.php文件定义web界面路由，这些路由被分配给web中间件组，从而可以提供session和csrf功能。routes/api.php中的路由是无状态的，被分配到api中间件组（我们写的接口的路由定义在这个文件中）。
一般情况，我们访问的路由定义在routes/web.php文件，如果我们访问http://xxx.yyy/users,就会访问：
    
    <?php
        Route::get('/users', 'UsersController@index');
        
如果访问routes/web接口路由，访问的路径是：http://xxx.yyy/api/users，这是因为Laravel在RouteServiceProvider文件中默认添加api前缀，这个前缀我们可以自定义。

**路由方法**

我们可以注册路由来响应HTTP请求:
    
    <?php
        Route::get('/hello', function() {
            return 'Hello Laravel';
        });
        
        Route::post('/hello', function() {
            return 'Hello Laravel';
        });
        
       Route::put('/hello', function() {
            return 'Hello Laravel';
        });
        
       Route::patch('/hello', function() {
            return 'Hello Laravel';
        });
        
       Route::delete('/hello', function() {
            return 'Hello Laravel';
        });
        
       Route::options('/hello', function() {
            return 'Hello Laravel';
        });
        
我们还可以通过match方法来注册路由响应多个HTTP请求，或者使用any方法注册一个路由响应所有HTTP请求：

        Route::match(['get', 'post'], '/', function() {
             return 'Hello Laravel!';
        });
        
        Route::any('hello', function(){
            return 'Hello Laravel!';
        });
        
如果路由只需要返回一个视图，可以使用Route::view方法：
    
    <?php
        Route::view('/hello', 'hello');
        
        Route::view('/hello', 'hello', ['name' => 'Laravel']);

这时需要建一个hello.blade.php文件     

**路由参数**

路由参数：

    <?php
        Route::get('user/{id}', function($id) {
            return '我的ID是' . $id;
        });
        
        Route::get('users/{id}/name/{$name}', function($id, $name) {
            
        });
        
我们也可以使用 ? 来把参数变为可选的：
    <?php
        Route::get('user/{id?}', function ($id = null) {
            return $id;
        });
        
 
        
**路由约束**

使用where方法来局部约束路由中的参数：
    
    <?php
        
        Route::get('hello/{$content}', function($cotent) {
            return $cotent
        })->where('content', '[A-Za-Z]+');
        
        Route::get('hello/{$content}', function($cotent) {
            return $cotent
        })->where(['content' => '[\w]+']);

如果希望路由参数始终受给定正则表达式的约束，就需要对参数进行全局约束，可将路由模式定义在 RouteServiceProvider 类的 boot 方法中

    <?php
    
    
    public function boot()
    {
        Route::pattern('content', '[\w]+');
    
        parent::boot();
    }

**命名路由**

可以使用 name 方法来为路由指定一个别名：

     <?php
            
        Route::get('hello/laravel', function() {
            return 'Hello Laravel';
        })->name('laravel');

**路由组**

    路由组的目的是在多个路由中共享一些路由属性，如：中间件、别名、命名空间等，相关方法在group之前调用：
    
        
        <?php
        
            Route::middleware(['first'])->group(function () {
                Route::get('/', function() {
                });
                
                Route::get('user', 'UserController@index');
            });
            
            Route::namespace('Admin')->group(function() {
                //控制器在 APP\Http\Controllers\Admin 命名空间下
            });
            
**命名前缀**

可以使用 prefix 方法为路由指定一个前缀：
    
    <?php
    
        Route::prefix('admin')->group(function() {
            Route::get('users', function() {
                // 匹配 /admin/users
            });
        });
