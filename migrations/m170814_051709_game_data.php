<?php

use yii\db\Migration;

class m170814_051709_game_data extends Migration
{
    public function safeUp()
    {
        $this->createTable('game_data',[
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'date_update' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'data' => $this->text(),
            'n' => $this->integer()->defaultValue(0),
            'active' => $this->boolean(),
        ]);
        $this->addForeignKey('user_id','game_data', 'user_id', 'users', 'id');
    }

    public function safeDown()
    {
        echo "m170814_051709_game_data cannot be reverted.\n";

        $this->dropTable('game_data');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170814_051709_game_data cannot be reverted.\n";

        return false;
    }
    */
}
