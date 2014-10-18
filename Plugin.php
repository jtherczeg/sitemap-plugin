<?php namespace RainLab\Sitemap;

use Backend;
use System\Classes\PluginBase;
use System\Classes\SettingsManager;

/**
 * Sitemap Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Sitemap',
            'description' => 'Generate sitemap.xml files',
            'author'      => 'Alexey Bobkov, Samuel Georges',
            'icon'        => 'icon-sitemap'
        ];
    }

    public function registerSettings()
    {
        return [
            'definitions' => [
                'label'       => 'Manage sitemap',
                'description' => 'Define how the sitemap.xml file is generated.',
                'icon'        => 'icon-sitemap',
                'url'         => Backend::url('rainlab/sitemap/definitions'),
                'category'    => SettingsManager::CATEGORY_CMS,
                // 'order'       => 500,
            ]
        ];
    }

}