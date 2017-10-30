<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `ads_fields`.
 */
class m171030_101339_create_ads_fields_table extends Migration
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

        $this->createTable('ads_fields', [
            'id'                => Schema::TYPE_PK,
            'type_id'           => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'label'             => Schema::TYPE_STRING . '(255) NOT NULL',
            'template'          => Schema::TYPE_STRING . '(255) NOT NULL',
            'name' => $this->string(255),
            'interval' => $this->integer(1)->defaultValue(0)

        ], $tableOptions);


        $this->addForeignKey('ads_fields_ads_fields_type_fk', 'ads_fields', 'type_id', 'ads_fields_type','id', 'RESTRICT', 'CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('ads_fields_ads_fields_type_fk', 'ads_fields');

        $this->dropTable('ads_fields');
    }
}
