<?php

class Menus extends ActiveRecord
{

    public function getMenus($page, $ppage=20)
    {
        return $this->paginate("page: $page", "per_page: $ppage", 'order: categoria asc');
    }
}