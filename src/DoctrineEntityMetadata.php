<?php
/**
 * Vainyl
 *
 * PHP Version 7
 *
 * @package   Doctrine-ORM-Bridge
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://vainyl.com
 */
declare(strict_types=1);

namespace Vainyl\Doctrine\ORM;

use Doctrine\ORM\Mapping\ClassMetadata;
use Vainyl\Doctrine\Common\Metadata\DoctrineDomainMetadataInterface;

/**
 * Class DoctrineEntityMetadata
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class DoctrineEntityMetadata extends ClassMetadata implements DoctrineDomainMetadataInterface
{
    public $alias;

    /**
     * @inheritDoc
     */
    public function __sleep()
    {
        return array_merge(parent::__sleep(), ['alias']);
    }

    /**
     * @inheritDoc
     */
    public function setAlias(string $alias): DoctrineDomainMetadataInterface
    {
        $this->alias = $alias;

        return $this;
    }
}