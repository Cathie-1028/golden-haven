<?php
namespace NitroPack\WordPress;

class Config {
    private $config;

    public function __construct() {
        $this->config = NULL;
    }

    public function get() {
        if ($this->config) {
            return $this->config;
        }

        $config = array();

        if ($this->exists()) {
            $config = json_decode(file_get_contents(NITROPACK_CONFIG_FILE), true); // TODO: Convert this to use the Filesystem abstraction for better Redis support
        }

        $this->config = $config;
        return $config;
    }

    public function set($config) {
        $np = NitroPack::getInstance();
        if (!$np->dataDirExists() && !$np->initDataDir()) return false;
        $this->config = $config;
        return WP_DEBUG ? file_put_contents(NITROPACK_CONFIG_FILE, json_encode($config, JSON_PRETTY_PRINT)) : @file_put_contents(NITROPACK_CONFIG_FILE, json_encode($config, JSON_PRETTY_PRINT)); // TODO: Convert this to use the Filesystem abstraction for better Redis support
    }

    public function exists() {
        return defined("NITROPACK_CONFIG_FILE") && file_exists(NITROPACK_CONFIG_FILE); // TODO: Convert this to use the Filesystem abstraction for better Redis support
    }
}
