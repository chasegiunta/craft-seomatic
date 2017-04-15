<?php
/**
 * SEOmatic plugin for Craft CMS 3.x
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2017 nystudio107
 */

namespace nystudio107\seomatic\base;

/**
 * @author    nystudio107
 * @package   Seomatic
 * @since     3.0.0
 */
interface ContainerInterface
{

    // Constants
    // =========================================================================

    const CONTAINER_TYPE = 'GenericContainer';

    // Static Properties
    // =========================================================================

    // Static Methods
    // =========================================================================

    public static function create($config = []);

    // Public Properties
    // =========================================================================

    // Public Methods
    // =========================================================================

    /**
     * Add data to the container
     *
     * @param        $data
     * @param string $key
     */
    public function addData($data, string $key): void;

    /**
     * Render the container's content
     *
     * @return string
     */
    public function render():string;

    /**
     * Normalizes the containers’s data for use.
     *
     * This is called after container data is loaded, to allow it to be parsed,
     * models instantiated, etc.
     */
    public function normalizeContainerData(): void;

    // Private Methods
    // =========================================================================

}