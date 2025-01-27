<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslationController extends Controller
{
    public function translateLvToEn()
    {
        $lvFilePath = resource_path('lang/lv/messages.php');
        $enFilePath = resource_path('lang/en/messages.php');

        // Check if the Latvian file exists
        if (!File::exists($lvFilePath)) {
            return 'Latvian messages.php file not found.';
        }

        // Include the Latvian file to get its translations
        $lvTranslations = include $lvFilePath;
        if (!is_array($lvTranslations)) {
            return 'Invalid PHP array format in messages.php.';
        }

        $translator = new GoogleTranslate('en'); // Target language
        $translator->setSource('lv'); // Source language

        $enTranslations = [];
        foreach ($lvTranslations as $key => $value) {

            if ($key === 'lava') {
                $enTranslations[$key] = $value; // Skip translation for 'lava'
                continue;
            }
            
            try {
                // Translate the value from Latvian to English
                $enTranslations[$key] = $translator->translate($value);
            } catch (\Exception $e) {
                // Fallback to original value in case of an error
                $enTranslations[$key] = $value;
            }
        }

        // Format the translated data as a PHP array
        $phpContent = "<?php\n\nreturn " . var_export($enTranslations, true) . ";\n";

        // Save the translated data to the English messages.php file
        File::put($enFilePath, $phpContent);

        return 'Translation completed! Check the en/messages.php file.';
    }
}
