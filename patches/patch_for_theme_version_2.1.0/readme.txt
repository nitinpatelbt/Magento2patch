If you are new, you can ignore this patch

Version 2.1.0:
Added:
- Update Homepage Layout: Home Metro, Home Lookbook, Home Categories Products
- Update Onestep Checkout extension



HOW TO APPLY THIS PATCH:

- Upload two folders app and pub in patch_for_theme_version_2.1.0 to magento root on your server, override old files then connect to ssh, navigate to magento root and run the following commands:

- rm -rm var/* ( remove the content of var folder )

- rm -rm generated/* ( remove the content of generated folder )

- rm -rm pub/static/frontend/Mgs/* ( remove the content of pub/static/frontend/Mgs folder )

- php bin/magento module:enable MGS_OSCheckout

- php bin/magento setup:upgrade

- php bin/magento setup:static-content:deploy -f

- php bin/magento c:c

If you want to use New homepage layout, you can import Themes\Magento_2\Version_2\Homepage Demo\Home_Name.xml
To know how to import homepage, please read this document: https://themes.magesolution.com/claue/docs/v2/#export-import-restore