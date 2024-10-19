<?php

namespace Database\Seeders\Auth;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Database\Seeders\Traits\DisableForeignKeys;
use Illuminate\Database\Seeder;

/**
 * Class PermissionRoleTableSeeder.
 */
class PermissionRoleSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seed.
     */
    public function run()
    {
        $this->disableForeignKeys();

        // Create Roles
        $superAdmin         = Role::create(['id' => 1, 'type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'Administrator', 'description' => 'Role Only for Super Admin']);

        $permissionManager  = Role::create(['id' => 2, 'type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'Permission-Manager', 'description' => 'Permission-Manager']);
        $roleManager        = Role::create(['id' => 3, 'type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'Role-Manager', 'description' => 'Role-Manager']);
        $userManager        = Role::create(['id' => 4, 'type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'User-Manager', 'description' => 'User-Manager']);
        $authorManager      = Role::create(['id' => 5, 'type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'Author-Manager', 'description' => 'Author-Manager']);
        $customerManager    = Role::create(['id' => 6, 'type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'Customer-Manager', 'description' => 'Customer-Manager']);

        $articleTagManager      = Role::create(['id' => 7, 'type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'Article-Tag-Manager', 'description' => 'Article-Tag-Manager']);
        $articleCategoryManager = Role::create(['id' => 8, 'type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'Article-Category-Manager', 'description' => 'Article-Category-Manager']);
        $articleManager         = Role::create(['id' => 9, 'type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'Article-Manager', 'description' => 'Article-Manager']);

        // $xxxManager = Role::create(['id' => 1, 'type'  => User::TYPE_ADMIN, 'guard_name' => 'web', 'name'  => 'XXX-Manager', 'description' => 'XXX-Manager']);

        // Non Grouped Permissions
        //

        // Grouped permissions
        $managePermissions = Permission::create(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.manage.permission', 'description' => 'Manage Permissions']);
        $managePermissions->children()->saveMany([
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.permission.list',       'description' => 'View Permission List']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.permission.create',     'description' => 'Permission Create and Store']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.permission.show',       'description' => 'View Permission Details']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.permission.edit',       'description' => 'Permission Edit & Update']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.permission.destroy',    'description' => 'Trash Permission']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.permission.trash',      'description' => 'Trashed Permission List']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.permission.restore',    'description' => 'Restore Permission']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.permission.delete',     'description' => 'Delete Permission']),
        ]);

        $manageRoles = Permission::create(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.manage.role', 'description' => 'Manage Roles']);
        $manageRoles->children()->saveMany([
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.role.list',     'description' => 'View Role List']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.role.create',   'description' => 'Role Create and Store']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.role.show',     'description' => 'View Role Details']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.role.edit',     'description' => 'Role Edit & Update']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.role.destroy',  'description' => 'Trash Role']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.role.trash',    'description' => 'Trashed Role List']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.role.restore',  'description' => 'Restore Role']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.role.delete',   'description' => 'Delete Role']),
        ]);

        $manageUsers = Permission::create(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.manage.user', 'description' => 'Manage Users']);
        $manageUsers->children()->saveMany([
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.user.list',             'description' => 'View User List']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.user.search',           'description' => 'User Search & Filter']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.user.list.download',    'description' => 'User List Download']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.user.create',           'description' => 'User Create and Store']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.user.details',          'description' => 'View User Details']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.user.details.download', 'description' => 'User Details Download']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.user.edit',             'description' => 'User Edit & Update']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.user.change-password',  'description' => 'Change Password of a User']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.user.destroy',          'description' => 'Trash User']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.user.trash',            'description' => 'Trashed User List']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.user.restore',          'description' => 'Restore User']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.user.delete',           'description' => 'Delete User']),
        ]);

        $manageAuthors = Permission::create(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.manage.author', 'description' => 'Manage Authors/Writers']);
        $manageAuthors->children()->saveMany([
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.author.list',               'description' => 'View Author List']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.author.search',             'description' => 'Author Search & Filter']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.author.list.download',      'description' => 'Author List Download']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.author.create',             'description' => 'Author Create and Store']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.author.details',            'description' => 'View Author Details']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.author.details.download',   'description' => 'Author Details Download']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.author.edit',               'description' => 'Author Edit & Update']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.author.change-password',    'description' => 'Change Password of a Author']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.author.destroy',            'description' => 'Trash Author']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.author.trash',              'description' => 'Trashed Author List']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.author.restore',            'description' => 'Restore Author']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.author.delete',             'description' => 'Delete Author']),
        ]);

        $manageCustomers = Permission::create(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.manage.customer', 'description' => 'Manage Customer']);
        $manageCustomers->children()->saveMany([
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.customer.list',             'description' => 'View Customer List']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.customer.search',           'description' => 'Customer Search & Filter']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.customer.list.download',    'description' => 'Customer List Download']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.customer.create',           'description' => 'Customer Create and Store']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.customer.details',          'description' => 'View Customer Details']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.customer.details.download', 'description' => 'Customer Details Download']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.customer.edit',             'description' => 'Customer Edit & Update']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.customer.destroy',          'description' => 'Trash Customer']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.customer.trash',            'description' => 'Trashed Customer List']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.customer.restore',          'description' => 'Restore Customer']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.customer.delete',           'description' => 'Delete Customer']),
        ]);

        $manageArticleTags = Permission::create(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.manage.article-tag', 'description' => 'Manage Article Tag']);
        $manageArticleTags->children()->saveMany([
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article-tag.list',      'description' => 'View Article Tag List']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article-tag.create',    'description' => 'Article Tag Create and Store']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article-tag.details',   'description' => 'View Article Tag Details']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article-tag.edit',      'description' => 'Article Tag Edit & Update']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article-tag.destroy',   'description' => 'Trash Article Tag']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article-tag.trash',     'description' => 'Trashed Article Tag List']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article-tag.restore',   'description' => 'Restore Article Tag']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article-tag.delete',    'description' => 'Delete Article Tag']),
        ]);

        $manageArticleCategories = Permission::create(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.manage.article-category', 'description' => 'Manage Article Category']);
        $manageArticleCategories->children()->saveMany([
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article-category.list',     'description' => 'View Article Category List']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article-category.create',   'description' => 'Article Category Create and Store']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article-category.details',  'description' => 'View Article Category Details']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article-category.edit',     'description' => 'Article Category Edit & Update']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article-category.destroy',  'description' => 'Trash Article Category']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article-category.trash',    'description' => 'Trashed Article Category List']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article-category.restore',  'description' => 'Restore Article Category']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article-category.delete',   'description' => 'Delete Article Category']),
        ]);

        $manageArticles = Permission::create(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.manage.article', 'description' => 'Manage Article']);
        $manageArticles->children()->saveMany([
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article.list',              'description' => 'View Article List']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article.search',            'description' => 'Article Search & Filter']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article.list.download',     'description' => 'Article List Download']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article.create',            'description' => 'Article Create and Store']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article.details',           'description' => 'View Article Details']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article.details.download',  'description' => 'Article Details Download']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article.edit',              'description' => 'Article Edit & Update']),

            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article.approve',            'description' => 'Approve Article']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article.discard',            'description' => 'Discard Article']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article.discarded',          'description' => 'Discarded Article List']),

            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article.destroy',           'description' => 'Trash Article']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article.trash',             'description' => 'Trashed Article List']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article.restore',           'description' => 'Restore Article']),
            new Permission(['type' => User::TYPE_ADMIN, 'guard_name' => 'web', 'name' => 'admin.article.delete',            'description' => 'Delete Article']),
        ]);

        // Assign Permissions to Roles
        $permissionManager->syncPermissions([
            'admin.manage.permission',
            'admin.permission.list',
            'admin.permission.create',
            'admin.permission.show',
            'admin.permission.edit',
            'admin.permission.destroy',
            'admin.permission.trash',
            'admin.permission.restore',
            'admin.permission.delete'
        ]);
        $roleManager->syncPermissions([
            'admin.manage.role',
            'admin.role.list',
            'admin.role.create',
            'admin.role.show',
            'admin.role.edit',
            'admin.role.destroy',
            'admin.role.trash',
            'admin.role.restore',
            'admin.role.delete'
        ]);

        $userManager->syncPermissions([
            'admin.manage.user',
            'admin.user.list',
            'admin.user.search',
            'admin.user.list.download',
            'admin.user.create',
            'admin.user.details',
            'admin.user.details.download',
            'admin.user.edit',
            'admin.user.change-password',
            'admin.user.destroy',
            'admin.user.trash',
            'admin.user.restore',
            'admin.user.delete'
        ]);
        $authorManager->syncPermissions([
            'admin.manage.author',
            'admin.author.list',
            'admin.author.search',
            'admin.author.list.download',
            'admin.author.create',
            'admin.author.details',
            'admin.author.details.download',
            'admin.author.edit',
            'admin.author.change-password',
            'admin.author.destroy',
            'admin.author.trash',
            'admin.author.restore',
            'admin.author.delete'
        ]);
        $customerManager->syncPermissions([
            'admin.manage.customer',
            'admin.customer.list',
            'admin.customer.search',
            'admin.customer.list.download',
            'admin.customer.create',
            'admin.customer.details',
            'admin.customer.details.download',
            'admin.customer.edit',
            'admin.customer.destroy',
            'admin.customer.trash',
            'admin.customer.restore',
            'admin.customer.delete'
        ]);

        $articleTagManager->syncPermissions([
            'admin.manage.article-tag',
            'admin.article-tag.list',
            'admin.article-tag.create',
            'admin.article-tag.details',
            'admin.article-tag.edit',
            'admin.article-tag.destroy',
            'admin.article-tag.trash',
            'admin.article-tag.restore',
            'admin.article-tag.delete'
        ]);
        $articleCategoryManager->syncPermissions([
            'admin.manage.article-category',
            'admin.article-category.list',
            'admin.article-category.create',
            'admin.article-category.details',
            'admin.article-category.edit',
            'admin.article-category.destroy',
            'admin.article-category.trash',
            'admin.article-category.restore',
            'admin.article-category.delete'
        ]);
        $articleManager->syncPermissions([
            'admin.manage.article',
            'admin.article.list',
            'admin.article.search',
            'admin.article.list.download',
            'admin.article.create',
            'admin.article.details',
            'admin.article.details.download',
            'admin.article.edit',
            'admin.article.approve',
            'admin.article.discard',
            'admin.article.discarded',
            'admin.article.destroy',
            'admin.article.trash',
            'admin.article.restore',
            'admin.article.delete'
        ]);

        $this->enableForeignKeys();
    }
}
