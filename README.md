# Artisan 命令

## 查看所有指令
```
php artisan list
```

## 幫助
```
php artisan help migrate
```

## 創建自己的命令
```
php artisan make:command SendEmails
```
//會在app/Console/Commands下
$signature 為 available commands(可加參數)
$description 為描述
handle為執行區塊(可讀參數)

## 閉包命令
直接在routes/console.php下加入
```php
Artisan::command('send:sms {user}', function ($user) {
    dd($user);
    //php artisan send:sms 123
})->purpose('send a sms to user');
```

## handle 方法
```php
 public function handle()
    {
        //獲取參數
        // $userId = $this->argument('user');
        // dd($userId);

        //php artisan send:email 123


        //獲取選項
        // $option = $this->option('queue');
        // dd($option);
        // php artisan send:email 123 --queue

        //獲取輸入
        // $name = $this->ask('What is your name?');
        // dd($name);

        //請求確認
        // if ($this->confirm('Do you wish to continue?')) {
        //     dd("yes");
        // }else{
        //     dd("no");
        // }

        //編寫輸出
        // $this->info('Display this on the screen');
        // $this->error('Something went wrong!');
        // $this->line('Display this on the screen');

        //表格佈局
        // $headers = ['Name', 'Email'];
        // $users = [
        //     ['Carl','carl@gmail.com'],
        //     ['Test','test@gmail.com']
        // ];
        // $this->table($headers, $users);

        // 進度條
        // $users =range(1,10);
        // $bar = $this->output->createProgressBar(count($users));
        // $bar->start();
        // foreach ($users as $user) {
        //     sleep(1);
        //     $bar->advance();
        // }
        // $bar->finish();

        return 0;
    }
```



