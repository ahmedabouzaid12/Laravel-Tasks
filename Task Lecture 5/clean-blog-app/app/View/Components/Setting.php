<?php

namespace App\View\Components;

use Closure;
use App\Models\Setting AS SettingTable;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Setting extends Component
{
    /**
     * Create a new component instance.
     */
    public $setting;
    public function __construct()
    {
        $this->setting = SettingTable::where('id',1)->first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.setting');
    }
}
