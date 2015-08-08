1、修改env文件中的数据库地址（怎么区分不同环境？）
2、建立php artisan make:migration create_test_page_info_table --table=test_page_info
3、修改跳转的地址RedirectIfAuthenticated 里的home为index
4、执行php artisan migrate 创建表