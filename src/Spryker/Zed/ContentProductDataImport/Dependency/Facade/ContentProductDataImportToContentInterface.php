<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Spryker\Zed\ContentProductDataImport\Dependency\Facade;

use Generated\Shared\Transfer\ContentTransfer;
use Generated\Shared\Transfer\ContentValidationResponseTransfer;

interface ContentProductDataImportToContentInterface
{
    public function validateContent(ContentTransfer $contentTransfer): ContentValidationResponseTransfer;
}
