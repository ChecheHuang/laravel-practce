<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email {user} {--queue}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a eMail';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
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
}
