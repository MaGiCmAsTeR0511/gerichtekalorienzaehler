<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%gerichte_to_user}}`.
 */
class m210609_180448_create_gerichte_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%gerichte_to_user}}', [
            'gtu_id' => $this->primaryKey(),
            'gtu_u_id' => $this->integer()->notNull(),
            'gtu_g_id' => $this->integer()->notNull(),
            'gtu_sig_datum' => $this->dateTime()->notNull(),
            'gtu_sig_id' => $this->integer()->notNull()

        ]);

        $this->addForeignKey('g_id_foreignkey', '{{%gerichte_to_user}}', 'gtu_g_id', '{{%gerichte}}', 'g_id');
        $this->addForeignKey('u_id_foreignkey', '{{%gerichte_to_user}}', 'gtu_u_id', '{{%user}}', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('g_id_foreignkey', '{{%gerichte_to_user}}');
        $this->dropForeignKey('u_id_foreignkey', '{{%gerichte_to_user}}');
        $this->dropTable('{{%gerichte_to_user}}');
    }
}
