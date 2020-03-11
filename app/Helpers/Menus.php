<?php
use App\AdminModel\Menu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// This multi level menu function is for aside menus
function generate_multilevel_menus($parent_id = 0) {
    $priority_id = Auth::user()->user_level;
    $html = "";
    $menues = Menu::where('parent_id', $parent_id)->where('status', 1)->orderBy('serial_no')->get();

    if ($menues->count() > 0) {
        foreach ($menues as $key => $menu) {
            $has_access = DB::table('priority_menu')->where('priority_id', $priority_id)->where('menu_id', $menu->id)->first();
            if ($has_access) {
                if ($menu->route_name && $menu->route_name == '#') { // Main/Sub Menu with Child Menu
                    $html .= '<li id="' . $menu->selector . '-mm" class="nav-item start">';
                    $html .= '<a href="javascript:;" class="nav-link nav-toggle">';
                    if ($menu->parent_id == 0) {
                        if ($menu->icon) {
                            $html .= '<i style="color:#fff;" class="' . $menu->icon . '"></i>';
                        }
                    } else {
                        $html .= '<i class="icon-bar-chart"><span></span></i>';
                    }
                    $html .= '<span class="title">';
                    $html .= $menu->menu_name; // $menu->parent_id
                    $html .= '</span><span class="arrow"></span></a>';
                    $html .= '<ul class="sub-menu">';
                    $html .= generate_multilevel_menus($menu->id);
                    $html .= '</li>';
                    $html .= '</ul>';
                } else {
                    if ($menu->parent_id == 0) { // Main Menu With no Child Menu
                        $html .= '<li id="' . $menu->selector . '-mm">';
                        $html .= '<a href="' . url($menu->route_name) . '">';
                        if ($menu->icon) {
                            $html .= '<i class="' . $menu->icon . '"></i>';
                        }
                        $html .= '<span class="title">';
                        $html .= $menu->menu_name; // $menu->parent_id
                        $html .= '</span></a>';
                        $html .= '</li>';
                    } else { // Sub Menu with no Child Menu
                        $html .= '<li id="' . $menu->selector . '-sm" class="nav-item start">';
                        $html .= '<a href="' . url($menu->route_name) . '" class="nav-link">';
                        if ($menu->icon) {
                            $html .= '<i class="' . $menu->icon . '"></i>';
                        }else{
                            $html .= '<i class="icon-bar-chart"></i>';
                        }
                        $html .= '<span class="title"> ';
                        $html .= $menu->menu_name; // $menu->parent_id
                        $html .= '</span>';
                        $html .= '</a>';
                        $html .= '</li>';
                    }
                }
            }
        }
    }
    return $html;
}

function siblingsHasChild($parent_id, $menu_id) {
    $result = false;
    $siblings = Menu::where('parent_id', $parent_id)->where('id', '<>', $menu_id)->where('status', 1)->get(); // Get the Siblings
    foreach ($siblings as $sibling) {
        $has_child = Menu::where('parent_id', $sibling->id)->where('status', 1)->first(); // Check if the Siblings has child
        if ($has_child) {
            $result = true;
            break;
        }
    }
    return $result;
}

function generate_priority_menus($priority_id, $parent_id = 0) {
    $html = "";
    $menues = Menu::where('parent_id', $parent_id)->where('status', 1)->orderBy('serial_no')->get();
    if ($menues->count() > 0) {
        $html .= "<ul>";
        foreach ($menues as $key => $menu) {
            $has_access = DB::table('priority_menu')->where('priority_id', $priority_id)->where('menu_id', $menu->id)->first();
            $checked = '';
            if ($has_access) {
                $checked = "checked";
            }
            if (($menu->route_name && $menu->route_name == '#') || $menu->parent_id == 0 || siblingsHasChild($menu->parent_id, $menu->id)) {
                $html .= '<li class="col-sm-12">';
                $html .= '<label class="kt-checkbox"><input type="checkbox" name="menu_id[]" value="' . $menu->id . '" id="menu-id-' . $menu->id . '" parent-id="' . $menu->parent_id . '" ' . $checked . '>' . $menu->menu_name . '<span></span></label>';
            } else {
                $html .= '<li class="col-sm-4">';
                $html .= '<label class="kt-checkbox kt-checkbox--success"><input type="checkbox" name="menu_id[]" value="' . $menu->id . '" id="menu-id-' . $menu->id . '" parent-id="' . $menu->parent_id . '" ' . $checked . '>' . $menu->menu_name . '<span></span></label>';
            }
            $html .= generate_priority_menus($priority_id, $menu->id);

            $html .= "</li>";
        }
        $html .= "</ul>";
    }
    return $html;
}
