<?php
namespace App\Handlers\Layout;


class BaseHandler
{
    /**
     * Base layout applied to all views
     *
     * @param $event
     */
    public function handle($event)
    {
        /**
         * Scripts, styles, meta, and more...
         */
        view()->composer('page.partials.head', function($view){

            append_section('head.anchor', ['config' => 'store.name']);

            //append_section('head.style', ['style' => 'css/base.css']);

            //todo move to checkout controller
            //append_section('head.style', ['style' => 'css/util/checkout.css']);

            // css utilities - todo merge?
            //append_section('head.style', ['style' => 'css/util/messages.css']);
            //append_section('head.style', ['style' => 'css/util/navigation.css']);
            //append_section('head.style', ['style' => 'css/util/print.css']);
            //append_section('head.style', ['style' => 'css/util/table.css']);

            //append_section('head.style', ['style' => 'css/app.css']);
            append_section('head.style', ['style' => 'css/main.css']);
            append_section('head.style', ['style' => 'https://fonts.googleapis.com/icon?family=Material+Icons']);

            append_section('head.script', ['script' => 'https://code.jquery.com/jquery-2.1.1.min.js']);
            append_section('head.script', ['script' => 'js/materialize.min.js']);
            append_section('head.script', ['script' => 'js/app.js']);

            append_section('head.meta', ['meta' => ['name' => 'robots', 'content' => 'noindex, nofollow']]);
            append_section('head.meta', ['meta' => ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0']]);

        });

        /**
         * Notification messages
         */
        view()->composer('layouts.master', function($view){

            append_section('main.before', ['view' => 'layouts.partials.messages']);

        });
    }
}