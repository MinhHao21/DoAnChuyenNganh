<?php

namespace App\Providers;

use App\Models\Audio;
use App\Models\Caulacbo;
use App\Models\Disannghethuat;
use App\Models\Document;
use App\Models\Gopyvanban;
use App\Models\Lichcongtac;
use App\Models\Nghesynghenhan;
use App\Models\Post;
use App\Models\Video;
use App\Models\Thuvienanh;
use App\Models\Vanbangopy;
use App\Observers\AudioObserver;
use App\Observers\CaulacboObserver;
use App\Observers\DisannghethuatObserver;
use App\Observers\DocumentObserver;
use App\Observers\GopyvanbanObserver;
use App\Observers\LichcongtacObserver;
use App\Observers\NghesynghenhanObserver;
use App\Observers\PostObserver;
use App\Observers\ThuvienanhObserver;
use App\Observers\VanbangopyObserver;
use App\Observers\VideoObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
   
        Post::observe(PostObserver::class);
      
    }
}
