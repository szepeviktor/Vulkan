<?php

/**
 * This file is part of Vulkan package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan\Enum;

/**
 * @since 1.1
 */
final class VkExternalFenceFeatureFlagBits
{
    public const VK_EXTERNAL_FENCE_FEATURE_EXPORTABLE_BIT = 0x00000001;
    public const VK_EXTERNAL_FENCE_FEATURE_IMPORTABLE_BIT = 0x00000002;
    public const VK_EXTERNAL_FENCE_FEATURE_EXPORTABLE_BIT_KHR = self::VK_EXTERNAL_FENCE_FEATURE_EXPORTABLE_BIT;
    public const VK_EXTERNAL_FENCE_FEATURE_IMPORTABLE_BIT_KHR = self::VK_EXTERNAL_FENCE_FEATURE_IMPORTABLE_BIT;
    public const VK_EXTERNAL_FENCE_FEATURE_FLAG_BITS_MAX_ENUM = 0x7FFFFFFF;
}
