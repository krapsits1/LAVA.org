<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslationController extends Controller
{
    public function translateLvToEn()
    {
        $lvFilePath = resource_path('lang/lv.json');
        $enFilePath = resource_path('lang/en.json');

        if (!File::exists($lvFilePath)) {
            return 'Latvian JSON file not found.';
        }

        $lvTranslations = json_decode(File::get($lvFilePath), true);
        if (!$lvTranslations) {
            return 'Invalid JSON format in lv.json.';
        }

        $translator = new GoogleTranslate('en'); // Target language
        $translator->setSource('lv'); // Source language

        $enTranslations = [];
        foreach ($lvTranslations as $key => $value) {
            try {
                $enTranslations[$key] = $translator->translate($value);
            } catch (Exception $e) {
                $enTranslations[$key] = $value; // Fallback
            }
        }

        File::put($enFilePath, json_encode($enTranslations, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        return 'Translation completed! Check the en.json file.';
    }
}
