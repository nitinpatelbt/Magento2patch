If you are new, you can ignore this patch

Version 2.1.5:
- Fix product tab issue
- Update patch for magento 2.4.4+


HOW TO APPLY THIS PATCH:

- Upload folder named app in patch_for_theme_version_2.1.4 to magento root on your server, override old files.

- If you are using magento 2.4.4 or later: upload folder named app from patch_for_magento_2.4.4+ to magento root, override old files.

- Connect to ssh, navigate to magento root and run the following commands:

- php bin/magento setup:di:compile

- php bin/magento setup:static-content:deploy -f

- php bin/magento c:c