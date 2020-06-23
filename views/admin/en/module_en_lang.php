<?php
/**
* Shop System Plugins:
* - Terms of Use can be found under:
* https://github.com/wirecard/oxid-ee/blob/master/_TERMS_OF_USE
* - License can be found under:
* https://github.com/wirecard/oxid-ee/blob/master/LICENSE
*/

$sLangName = 'English';

$aLang = array(
    'charset' => 'UTF-8',
    'wd_accept' => 'Accept',
    'wd_account_holder_title' => 'Account Owner',
    'wd_amount' => 'Amount',
    'wd_bic' => 'BIC',
    'wd_birthdate_input' => 'Date of Birth',
    'wd_cancel' => 'Cancel',
    'wd_canceled_payment_process' => 'You have canceled the payment process.',
    'wd_capture' => 'Capture',
    'wd_city' => 'City',
    'wd_company_name_input' => 'Company',
    'wd_config_additional_info' => 'Send Additional Information',
    'wd_config_additional_info_desc' => 'Additional data will be sent for the purpose of fraud protection. This additional data includes billing/shipping address, shopping basket and descriptor.',
    'wd_config_allowed_currencies' => 'Allowed Currencies',
    'wd_config_allowed_currencies_desc' => 'Payment method Guaranteed Invoice is only displayed if the activated currency is one of the currencies selected here.',
    'wd_config_allow_changed_shipping' => 'Allow Shipping Address Change',
    'wd_config_allow_changed_shipping_desc' => 'If disabled, the consumer is required to re-enter their card details in case their shipping address has changed.',
    'wd_config_base_url' => 'Wirecard Server Address (URL)',
    'wd_config_base_url_desc' => 'Wirecard Server Address (URL) (e.g. https://api.wirecard.com).',
    'wd_config_billing_countries' => 'Allowed Billing Countries',
    'wd_config_billing_countries_desc' => 'Payment method Guaranteed Invoice is only displayed during checkout if the consumer\'s billing country is one of the countries selected here. CTRL-click to select. Default pre-selection: Austria and Germany.',
    'wd_config_billing_shipping' => 'Identical Billing/Shipping Address',
    'wd_config_billing_shipping_desc' => 'If activated, payment method Guaranteed Invoice is only displayed if billing/shipping address are identical.',
    'wd_config_country_code' => 'Country Code',
    'wd_config_country_code_desc' => 'Sofort. requires a valid country code to use the correct logo (i.e. en_gb).',
    'wd_config_creditor_id' => 'Creditor ID',
    'wd_config_creditor_id_desc' => 'SEPA Direct Debit requires Creditor ID to create SEPA Direct Debit Mandate. You may apply for a Creditor ID at your financial institution.',
    'wd_config_delete_cancel_order' => 'Delete Canceled Order',
    'wd_config_delete_cancel_order_desc' => 'Automatically delete order after canceled payment process.',
    'wd_config_delete_failure_order' => 'Delete Failed Order',
    'wd_config_delete_failure_order_desc' => 'Automatically delete order after failed payment process.',
    'wd_config_descriptor' => 'Descriptor',
    'wd_config_descriptor_desc' => 'Send text which is displayed on the bank statement issued to your consumer by the financial service provider.',
    'wd_config_email' => 'Your email address',
    'wd_config_enable_bic' => 'BIC enabled',
    'wd_config_http_password' => 'Password',
    'wd_config_http_user' => 'Username',
    'wd_config_logo_variant' => 'Logo version',
    'wd_config_logo_variant_desc' => 'Show either standard or descriptive logo version to your consumers.',
    'wd_config_merchant_account_id' => 'Merchant Account ID (MAID)',
    'wd_config_merchant_account_id_desc' => 'Unique identifier assigned to your merchant account.',
    'wd_config_merchant_secret' => 'Secret Key',
    'wd_config_merchant_secret_desc' => 'Secret Key is mandatory to calculate the Digital Signature for payments.',
    'wd_config_message' => 'Your message',
    'wd_config_payment_action' => 'Payment Action',
    'wd_config_payment_action_desc' => 'Select between "Purchase" to capture/invoice your order automatically or "Authorization" to capture/invoice manually.',
    'wd_config_payolution_terms_url' => 'Payolution URL',
    'wd_config_payolution_terms_url_desc' => 'Mandatory if "Require Consent" is set to Yes.',
    'wd_config_PSD2_information' => 'PSD 2',
    'wd_config_PSD2_information_desc_oxid' => '</a>With regard to PSD 2 requirements, you should request<br> certain personal information from your consumers during<br> <u><a target="_blank" href=\'https://github.com/wirecard/oxid-ee/wiki/Credit-Card\'>checkout</a></u> to reduce the risk of transactions being rejected.',
    'wd_config_reply_to' => 'Reply to (optionally)',
    'wd_config_require_consent' => 'Require Consent',
    'wd_config_require_consent_desc' => 'Consumer must agree to the terms before proceeding with the checkout process.',
    'wd_config_shipping_countries' => 'Allowed Shipping Countries',
    'wd_config_shipping_countries_desc' => 'Payment method Guaranteed Invoice is only displayed if the consumer\'s shipping country is one of the countries selected here. CTRL-click to select. Default pre-selection: Austria and Germany.',
    'wd_config_shopping_basket' => 'Shopping Basket',
    'wd_config_shopping_basket_desc' => 'For the purpose of confirmation, payment supports shopping basket display during checkout. To enable this feature, activate Shopping Basket.',
    'wd_config_ssl_max_limit' => 'Non 3-D Secure Max. Limit',
    'wd_config_ssl_max_limit_desc' => 'This amount forces 3-D Secure transactions. Enter "null" to disable the Non 3-D Secure Max. Limit.',
    'wd_config_three_d_merchant_account_id' => '3-D Secure MAID',
    'wd_config_three_d_merchant_account_id_desc' => 'Unique identifier assigned to your 3-D Secure merchant account. Can be set to "null" to force SSL process.',
    'wd_config_three_d_merchant_secret' => '3-D Secure Secret Key',
    'wd_config_three_d_merchant_secret_desc' => 'Secret Key is mandatory to calculate the Digital Signature for the 3-D Secure payment. Can be set to "null" to force SSL process.',
    'wd_config_three_d_min_limit' => '3-D Secure Min. Limit',
    'wd_config_three_d_min_limit_desc' => 'This amount forces 3-D Secure transactions. Enter "null" to disable the 3-D Secure Min. Limit.',
    'wd_config_vault' => 'One-Click Checkout',
    'wd_config_vault_desc' => 'Card details are saved for later use.',
    'wd_config_wpp_url' => 'Wirecard Payment Page v2 Address (URL WPP v2)',
    'wd_config_wpp_url_desc' => 'Wirecard Payment Page v2 Address (URL WPP v2) (e.g. https://wpp.wirecard.com).',
    'wd_copy_xml_text' => 'Copy XML',
    'wd_country' => 'Country',
    'wd_credit' => 'Refund',
    'wd_creditor' => 'Creditor',
    'wd_creditor_mandate_id' => 'Mandate ID',
    'wd_currency_config' => 'Each currency has to be configured.',
    'wd_customerId' => 'Customer ID',
    'wd_date-of-birth' => 'Date of Birth',
    'wd_date_format_php_code' => 'm/d/Y',
    'wd_date_format_user_hint' => 'MM/DD/YYYY',
    'wd_debtor' => 'Debtor',
    'wd_debtor_acc_owner' => 'Account Owner',
    'wd_default_currency' => 'Default Currency',
    'wd_descriptor' => 'Descriptor',
    'wd_email' => 'Email',
    'wd_enter_country_code_error' => 'Please enter a valid country code.',
    'wd_enter_valid_email_error' => 'Please enter a valid email address.',
    'wd_error_credentials' => 'Test failed, please check your credentials.',
    'wd_error_save_failed' => 'Configuration not valid. Unable to save.',
    'wd_first-name' => 'First Name',
    'wd_gender' => 'Gender',
    'wd_heading_title' => 'Wirecard',
    'wd_heading_title_alipay_crossborder' => 'Alipay Cross-border',
    'wd_heading_title_creditcard' => 'Card Payments',
    'wd_heading_title_eps' => 'eps-Überweisung',
    'wd_heading_title_giropay' => 'giropay',
    'wd_heading_title_ideal' => 'iDEAL',
    'wd_heading_title_payolution_b2b' => 'Guaranteed Invoice (Payolution B2B)',
    'wd_heading_title_payolution_b2b_consumer' => 'Invoice (Payolution B2B)',
    'wd_heading_title_payolution_invoice' => 'Guaranteed Invoice (Payolution B2C)',
    'wd_heading_title_payolution_invoice_consumer' => 'Invoice (Payolution B2C)',
    'wd_heading_title_paypal' => 'PayPal',
    'wd_heading_title_pia' => 'Payment In Advance',
    'wd_heading_title_poi' => 'Payment On Invoice',
    'wd_heading_title_ratepayinvoice' => 'Guaranteed Invoice by Wirecard',
    'wd_heading_title_ratepayinvoice_consumer' => 'Invoice by Wirecard',
    'wd_heading_title_sepact' => 'SEPA Credit Transfer',
    'wd_heading_title_sepadd' => 'SEPA Direct Debit',
    'wd_heading_title_sofortbanking' => 'Sofort.',
    'wd_heading_title_support' => 'Wirecard Support',
    'wd_heading_title_transaction_details' => 'Wirecard Transactions',
    'wd_house-extension' => 'House Extension',
    'wd_iban' => 'IBAN',
    'wd_ideal_legend' => 'Select your bank',
    'wd_ip' => 'IP Address',
    'wd_last-name' => 'Last Name',
    'wd_maid' => 'MAID',
    'wd_manipulated' => 'manipulated',
    'wd_merchant-crm-id' => 'Merchant CRM ID',
    'wd_message_empty_error' => 'Message must not be empty.',
    'wd_more_info' => 'More Information',
    'wd_no' => 'No',
    'wd_orderNumber' => 'Order Number',
    'wd_order_error' => 'An error occurred during the payment process. Please try again.',
    'wd_order_error_info' => 'An error occurred in the payment process. The order has been canceled.',
    'wd_order_status' => 'Order status',
    'wd_order_status_authorized' => 'Authorized',
    'wd_order_status_cancelled' => 'Cancelled',
    'wd_order_status_failed' => 'Failed',
    'wd_order_status_pending' => 'Pending',
    'wd_order_status_purchased' => 'Paid',
    'wd_order_status_refunded' => 'Refunded',
    'wd_panel_action' => 'Action',
    'wd_panel_amount' => 'Amount',
    'wd_panel_currency' => 'Currency',
    'wd_panel_details' => 'Details',
    'wd_panel_order_id' => 'Order Reference',
    'wd_panel_order_number' => 'Order Number',
    'wd_panel_parent_transaction_id' => 'Parent Transaction ID',
    'wd_panel_payment_method' => 'Payment Method',
    'wd_panel_provider_transaction_id' => 'Provider Transaction ID',
    'wd_panel_transaction' => 'Transaction',
    'wd_panel_transaction_copy' => 'Copy XML',
    'wd_panel_transaction_date' => 'Date',
    'wd_panel_transaction_state' => 'Transaction State',
    'wd_panel_transcation_id' => 'Transaction ID',
    'wd_paymentMethod' => 'Payment Method',
    'wd_payment_awaiting' => 'Awaiting payment from Wirecard.',
    'wd_payment_cancelled_text' => 'Payment was cancelled.',
    'wd_payment_cost' => 'Payment Cost',
    'wd_payment_failed_text' => 'Payment process failed.',
    'wd_payment_method_settings' => 'Payment Method Settings',
    'wd_payment_refunded_text' => 'Payment was refunded.',
    'wd_payment_success_text' => 'Payment process successful.',
    'wd_payolution_terms' => 'I agree that the data which is necessary for the liquidation of purchase on account and which is used to complete the identity and credit check is transmitted to Payolution. My <u><a href="%s" target="_blank">consent</a></u> can be revoked at any time with effect for the future.',
    'wd_phone' => 'Phone',
    'wd_pia_ptrid' => 'Reference',
    'wd_postal-code' => 'Postal Code',
    'wd_ptrid' => 'Provider Transaction Reference ID',
    'wd_ratepayinvoice_fields_error' => 'Minimum age to pay with Guaranteed Invoice: 18.',
    'wd_redirect_text' => 'You are being redirected. Please wait.',
    'wd_refund' => 'Refund',
    'wd_requestedAmount' => 'Amount',
    'wd_requestId' => 'Request ID',
    'wd_save_to_user_account' => 'Save data to your user account.',
    'wd_secured' => 'secured',
    'wd_send_email' => 'Submit',
    'wd_sepa_mandate' => 'SEPA Mandate',
    'wd_sepa_text_1' => 'I authorize the creditor',
    'wd_sepa_text_2' => 'to send instructions to my bank to collect one single direct debit from my account. At the same time I instruct my bank to debit my account in accordance with the instructions from the creditor',
    'wd_sepa_text_2b' => '.',
    'wd_sepa_text_3' => 'Note: As part of my rights, I am entitled to a refund under the terms and conditions of my agreement with my bank. A refund must be claimed within 8 weeks starting from the date on which my account was debited.',
    'wd_sepa_text_4' => 'I irrevocably agree that, in the event that the direct debit is not honored, or objection against the direct debit exists, my bank will disclose to the creditor',
    'wd_sepa_text_5' => 'my full name, address and date of birth.',
    'wd_sepa_text_6' => 'I have read and accepted the SEPA Direct Debit Mandate information.',
    'wd_shipping-method' => 'Shipping Method',
    'wd_shipping_title' => 'Shipping',
    'SHOP_MODULE_GROUP_wd_emails' => 'Emails',
    'SHOP_MODULE_wd_email_on_pending_orders' => 'Send notification email for pending orders.',
    'wd_social-security-number' => 'Social Security Number',
    'wd_state_awaiting' => 'awaiting',
    'wd_state_closed' => 'closed',
    'wd_state_error' => 'error',
    'wd_state_success' => 'success',
    'wd_street1' => 'Street',
    'wd_street2' => 'Street 2',
    'wd_success_credentials' => 'Merchant configuration was successfully tested.',
    'wd_success_email' => 'Email sent successfully.',
    'wd_support_description' => 'System information will be automatically added to your message and will be sent to',
    'wd_support_email_from' => 'From',
    'wd_support_email_modules' => 'Other Modules',
    'wd_support_email_module_id' => 'Module ID',
    'wd_support_email_module_title' => 'Module Title',
    'wd_support_email_module_version' => 'Module Version',
    'wd_support_email_php' => 'PHP Version',
    'wd_support_email_reply_to' => 'Reply to',
    'wd_support_email_shop_edition' => 'OXID eShop Edition',
    'wd_support_email_shop_version' => 'OXID eShop Version',
    'wd_support_email_subject' => 'OXID eShop Support Request',
    'wd_support_email_system' => 'Server Info',
    'wd_support_send_error' => 'Support email could not be sent.',
    'wd_test_credentials' => 'Test Credentials',
    'wd_text_article_name' => 'Product Name',
    'wd_text_article_number' => 'Article Number',
    'wd_text_backend_operations' => 'Possible Post-Processing Operations',
    'wd_text_delete' => 'Delete',
    'wd_text_generic_error' => 'Action could not be performed.',
    'wd_text_generic_success' => 'Action performed successfully.',
    'wd_text_list' => 'Transactions',
    'wd_text_logo_variant_descriptive' => 'Descriptive',
    'wd_text_logo_variant_standard' => 'Standard',
    'wd_text_message' => 'Message',
    'wd_text_no_data_available' => 'No data available.',
    'wd_text_no_further_operations_possible' => 'No further operations possible.',
    'wd_text_order_no_transactions' => 'There are no associated transactions for this order.',
    'wd_text_payment_action_pay' => 'Purchase',
    'wd_text_payment_action_reserve' => 'Authorization',
    'wd_text_quantity' => 'Quantity',
    'wd_text_support' => 'Support',
    'wd_text_vault' => 'One-Click Checkout',
    'wd_three_d_link_text' => 'Non 3D Secure and 3D Secure Limits',
    'wd_timeStamp' => 'Date',
    'wd_total_amount_not_in_range_text' => 'Total amount not in allowed range.',
    'wd_transactionID' => 'Transaction ID',
    'wd_transactionState' => 'Transaction State',
    'wd_transactionType' => 'Transaction Type',
    'wd_transaction_details_title' => 'Transaction Details',
    'wd_transaction_response_details' => 'Response Details',
    'wd_transfer_notice' => 'Please transfer the amount using the following data:',
    'wd_unmatched' => 'unmatched',
    'wd_vault_changed_shipping_text' => 'Your shipping address has changed since your last order. For security purposes we require you to enter the new card details.',
    'wd_vault_save_text' => 'Save for later use.',
    'wd_vault_use_new_text' => 'Use new card',
    'wd_wait_for_final_status' => 'Please wait for separate email with the final status of your payment.',
    'wd_warning_credit_card_url_mismatch' => 'Attention: Please check your credentials within the URL setting fields. You might have configured/combined a productive account with a test account.',
    'wd_yes' => 'Yes',
);
