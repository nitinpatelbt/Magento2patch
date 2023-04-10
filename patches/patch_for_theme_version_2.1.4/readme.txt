If you are new, you can ignore this patch

Version 2.1.4:
- Fix issue when creating child theme.
- Fix "include_in_menu" issue for megamenu
- Fix coupon cart issue
- Fix sharethis block issue
- Fix some config issues


HOW TO APPLY THIS PATCH:

- Upload folder named app in patch_for_theme_version_2.1.3 to magento root on your server, override old files then connect to ssh, navigate to magento root and run the following commands:

- php bin/magento setup:di:compile

- php bin/magento setup:static-content:deploy -f

- php bin/magento c:c