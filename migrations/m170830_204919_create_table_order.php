<?php

use yii\db\Migration;
use yii\db\Schema;

class m170830_204919_create_table_order extends Migration
{
    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m170830_204919_create_table_order cannot be reverted.\n";

        return false;
    }
    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('order', [
            'id'     => 'pk',
            'user_id'  => Schema::TYPE_INTEGER . ' NOT NULL',
            'basket_id'  => Schema::TYPE_INTEGER . ' NOT NULL',
    
        ]);
    }

    public function down()
    {
        echo "m170830_204919_create_table_order cannot be reverted.\n";

        return false;
    }
    
}
