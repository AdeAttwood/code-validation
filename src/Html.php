<?php namespace CodeValidation;

class Html
{
    public static function html5($html)
    {
        $htmlValExixutable = dirname(__DIR__ ).'/valTools/vnu.jar';

        exec('java -jar 2>&1 ' . $htmlValExixutable . ' ' . $html, $errors);
        if ($errors === null) {
            return [];
        } else {
            return $errors;
        }
    }
}
