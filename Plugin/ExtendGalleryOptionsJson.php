<?php
/**
 * Amadeco GalleryExtras module
 *
 * @category  Amadeco
 * @package   Amadeco_GalleryExtras
 * @copyright Ilan Parmentier
 */
declare(strict_types=1);

namespace Amadeco\GalleryExtras\Plugin;

use Magento\Catalog\Block\Product\View\GalleryOptions;
use Magento\Framework\Serialize\Serializer\Json;
use Magento\Framework\View\ConfigInterface;

/**
 * Class ExtendGalleryOptionsJson
 *
 * Enhances the gallery options JSON with additional configuration parameters.
 */
class ExtendGalleryOptionsJson
{
    /**
     * JSON serializer instance.
     *
     * @var Json
     */
    private Json $jsonSerializer;

    /**
     * View configuration instance.
     *
     * @var ConfigInterface
     */
    private ConfigInterface $viewConfig;

    /**
     * Constructor.
     *
     * @param Json            $jsonSerializer JSON serializer.
     * @param ConfigInterface $viewConfig     View configuration.
     */
    public function __construct(
        Json $jsonSerializer,
        ConfigInterface $viewConfig
    ) {
        $this->jsonSerializer = $jsonSerializer;
        $this->viewConfig = $viewConfig;
    }

    /**
     * After plugin for getOptionsJson.
     *
     * Appends additional configuration options (min/max width and height)
     * to the gallery options JSON.
     *
     * @param GalleryOptions $subject The GalleryOptions block.
     * @param string         $result  The original JSON encoded options.
     *
     * @return string The modified JSON encoded options.
     */
    public function afterGetOptionsJson(GalleryOptions $subject, $result): string
    {
        $config = $this->viewConfig->getViewConfig();
        $optionItems = $this->jsonSerializer->unserialize($result);

        $minWidth = $config->getVarValue('Magento_Catalog', 'gallery/minwidth');
        if ($minWidth) {
            $optionItems['minwidth'] = (int)$minWidth;
        }

        $maxWidth = $config->getVarValue('Magento_Catalog', 'gallery/maxwidth');
        if ($maxWidth) {
            $optionItems['maxwidth'] = (int)$maxWidth;
        }

        $minHeight = $config->getVarValue('Magento_Catalog', 'gallery/minheight');
        if ($minHeight) {
            $optionItems['minheight'] = (int)$minHeight;
        }

        $maxHeight = $config->getVarValue('Magento_Catalog', 'gallery/maxheight');
        if ($maxHeight) {
            $optionItems['maxheight'] = (int)$maxHeight;
        }

        return $this->jsonSerializer->serialize($optionItems);
    }
}
