If you are new, you can ignore this patch

Version 2.1.2:
- Update home page layout: Auto Part
- Option to disable delivery date on Onestep Checkout
- Fix "Term & Condition" issue on Onestep Checkout
- Fix style issue on Onestep Checkout
- Fix issue price slider on mobile


HOW TO APPLY THIS PATCH:

- Upload two folders: app and pub in patch_for_theme_version_2.1.2 to magento root on your server, override old files then connect to ssh, navigate to magento root and run the following commands:

- php bin/magento setup:upgrade

- php bin/magento setup:static-content:deploy -f

- php bin/magento c:c