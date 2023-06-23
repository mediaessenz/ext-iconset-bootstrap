<?php
declare(strict_types = 1);

/*
 * This file is part of the package bk2k/iconset-bootstrap.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace BK2K\IconsetBootstrap\Icons;

use BK2K\BootstrapPackage\Icons\IconList;
use BK2K\BootstrapPackage\Icons\IconProviderInterface;
use BK2K\BootstrapPackage\Icons\SvgIcon;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class IconProvider implements IconProviderInterface
{
    public function getIdentifier(): string
    {
        return 'iconset_bootstrap';
    }

    public function getName(): string
    {
        return 'Bootstrap';
    }

    public function supports(string $identifier): bool
    {
        return 'iconset_bootstrap' === $identifier;
    }

    public function getIconList(): IconList
    {
        $icons = new IconList();

        $directory = 'EXT:iconset_bootstrap/Resources/Public/Icons/Bootstrap/';
        $path = GeneralUtility::getFileAbsFileName($directory);
        $files = iterator_to_array(new \FilesystemIterator($path, \FilesystemIterator::KEY_AS_PATHNAME));
        ksort($files);

        foreach ($files as $fileinfo) {
            if ($fileinfo instanceof \SplFileInfo
                && $fileinfo->isFile()
                && strtolower($fileinfo->getExtension()) === 'svg'
            ) {
                $icons->addIcon(
                    (new SvgIcon())
                        ->setSrc($directory . $fileinfo->getFilename())
                        ->setIdentifier($fileinfo->getBasename('.' . $fileinfo->getExtension()))
                        ->setName($fileinfo->getBasename('.' . $fileinfo->getExtension()))
                        ->setPreviewImage($directory . $fileinfo->getFilename())
                );
            }
        }

        return $icons;
    }
}
