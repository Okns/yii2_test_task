<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%queue_statuses}}`.
 */
class m230616100807_create_queue_statuses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('queue_statuses', [
            'id' => $this->primaryKey(),
            'c_id' => $this->string(32),
            'c_name' => $this->string(512),
            'c_state' => $this->string(32),
            's_name' => $this->string(512),
            'a_type' => $this->string(128),
            'direction' => $this->string(32),
            'activation' => $this->string(32),
            'control' => $this->string(32),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('queue_statuses');
    }
}
