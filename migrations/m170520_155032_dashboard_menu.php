<?php

use yii\db\Schema;

class m170520_155032_dashboard_menu extends yii\db\Migration
{

    public function up()
    {
        $this->insert('{{%menu_link}}', ['id' => 'admin-menu-dashboard', 'menu_id' => 'admin-menu', 'link' => '/', 'image' => 'th', 'created_by' => 1, 'order' => 1]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'admin-menu-dashboard', 'label' => 'Dashboard', 'language' => 'en-US']);
    }

    public function down()
    {
        $this->delete('{{%menu_link}}', ['like', 'id', 'admin-menu-dashboard']);
    }

}
