<?php
namespace Mairipora;

class Theme extends \MapasCulturais\Themes\BaseV2\Theme
{
    static function getThemeFolder()
    {
        return __DIR__;
    }

    function _init()
    {
        parent::_init();

        // paleta de cores (assets/css/theme-Mairipora.css) - sobrescreve
        // as CSS custom properties (--mc-*) carregadas pelo theme-BaseV2.css
        $this->enqueueStyle('app-v2', 'theme-mairipora', 'css/theme-Mairipora.css');
    }
}
