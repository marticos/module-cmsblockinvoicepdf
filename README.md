# Mage2 Module Marticos CmsBlockInvoicePdf

    composer require marticos/module-cmsblockinvoicepdf
    bin/magento s:up
    bin/magento s:d:c
    bin/magento c:f

Magento 2 module to have a CMS block displayed on the bottom of the invoice PDF.

You can find the CMS block to edit the content in Magento Admin > Content > Elements > Blocks
Then filter by identifier "invoice-footer".

**Test Cases:**

1) Check if the CMS block with the identifier "invoice-footer" has been created after the module installation.
2) Change the content of the CMS block and print an invoice to check the footer if the new content is displayed.

