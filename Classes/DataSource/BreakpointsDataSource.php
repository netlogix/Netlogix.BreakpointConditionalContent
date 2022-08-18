<?php
declare(strict_types=1);

namespace Netlogix\BreakpointConditionalContent\DataSource;

use Neos\ContentRepository\Domain\Model\NodeInterface;
use Neos\Neos\Service\DataSource\AbstractDataSource;

class BreakpointsDataSource extends AbstractDataSource
{
    protected static $identifier = 'netlogixBreakpoints';

    public function getData(NodeInterface $node = null, array $arguments = [])
    {
        return [
            [
                'icon' => 'compress',
                'label' => 'Mobile - Extra Small',
                'value' => 'xs'
            ],
            [
                'icon' => 'mobile',
                'label' => 'Mobile - Small',
                'value' => 'sm'
            ],
            [
                'icon' => 'tablet',
                'label' => 'Tablet - Medium',
                'value' => 'md'
            ],
            [
                'icon' => 'desktop',
                'label' => 'Desktop - Large',
                'value' => 'lg'
            ],
            [
                'icon' => 'expand',
                'label' => 'Desktop - Extra Large',
                'value' => 'xl'
            ]
        ];
    }
}
