<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Setting;
class SettingComposer {

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $site_info=Setting::getSettings();
        $view->with('site_info', $site_info);
    }

}