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
final class VkSamplerYcbcrModelConversion
{
    public const VK_SAMPLER_YCBCR_MODEL_CONVERSION_RGB_IDENTITY = 0;
    public const VK_SAMPLER_YCBCR_MODEL_CONVERSION_YCBCR_IDENTITY = 1;
    public const VK_SAMPLER_YCBCR_MODEL_CONVERSION_YCBCR_709 = 2;
    public const VK_SAMPLER_YCBCR_MODEL_CONVERSION_YCBCR_601 = 3;
    public const VK_SAMPLER_YCBCR_MODEL_CONVERSION_YCBCR_2020 = 4;
    public const VK_SAMPLER_YCBCR_MODEL_CONVERSION_RGB_IDENTITY_KHR = self::VK_SAMPLER_YCBCR_MODEL_CONVERSION_RGB_IDENTITY;
    public const VK_SAMPLER_YCBCR_MODEL_CONVERSION_YCBCR_IDENTITY_KHR = self::VK_SAMPLER_YCBCR_MODEL_CONVERSION_YCBCR_IDENTITY;
    public const VK_SAMPLER_YCBCR_MODEL_CONVERSION_YCBCR_709_KHR = self::VK_SAMPLER_YCBCR_MODEL_CONVERSION_YCBCR_709;
    public const VK_SAMPLER_YCBCR_MODEL_CONVERSION_YCBCR_601_KHR = self::VK_SAMPLER_YCBCR_MODEL_CONVERSION_YCBCR_601;
    public const VK_SAMPLER_YCBCR_MODEL_CONVERSION_YCBCR_2020_KHR = self::VK_SAMPLER_YCBCR_MODEL_CONVERSION_YCBCR_2020;
    public const VK_SAMPLER_YCBCR_MODEL_CONVERSION_BEGIN_RANGE = self::VK_SAMPLER_YCBCR_MODEL_CONVERSION_RGB_IDENTITY;
    public const VK_SAMPLER_YCBCR_MODEL_CONVERSION_END_RANGE = self::VK_SAMPLER_YCBCR_MODEL_CONVERSION_YCBCR_2020;
    public const VK_SAMPLER_YCBCR_MODEL_CONVERSION_RANGE_SIZE = self::VK_SAMPLER_YCBCR_MODEL_CONVERSION_YCBCR_2020 - self::VK_SAMPLER_YCBCR_MODEL_CONVERSION_RGB_IDENTITY + 1;
    public const VK_SAMPLER_YCBCR_MODEL_CONVERSION_MAX_ENUM = 0x7FFFFFFF;
}
