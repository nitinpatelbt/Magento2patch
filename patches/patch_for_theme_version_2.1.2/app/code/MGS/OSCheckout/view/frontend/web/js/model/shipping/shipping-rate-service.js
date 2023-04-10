/**
 * @copyright Copyright © 2020 magesolution. All rights reserved.
 * @author    @copyright Copyright (c) 2014 magesolution (<https://www.magesolution.com>)
 * @license <https://www.magesolution.com/license-agreement.html>
 * @Author: ndthien0912<ndthien0912@gmail.com>
 * @github: <https://github.com/magesolution>
 */
define(
    [
        'Magento_Checkout/js/model/quote',
        'Magento_Checkout/js/model/shipping-rate-processor/new-address',
        'Magento_Checkout/js/model/shipping-rate-processor/customer-address'
    ],
    function (quote, defaultProcessor, customerAddressProcessor) {
        'use strict';

        var processors = [];

        processors.default = defaultProcessor;
        processors['customer-address'] = customerAddressProcessor;

        return {
            isAddressChange: false,
            registerProcessor: function (type, processor) {
                processors[type] = processor;
            },
            estimateShippingMethod: function () {
                var type = quote.shippingAddress().getType();

                if (processors[type]) {
                    processors[type].getRates(quote.shippingAddress());
                } else {
                    processors.default.getRates(quote.shippingAddress());
                }
            }
        }
    }
);
