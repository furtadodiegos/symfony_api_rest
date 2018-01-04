<?php

/*
 * This file is part of the Fidry\AliceDataFixtures package.
 *
 * (c) Théo FIDRY <theo.fidry@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Fidry\AliceDataFixtures\Bridge\Doctrine\MongoDocument;

use Doctrine\ODM\MongoDB\Mapping\Annotations\Document;

/**
 * @Document()
 *
 * @author Théo FIDRY <theo.fidry@gmail.com>
 */
class DummySubClass extends MappedSuperclassDummy
{
}
