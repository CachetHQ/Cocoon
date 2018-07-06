<?php

/*
 * This file is part of Cocoon.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cocoon;

/**
 * This is the manifest class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class Manifest
{
    /**
     * The theme data.
     *
     * @var array
     */
    protected $data;

    /**
     * The theme resource path.
     *
     * @var string
     */
    protected $path;

    /**
     * Create a new manifest instance.
     *
     * @param array  $data
     * @param string $path
     *
     * @return void
     */
    public function __construct($data, $path)
    {
        $this->data = $data;
        $this->path = $path;
    }

    /**
     * Get the theme path.
     *
     * @return string
     */
    public function getThemePath()
    {
        return $this->path;
    }

    /**
     * Get the id of the theme.
     *
     * @return string
     */
    public function getThemeId()
    {
        return sha1($this->path);
    }

    /**
     * Get the theme name in slug format.
     *
     * @return string
     */
    public function getThemeSlug()
    {
        return str_replace('/', '-', $this->name);
    }

    /**
     * Retrieve data.
     *
     * @param string $key
     *
     * @return mixed
     */
    public function __get($key)
    {
        if (array_key_exists($key, $this->data)) {
            return $this->data[$key];
        }
    }
}
