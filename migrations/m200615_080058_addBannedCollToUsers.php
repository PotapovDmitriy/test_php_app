<?php

use yii\db\Migration;

/**
 * Class m200615_080058_addBannedCollToUsers
 */
class m200615_080058_addBannedCollToUsers extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('users', 'banned', $this->boolean());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('users', 'banned');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200615_080058_addBannedCollToUsers cannot be reverted.\n";

        return false;
    }
    */
}
