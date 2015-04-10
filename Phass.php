<?php
/**
 * Class Phass
 *
 * This tool compile all .scss files in a given folder into .css files in a given folder.
 * Everything happens right when you run your app, on-the-fly, in pure PHP. No Ruby needed, no configuration needed.
 *
 * The currently supported version of SCSS syntax is 3.2.12, which is the latest one.
 * The compiler uses the SCSS syntax, which is recommended and mostly used. The old SASS syntax is not supported.
 *
 * @see SASS Homepage: http://sass-lang.com/
 * @see scssphp, the used compiler (in PHP): http://leafo.net/scssphp/
 */
class Phass {
    static public function watch($scss_folder, $css_folder, $format_style = "scss_formatter") {
        $scss_compiler = new scssc();
        $scss_compiler->setImportPaths($scss_folder);
        $scss_compiler->setFormatter($format_style);
        $filelist = glob($scss_folder . "[~a-zA-Z]*.scss");

        foreach ($filelist as $file_path) {
            $file_path_elements = pathinfo($file_path);
            $file_name = $file_path_elements['filename'];
            $string_sass = file_get_contents($scss_folder . $file_name . ".scss");
            $string_css = $scss_compiler->compile($string_sass);
            file_put_contents($css_folder . $file_name . ".css", $string_css);
        }
    }
}