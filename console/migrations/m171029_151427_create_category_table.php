<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `category`.
 */
class m171029_151427_create_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('category', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . '(100) NOT NULL',
            'icon' => Schema::TYPE_STRING . '(255) DEFAULT NULL',
            'slug' => Schema::TYPE_STRING . '(255) DEFAULT NULL',
            'parent_id' => Schema::TYPE_INTEGER . '(255) DEFAULT NULL',
            'description' => Schema::TYPE_TEXT . ' DEFAULT NULL',
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('category');
    }
}
