<?php

use yii\db\Migration;

class m150731_150644_page_menu extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_link}}', ['id' => 'admin-menu-page', 'menu_id' => 'admin-menu', 'link' => '/page/default/index', 'image' => 'file', 'created_by' => 1, 'order' => 2]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'admin-menu-page', 'label' => 'Pages', 'language' => 'en-US']);
    }

    public function down()
    {
        $this->delete('{{%menu_link}}', ['like', 'id', 'admin-menu-page']);
    }
}