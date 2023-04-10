If you are new, you can ignore this patch

Version 2.1.1:
Added:
- Fix Label config for Ajax Layered Navigation
- Fix Megamenu other root category issue



HOW TO APPLY THIS PATCH:

- Upload two folders app and pub in patch_for_theme_version_2.1.1 to magento root on your server, override old files then connect to ssh, navigate to magento root and run the following commands:

- rm -rm var/* ( remove the content of var folder )

- rm -rm generated/* ( remove the content of generated folder )

- rm -rm pub/static/frontend/Mgs/* ( remove the content of pub/static/frontend/Mgs folder )

- php bin/magento setup:static-content:deploy -f

- php bin/magento c:c