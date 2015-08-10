1、修改env文件中的数据库地址（怎么区分不同环境？）
2、建立php artisan make:migration create_test_page_info_table --table=test_page_info
3、修改跳转的地址RedirectIfAuthenticated 里的home为index
4、执行php artisan migrate 创建表
5、常用命令
   a、建立新的orm
   	php artisan make:migration create_user_had_product --create=user_had_product （会在database/migrations下面建立orm模型）
   b、建立模型
   	php artisan make:model models/userHadProduct
   c、填充model
   	