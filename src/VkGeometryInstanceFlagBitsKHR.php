<?php

/**
 * This file is part of BicEngine package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bic\Vulkan;

final class VkGeometryInstanceFlagBitsKHR
{
    public const VK_GEOMETRY_INSTANCE_TRIANGLE_FACING_CULL_DISABLE_BIT_KHR = 0x00000001;
    public const VK_GEOMETRY_INSTANCE_TRIANGLE_FRONT_COUNTERCLOCKWISE_BIT_KHR = 0x00000002;
    public const VK_GEOMETRY_INSTANCE_FORCE_OPAQUE_BIT_KHR = 0x00000004;
    public const VK_GEOMETRY_INSTANCE_FORCE_NO_OPAQUE_BIT_KHR = 0x00000008;
    public const VK_GEOMETRY_INSTANCE_TRIANGLE_CULL_DISABLE_BIT_NV = self::VK_GEOMETRY_INSTANCE_TRIANGLE_FACING_CULL_DISABLE_BIT_KHR;
    public const VK_GEOMETRY_INSTANCE_TRIANGLE_FRONT_COUNTERCLOCKWISE_BIT_NV = self::VK_GEOMETRY_INSTANCE_TRIANGLE_FRONT_COUNTERCLOCKWISE_BIT_KHR;
    public const VK_GEOMETRY_INSTANCE_FORCE_OPAQUE_BIT_NV = self::VK_GEOMETRY_INSTANCE_FORCE_OPAQUE_BIT_KHR;
    public const VK_GEOMETRY_INSTANCE_FORCE_NO_OPAQUE_BIT_NV = self::VK_GEOMETRY_INSTANCE_FORCE_NO_OPAQUE_BIT_KHR;
    public const VK_GEOMETRY_INSTANCE_FLAG_BITS_MAX_ENUM_KHR = 0x7FFFFFFF;
}
