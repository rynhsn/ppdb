<?php

namespace App\Models;

use CodeIgniter\Model;

class GroupModel extends \Myth\Auth\Models\GroupModel
{
    /**
     * Updates user's permissons cache when group permissions altered.
     */
    public function handlePermissionsCache(int $groupId): void
    {
        $users = $this->getUsersForGroup($groupId);

        foreach ($users as $row) {
            cache()->delete("{$row['id']}_permissions");
        }
    }

}
