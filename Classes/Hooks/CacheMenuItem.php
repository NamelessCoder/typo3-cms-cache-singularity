<?php
namespace NamelessCoder\CacheSingularity\Hooks;

use TYPO3\CMS\Backend\Toolbar\ClearCacheActionsHookInterface;

/**
 * Class CacheMenuItem
 */
class CacheMenuItem implements ClearCacheActionsHookInterface
{
    /**
     * Removes all menu items except the "clear all" menu item.
     *
     * @param array $cacheActions
     * @param array $optionValues
     */
    public function manipulateCacheActions(&$cacheActions, &$optionValues)
    {
        // Scan through current items to determine if user has access to the "clear all" item:
        $hasClearAllAccess = false;
        foreach ($cacheActions as $cacheAction) {
            if ($cacheAction['id'] === 'all') {
                $hasClearAllAccess = true;
                break;
            }
        }
        if (!$hasClearAllAccess) {
            return;
        }

        // Remove every option so that only "all" remains, causing it to get compacted to a directly clickable link
        $cacheActions = array_filter($cacheActions, function($item) {
            return $item['id'] === 'all';
        });
        $optionValues = ['all'];
    }
}
