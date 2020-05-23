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
 * @since 1.2
 */
final class VkSemaphoreType
{
    public const VK_SEMAPHORE_TYPE_BINARY = 0;
    public const VK_SEMAPHORE_TYPE_TIMELINE = 1;
    public const VK_SEMAPHORE_TYPE_BINARY_KHR = self::VK_SEMAPHORE_TYPE_BINARY;
    public const VK_SEMAPHORE_TYPE_TIMELINE_KHR = self::VK_SEMAPHORE_TYPE_TIMELINE;
    public const VK_SEMAPHORE_TYPE_BEGIN_RANGE = self::VK_SEMAPHORE_TYPE_BINARY;
    public const VK_SEMAPHORE_TYPE_END_RANGE = self::VK_SEMAPHORE_TYPE_TIMELINE;
    public const VK_SEMAPHORE_TYPE_RANGE_SIZE = self::VK_SEMAPHORE_TYPE_TIMELINE - self::VK_SEMAPHORE_TYPE_BINARY + 1;
    public const VK_SEMAPHORE_TYPE_MAX_ENUM = 0x7FFFFFFF;
}
