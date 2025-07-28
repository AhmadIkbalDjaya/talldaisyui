<?php

namespace AhmadIkbalDjaya\Talldaisyui;

use AhmadIkbalDjaya\Talldaisyui\Console\Commands\InstallTalldaisyuiCommand;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class TallDaisyUiServiceProvider extends ServiceProvider
{
  public function register(): void{}

  public function boot(): void 
  {
    $this->publishes([
      __DIR__.'/../src/resources/css/talldaisyui.css' => resource_path("css/talldaisyui.css")
    ], "talldaisyui-css");

    $this->registerComponents();

    if ($this->app->runningInConsole()) {
      $this->commands([
        InstallTalldaisyuiCommand::class,
      ]);
    }
  }
  
  private function registerComponents(): void
  {
    $this->loadViewsFrom(__DIR__."/../src/resources/views", "talldaisyui");

    $components = $this->getComponents();

    foreach ($components as $name => $path) {
      Blade::component("talldaisyui::components.$path", $name);
    }
  }

  private function getComponents(): array
  {
    return [
      "alert" => "alert.index",
      "badge" => "badge.index",
      "breadcrumbs" => "breadcrumbs.index",
      "breadcrumbs.item" => "breadcrumbs.item",
      "button" => "button.index",
      "checkbox" => "checkbox.index",
      "file-input" => "file-input.index",
      "input" => "input.index",
      "kbd" => "kbd.index",
      "loading" => "loading.index",
      "progress" => "progress.index",
      "radio" => "radio.index",
      "range" => "range.index",
      "select" => "select.index",
      "skeleton" => "skeleton.index",
      "status" => "status.index",
      "textarea" => "textarea.index",
      "toggle" => "toggle.index",
      "tooltip" => "tooltip.index",
      "tooltip.content" => "tooltip.content",
    ];
  }
}