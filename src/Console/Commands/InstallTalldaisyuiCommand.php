<?php

namespace Talldaisyui\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class InstallTalldaisyuiCommand extends Command {
  protected $signature = "install:talldaisyui";

  protected $description = "Install and Setup TallDaisyUi";

  public function handle(): void 
  {
    $this->publishAndImportAssets();
    Artisan::call("view:clear");

    $this->info("\n");
    $this->info("Run `npm run dev` or `bun dev`");
  }

  protected function publishAndImportAssets(): void
  {
    Artisan::call("vendor:publish --tag=talldaisyui-css --force");

    $appCssPath = resource_path("css/app.css");
    $importStatements = [];

    if (File::exists($appCssPath)) {
      $appCssContent = File::get($appCssPath);

      if (strpos($appCssContent, "talldaisyui.css") === false) {
        $importStatements[] = "@import './talldaisyui.css';";
      }

      if (!empty($importStatements)) {
        $importStatements[] = "";
        $updatedContent = implode(PHP_EOL, $importStatements) . PHP_EOL . $appCssContent;
        File::put($appCssPath, $updatedContent);
        $this->info("TallDaisyUi installed successfully");
      } else {
        $this->info("TallDaisyUi already installed"); 
      }
    } else {
      $this->error("`app.css` file not found");
    }
  }
}