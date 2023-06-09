<?php
/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Smile ElasticSuite to newer
 * versions in the future.
 *
 * @category  Smile
 * @package   Smile\ElasticsuiteCore
 * @author    Aurelien FOUCRET <aurelien.foucret@smile.fr>
 * @copyright 2020 Smile
 * @license   Open Software License ("OSL") v. 3.0
 */

namespace Smile\ElasticsuiteCore\Api\Cluster;

/**
 * Cluster information API.
 *
 * @category Smile
 * @package  Smile\ElasticsuiteCore
 * @author   Aurelien FOUCRET <aurelien.foucret@smile.fr>
 */
interface ClusterInfoInterface
{
    public const DISTRO_ES = 'elasticsearch';
    public const DISTRO_OS = 'opensearch';

    /**
     * Returns ElasticSearch server version.
     *
     * @return string
     */
    public function getServerVersion();

    /**
     * Returns if server is ElasticSearch or OpenSearch.
     *
     * @return string
     */
    public function getServerDistribution();
}
