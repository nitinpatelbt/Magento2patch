/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Smile ElasticSuite to newer
 * versions in the future.
 *
 * @category  Smile
 * @package   Smile\ElasticsuiteCatalog
 * @author    Aurelien FOUCRET <aurelien.foucret@smile.fr>
 * @copyright 2020 Smile
 * @license   Open Software License ("OSL") v. 3.0
 */

var config = {
    map: {
        '*': {
            rangeSlider: 'Smile_ElasticsuiteCatalog/js/range-slider-widget'
        }
    },
    shim: {
        'Smile_ElasticsuiteCatalog/js/jquery.ui.touch-punch.min': {
            deps: ['jquery-ui-modules/mouse']
        }
    }
};
