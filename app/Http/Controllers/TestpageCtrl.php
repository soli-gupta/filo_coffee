<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CmspageModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Process;
use App\CmsBlockModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TestpageCtrl extends Controller
{
    public function testpage()
    {
        $target = storage_path('app/public');
        $link = public_path('storage');

        if (!file_exists($link)) {
            try {
                if (symlink($target, $link)) {
                    echo "The [public/storage] directory has been linked successfully.";
                    Log::info('The [public/storage] directory has been linked successfully.');
                } else {
                    echo "Failed to create the symbolic link for an unknown reason.";
                    Log::error('Failed to create the symbolic link for an unknown reason.');
                }
            } catch (\Exception $e) {
                Log::error('Failed to create the symbolic link: ' . $e->getMessage());
            }
        } else {
            echo "The symbolic link already exists";
            Log::info('The symbolic link already exists.');
        }
        // for storage link end
    }
}