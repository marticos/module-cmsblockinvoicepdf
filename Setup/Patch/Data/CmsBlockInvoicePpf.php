<?php
declare(strict_types = 1);

namespace Marticos\CmsBlockInvoicePdf\Setup\Patch\Data;

use Magento\Cms\Model\BlockFactory;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchVersionInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class CmsBlockInvoicePpf implements DataPatchInterface, PatchVersionInterface
{
    /**
     * Block factory.
     *
     * @var BlockFactory
     */
    private BlockFactory $blockFactory;

    /**
     * @var ModuleDataSetupInterface
     */
    private ModuleDataSetupInterface $moduleDataSetup;

    /**
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param BlockFactory $blockFactory
     */
    public function __construct(ModuleDataSetupInterface $moduleDataSetup, BlockFactory $blockFactory)
    {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->blockFactory = $blockFactory;
    }

    public function apply()
    {
        $blockData = [
            'title' => 'Invoice Footer',
            'identifier' => 'invoice-footer',
            'stores' => [0],
            'is_active' => 1,
            'content' => 'Thank you for buying from us',
        ];

        $this->blockFactory->create()->setData($blockData)->save();
    }

    public static function getDependencies(): array
    {
        return [];
    }

    public function getAliases(): array
    {
        return [];
    }

    public static function getVersion(): string
    {
        return '1.0.0';
    }
}
