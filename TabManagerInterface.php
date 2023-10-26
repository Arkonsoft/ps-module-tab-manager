<?php

/**
 * NOTICE OF LICENSE
 *
 * This file is licensed under the Software License Agreement.
 *
 * With the purchase or the installation of the software in your application
 * you accept the license agreement.
 *
 * You must not modify, adapt or create derivative works of this source code
 *
 * @author Arkonsoft
 * @copyright 2023 Arkonsoft
 */

declare(strict_types=1);

namespace Arkonsoft\PsModule\TabManager;

use Module;

if (!defined('_PS_VERSION_')) {
    exit;
}

interface TabManagerInterface
{
    public function installModuleTab(Module $module, string $controllerName, string $name, TabDictionary $parentTab): bool;
    public function uninstallModuleTab(string $controllerName): bool;
}
