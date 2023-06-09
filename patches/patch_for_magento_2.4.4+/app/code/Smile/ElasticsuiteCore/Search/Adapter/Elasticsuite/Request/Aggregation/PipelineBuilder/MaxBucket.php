<?php
/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Smile ElasticSuite to newer
 * versions in the future.
 *
 * @category  Smile
 * @package   Smile\ElasticsuiteCore
 * @author    Botis <botis@smile.fr>
 * @copyright 2021 Smile
 * @license   Open Software License ("OSL") v. 3.0
 */

namespace Smile\ElasticsuiteCore\Search\Adapter\Elasticsuite\Request\Aggregation\PipelineBuilder;

use Smile\ElasticsuiteCore\Search\Adapter\Elasticsuite\Request\Aggregation\PipelineBuilderInterface;
use Smile\ElasticsuiteCore\Search\Request\PipelineInterface;

/**
 * Build a bucket selector ES pipeline aggregation.
 *
 * @category Smile
 * @package  Smile\ElasticsuiteCore
 */
class MaxBucket implements PipelineBuilderInterface
{
    /**
     * Build the pipeline aggregation.
     *
     * @param PipelineInterface $pipeline Bucket selector pipeline.
     *
     * @return array
     */
    public function buildPipeline(PipelineInterface $pipeline)
    {
        if ($pipeline->getType() !== PipelineInterface::TYPE_MAX_BUCKET) {
            throw new \InvalidArgumentException("Query builder : invalid aggregation type {$pipeline->getType()}.");
        }

        $aggParams = [
            'buckets_path'  => $pipeline->getBucketsPath(),
            'gap_policy'    => $pipeline->getGapPolicy(),
            'format'        => $pipeline->getFormat(),
        ];

        return ['max_bucket' => $aggParams];
    }
}
