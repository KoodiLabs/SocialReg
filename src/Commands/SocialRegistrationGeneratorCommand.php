<?php

namespace KoodiLabs\SocialReg\Commands;

use Illuminate\Console\Command;

class SocialRegistrationGeneratorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'koodilabs:scaffold {socialreg}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Social Registration feature.';

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
     * @return mixed
     */
    public function handle()
    {
        $src_path = 'app/Console/Commands/Contents/login-social.blade.php';
        $dst_path = 'resources/views/';
        shell_exec('cp '. $src_path .' '. $dst_path);
    }
}
