<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\widgets\GameTextMenu;


use app\modules\game\helpers\VarHelper;
use yii\base\Widget;

class GameTextMenu extends Widget
{
    /**
     * [
     *      [
     *          'text' => '<text>',
     *          'url' => '<url>',
     *          'image' => '<image url>',
     *          'children' => [],
     *          'comment => '<text>',
     *          'disabled' => <false>,
     *      ],
     * ]
     *
     * @var array
     */
    public $items = [];
    public $params = [];

    public function run()
    {
        /*return $this->render('view', [
            'items' => $this->items,
        ]);*/

        $menus = $this->submenu($this->items);
        $html = '';
        foreach ($menus as $k => $menu)
        {
            $html .= $this->render('menu', [
                'menu' => $menu,
                'is_first' => $k == 0,
            ]);
        }

        if($this->params)
        {
            $html = VarHelper::fillStringVars($html, $this->params);
        }

        return $this->render('view', [
            'menu' => $html,
        ]);
    }

    protected function submenu($items, $ret = [], $id = '0')
    {
        $menu_html = '<ul class="list-unstyled game-menu col-md-4">'."\n"; //ul start

        foreach ($items as $k => $item)
        {
            $item_id = $id . '-'.$k;
            $css_item_id = 'game-text-menu-' . $item_id;

            $menu_html .= $this->render('single', ['item' => $item, 'item_id' => $css_item_id]) . "\n";
            if(!empty($item['children']))
                $ret = $this->submenu($item['children'], $ret, $item_id);
        }

        $menu_html .= '</ul>'."\n"; //ul end

        $parents = explode('-', $id);
        array_pop($parents);
        $parent_id = implode('-', $parents);

        array_unshift($ret, [
            'html' =>$menu_html,
            'parent_id' => $parent_id,
            'base_parent_id' => 0,
            'id' => $id,
        ]);

        return $ret;
    }
}