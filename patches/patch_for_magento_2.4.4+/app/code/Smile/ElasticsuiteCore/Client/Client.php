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

namespace Smile\ElasticsuiteCore\Client;

use Elasticsearch\Common\Exceptions\Missing404Exception;
use Smile\ElasticsuiteCore\Api\Client\ClientConfigurationInterface;
use Smile\ElasticsuiteCore\Api\Client\ClientInterface;

/**
 * ElasticSearch client implementation.
 *
 * @category  Smile
 * @package   Smile\ElasticsuiteCore
 * @author    Aurelien FOUCRET <aurelien.foucret@smile.fr>
 *
 * @SuppressWarnings(TooManyPublicMethods)
 */
class Client implements ClientInterface
{
    /**
     * @var \Elasticsearch\Client
     */
    private $esClient;

    /**
     * Constructor.
     *
     * @param ClientConfigurationInterface $clientConfiguration Client configuration factory.
     * @param ClientBuilder                $clientBuilder       ES client builder.
     */
    public function __construct(ClientConfigurationInterface $clientConfiguration, ClientBuilder $clientBuilder)
    {
        $this->esClient = $clientBuilder->build($clientConfiguration->getOptions());
    }

    /**
     * {@inheritDoc}
     */
    public function info()
    {
        return $this->esClient->info();
    }

    /**
     * {@inheritDoc}
     */
    public function ping()
    {
        return $this->esClient->ping();
    }

    /**
     * {@inheritDoc}
     */
    public function createIndex($indexName, $indexSettings)
    {
        $this->esClient->indices()->create(['index' => $indexName, 'body' => $indexSettings]);
    }

    /**
     * {@inheritDoc}
     */
    public function deleteIndex($indexName)
    {
        $this->esClient->indices()->delete(['index' => $indexName]);
    }

    /**
     * {@inheritDoc}
     */
    public function indexExists($indexName)
    {
        return $this->esClient->indices()->exists(['index' => $indexName]);
    }

    /**
     * {@inheritDoc}
     */
    public function putIndexSettings($indexName, $indexSettings)
    {
        $this->esClient->indices()->putSettings(['index' => $indexName, 'body' => $indexSettings]);
    }

    /**
     * {@inheritDoc}
     */
    public function putMapping($indexName, $mapping)
    {
        $this->esClient->indices()->putMapping(['index' => $indexName, 'body'  => $mapping]);
    }

    /**
     * {@inheritDoc}
     */
    public function getMapping($indexName)
    {
        return $this->esClient->indices()->getMapping(['index' => $indexName]);
    }

    /**
     * {@inheritDoc}
     */
    public function getSettings($indexName)
    {
        return $this->esClient->indices()->getSettings(['index' => $indexName]);
    }

    /**
     * {@inheritDoc}
     */
    public function forceMerge($indexName)
    {
        $this->esClient->indices()->forceMerge(['index' => $indexName]);
    }

    /**
     * {@inheritDoc}
     */
    public function refreshIndex($indexName)
    {
        $this->esClient->indices()->refresh(['index' => $indexName]);
    }

    /**
     * {@inheritDoc}
     */
    public function getIndicesNameByAlias($indexAlias)
    {
        $indices = [];
        try {
            $indices = $this->esClient->indices()->getMapping(['index' => $indexAlias]);
        } catch (\Elasticsearch\Common\Exceptions\Missing404Exception $e) {
            ;
        }

        return array_keys($indices);
    }

    /**
     * {@inheritDoc}
     */
    public function getIndexAliases($params = []): array
    {
        return $this->esClient->indices()->getAliases($params);
    }

    /**
     * {@inheritDoc}
     */
    public function updateAliases($aliasActions)
    {
        $this->esClient->indices()->updateAliases(['body' => ['actions' => $aliasActions]]);
    }

    /**
     * {@inheritDoc}
     */
    public function bulk($bulkParams)
    {
        return $this->esClient->bulk($bulkParams);
    }

    /**
     * {@inheritDoc}
     */
    public function search($params)
    {
        return $this->esClient->search($params);
    }

    /**
     * {@inheritDoc}
     */
    public function analyze($params)
    {
        return $this->esClient->indices()->analyze($params);
    }

    /**
     * {@inheritDoc}
     */
    public function indexStats($indexName): array
    {
        try {
            $stats = $this->esClient->indices()->stats(['index' => $indexName]);
        } catch (\Exception $e) {
            throw new Missing404Exception($e->getMessage());
        }

        return $stats;
    }

    /**
     * {@inheritDoc}
     */
    public function termvectors($params)
    {
        return $this->esClient->termvectors($params);
    }

    /**
     * {@inheritDoc}
     */
    public function mtermvectors($params)
    {
        return $this->esClient->mtermvectors($params);
    }

    /**
     * {@inheritDoc}
     */
    public function reindex(array $params): array
    {
        return $this->esClient->reindex($params);
    }
}
