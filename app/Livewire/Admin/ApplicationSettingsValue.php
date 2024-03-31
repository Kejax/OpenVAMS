<?php

namespace App\Livewire\Admin;

use App\Models\ApplicationSettings;
use Livewire\Component;

class ApplicationSettingsValue extends Component
{

    public string $name;
    public string $type;
    public string $value;
    public string $displayName;

    public function mount($type, $name) {
        $this->type = $type;
        $this->name = $name;
        $this->value = ApplicationSettings::where('name', $name)->first()->value;
    }

    public function updated() {
        $setting = ApplicationSettings::where('name', $this->name)->first();
        $setting->value = $this->value;
        $setting->save();
    }

    public function render()
    {
        return view('livewire.admin.application-settings-value', [
                'type' => $this->type,
        ]);
    }
}
