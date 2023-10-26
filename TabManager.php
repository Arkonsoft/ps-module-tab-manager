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

use Language;
use Module;
use Tab;

if (!defined('_PS_VERSION_')) {
    exit;
}

class TabManager implements TabManagerInterface
{
    public function installModuleTab(Module $module, string $className, string $name, TabDictionary $parentTab): bool
    {
        if ($this->isTabExists($className)) {
            return true;
        }

        $tab = new Tab();
        $tab->id_parent = (int) Tab::getIdFromClassName($parentTab->getValue());
        $tab->class_name = $className;
        $tab->module = $module->name;
        $tab->active = 1;

        $tab->name = [];
        foreach (Language::getLanguages(true, false, true) as $langId) {
            $tab->name[$langId] = $module->displayName;
        }

        return (bool) $tab->add();
    }

    public function uninstallModuleTab(string $className): bool
    {
        $tabId = (int) Tab::getIdFromClassName($className);

        if ($tabId) {
            $tab = new Tab($tabId);

            return $tab->delete();
        }

        return false;
    }

    public function isTabExists(string $className): bool
    {
        return (bool) Tab::getIdFromClassName($className);
    }
}
