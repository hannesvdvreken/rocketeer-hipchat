<?php
namespace Rocketeer\Plugins\Hipchat;

use Illuminate\Container\Container;

class Notifier extends \Rocketeer\Plugins\Notifier
{
    /**
     * Get the default message format
     *
     * @return string
     */
    protected function getMessageFormat()
    {
        return $this->app['config']->get('rocketeer-hipchat::config.message');
    }

    /**
     * Send a deploy notification.
     * 
     * @param  string $message
     * @return 
     */
    public function send($message)
    {
        // Get hipchat notifier.
        $hipchat = $this->app['hipchat'];

        // Get configuration.
        $config = $this->app['config'];

        // Do some work to figure out the defaults.
        $room = $config->get('rocketeer-hipchat::config.room') ?: $config->get('hipchat::config.default');
        $color = $config->get('rocketeer-hipchat::config.color') ?: $config->get('hipchat::config.color');

        // Make the hipchat request.
        return $hipchat->notifyIn($room, $message, $color);
    }
}