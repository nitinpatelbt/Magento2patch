If you are new, you can ignore this patch

Version 2.1.7:
- Fix issue increase, decrease qty in Shopping Cart
- Fix issue increase, decrease qty in Onestep Checkout
- Fix login issue in OneStep Checkout
- Fix minicart issue
- Fix tooltip issue on register page


HOW TO APPLY THIS PATCH:

- Upload folder named app in patch_for_theme_version_2.1.7 to magento root on your server, override old files.

- Connect to ssh, navigate to magento root and run the following commands:

- php bin/magento setup:di:compile

- php bin/magento setup:static-content:deploy -f

- php bin/magento c:c