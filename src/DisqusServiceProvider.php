<?php namespace Codecasts\Disqus;

use Illuminate\Support\ServiceProvider;

class DisqusServiceProvider extends ServiceProvider
{
    protected $shortname;

    public function boot()
    {
        $this->publishes([__DIR__.'/config/disqus.php' => config_path('disqus.php')]);
        $this->loadViewsFrom(__DIR__.'/resources/views', 'disqus');
        $this->shortname = config('disqus.shortname');
    }

    public function register()
    {
        $this->app->singleton('disqus', function() {
            return new Disqus($this->shortname);
        });
    }
}
