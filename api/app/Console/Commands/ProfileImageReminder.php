<?php

namespace App\Console\Commands;

use App\Models\Client;
use App\Notifications\Clients\ProfileReminder;
use Illuminate\Console\Command;

class ProfileImageReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'profile:reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'However, if a profile image isn\'t available for a client, the client should get a notification every 3 days to drop their passport photograph with Law Firm X';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        Client::query()->whereNull('profile_image')
            ->cursor()
            ->each(function (Client $client) {
                $client->notify(new ProfileReminder());
            });
        return 0;
    }
}
