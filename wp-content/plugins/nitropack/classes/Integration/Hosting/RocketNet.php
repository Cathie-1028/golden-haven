<?php

namespace NitroPack\Integration\Hosting;

class RocketNet extends Hosting {
    const STAGE = "early";

    public static function detect() {
        return defined("ROCKET_SITE_ID") || strpos(gethostname(), "onrocket.com") !== false;
    }

    public function init($stage) {
        if ($this->getHosting() == "rocketnet" && class_exists("\Rocket_Wordpress")) {
            add_action('nitropack_execute_purge_url', [$this, 'purgeUrl']);
            add_action('nitropack_execute_purge_all', [$this, 'purgeAll']);
        }
    }

    public function purgeUrl($url) {
        \NitroPack\Integration\Plugin\RocketNet_Helper::purgeUrl($url);
    }

    public function purgeAll() {
        \Rocket_Wordpress::purge_cache();
    }
}

