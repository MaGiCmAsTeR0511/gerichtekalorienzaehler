<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%gerichte}}`.
 */
class m210609_180424_create_gerichte_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%gerichte}}', [
            'g_id' => $this->primaryKey(),
            'g_name' => $this->string(255)->notNull(),
            'g_beschreibung' => $this->string(5000),
            'g_fett' => $this->float()->notNull(),
            'g_eiweiß' => $this->float()->notNull(),
            'g_kohlenhydrate' => $this->float()->notNull(),
            'g_kalorien' => $this->float()->notNull(),
            'g_sig_datum' => $this->dateTime()->notNull(),
            'g_sig_id' => $this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%gerichte}}');
    }
}
