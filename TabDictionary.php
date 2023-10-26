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

use MyCLabs\Enum\Enum;

if (!defined('_PS_VERSION_')) {
    exit;
}

final class TabDictionary extends Enum
{
    public const ACCESS = 'AdminAccess';
    public const ADDONS_CATALOG = 'AdminAddonsCatalog';
    public const ADDRESSES = 'AdminAddresses';
    public const ADVANCED_PARAMETERS = 'AdminAdvancedParameters';
    public const ATTACHMENTS = 'AdminAttachments';
    public const ATTRIBUTES_GROUPS = 'AdminAttributesGroups';
    public const BACKUP = 'AdminBackup';
    public const CARRIERS = 'AdminCarriers';
    public const CART_RULES = 'AdminCartRules';
    public const CARTS = 'AdminCarts';
    public const CATALOG = 'AdminCatalog';
    public const CATEGORIES = 'AdminCategories';
    public const CMS_CONTENT = 'AdminCmsContent';
    public const CONFIGURE = 'CONFIGURE';
    public const CONTACTS = 'AdminContacts';
    public const COUNTRIES = 'AdminCountries';
    public const CURRENCIES = 'AdminCurrencies';
    public const CUSTOMER_PREFERENCES = 'AdminCustomerPreferences';
    public const CUSTOMER_THREADS = 'AdminCustomerThreads';
    public const CUSTOMERS = 'AdminCustomers';
    public const DASHBOARD = 'AdminDashboard';
    public const DEFAULT = 'DEFAULT';
    public const DELIVERY_SLIP = 'AdminDeliverySlip';
    public const EMAILS = 'AdminEmails';
    public const EMPLOYEES = 'AdminEmployees';
    public const FEATURES = 'AdminFeatures';
    public const GENDERS = 'AdminGenders';
    public const GEOLOCATION = 'AdminGeolocation';
    public const GROUPS = 'AdminGroups';
    public const IMAGES = 'AdminImages';
    public const IMPORT = 'AdminImport';
    public const IMPROVE = 'IMPROVE';
    public const INFORMATION = 'AdminInformation';
    public const INTERNATIONAL = 'AdminInternational';
    public const INVOICES = 'AdminInvoices';
    public const LANGUAGES = 'AdminLanguages';
    public const LOCALIZATION = 'AdminLocalization';
    public const LOGS = 'AdminLogs';
    public const MAINTENANCE = 'AdminMaintenance';
    public const MANUFACTURERS = 'AdminManufacturers';
    public const META = 'AdminMeta';
    public const MODULES = 'AdminModules';
    public const MODULES_POSITIONS = 'AdminModulesPositions';
    public const MODULES_SF = 'AdminModulesSf';
    public const ORDER_MESSAGE = 'AdminOrderMessage';
    public const ORDER_PREFERENCES = 'AdminOrderPreferences';
    public const ORDERS = 'AdminOrders';
    public const OUTSTANDING = 'AdminOutstanding';
    public const PARENT_ATTRIBUTES_GROUPS = 'AdminParentAttributesGroups';
    public const PARENT_CART_RULES = 'AdminParentCartRules';
    public const PARENT_COUNTRIES = 'AdminParentCountries';
    public const PARENT_CUSTOMER = 'AdminParentCustomer';
    public const PARENT_CUSTOMER_PREFERENCES = 'AdminParentCustomerPreferences';
    public const PARENT_CUSTOMER_THREADS = 'AdminParentCustomerThreads';
    public const PARENT_EMPLOYEES = 'AdminParentEmployees';
    public const PARENT_LOCALIZATION = 'AdminParentLocalization';
    public const PARENT_MANUFACTURERS = 'AdminParentManufacturers';
    public const PARENT_META = 'AdminParentMeta';
    public const PARENT_MODULES_SF = 'AdminParentModulesSf';
    public const PARENT_ORDER_PREFERENCES = 'AdminParentOrderPreferences';
    public const PARENT_ORDERS = 'AdminParentOrders';
    public const PARENT_PAYMENT = 'AdminParentPayment';
    public const PARENT_PREFERENCES = 'AdminParentPreferences';
    public const PARENT_REQUEST_SQL = 'AdminParentRequestSql';
    public const PARENT_SEARCH_CONF = 'AdminParentSearchConf';
    public const PARENT_SHIPPING = 'AdminParentShipping';
    public const PARENT_STOCK_MANAGEMENT = 'AdminParentStockManagement';
    public const PARENT_STORES = 'AdminParentStores';
    public const PARENT_TAXES = 'AdminParentTaxes';
    public const PARENT_THEMES = 'AdminParentThemes';
    public const PAYMENT = 'AdminPayment';
    public const PAYMENT_PREFERENCES = 'AdminPaymentPreferences';
    public const PERFORMANCE = 'AdminPerformance';
    public const PREFERENCES = 'AdminPreferences';
    public const PRODUCTS = 'AdminProducts';
    public const PROFILES = 'AdminProfiles';
    public const QUICK_ACCESSES = 'AdminQuickAccesses';
    public const REFERRERS = 'AdminReferrers';
    public const REQUEST_SQL = 'AdminRequestSql';
    public const RETURN = 'AdminReturn';
    public const SEARCH_CONF = 'AdminSearchConf';
    public const SEARCH_ENGINES = 'AdminSearchEngines';
    public const SELL = 'SELL';
    public const SHIPPING = 'AdminShipping';
    public const SHOP_GROUP = 'AdminShopGroup';
    public const SHOP_PARAMETERS = 'ShopParameters';
    public const SHOP_URL = 'AdminShopUrl';
    public const SLIP = 'AdminSlip';
    public const SPECIFIC_PRICE_RULE = 'AdminSpecificPriceRule';
    public const STATES = 'AdminStates';
    public const STATS = 'AdminStats';
    public const STATUSES = 'AdminStatuses';
    public const STOCK = 'AdminStock';
    public const STOCK_CONFIGURATION = 'AdminStockConfiguration';
    public const STOCK_COVER = 'AdminStockCover';
    public const STOCK_INSTANT_STATE = 'AdminStockInstantState';
    public const STOCK_MANAGEMENT = 'AdminStockManagement';
    public const STOCK_MVT = 'AdminStockMvt';
    public const STORES = 'AdminStores';
    public const SUPPLIERS = 'AdminSuppliers';
    public const SUPPLY_ORDERS = 'AdminSupplyOrders';
    public const TAGS = 'AdminTags';
    public const TAX_RULES_GROUP = 'AdminTaxRulesGroup';
    public const TAXES = 'AdminTaxes';
    public const THEMES = 'AdminThemes';
    public const THEMES_CATALOG = 'AdminThemesCatalog';
    public const TRACKING = 'AdminTracking';
    public const TRANSLATIONS = 'AdminTranslations';
    public const WAREHOUSES = 'AdminWarehouses';
    public const WEBSERVICE = 'AdminWebservice';
    public const ZONES = 'AdminZones';
}
