<?php
/**
 * Shop System Plugins:
 * - Terms of Use can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/_TERMS_OF_USE
 * - License can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/LICENSE
 */

namespace Wirecard\Oxid\Model;

use Wirecard\Oxid\Core\Helper;
use Wirecard\Oxid\Core\PaymentMethodHelper;

use Wirecard\PaymentSdk\Config\Config;
use Wirecard\PaymentSdk\Config\PaymentMethodConfig;
use Wirecard\PaymentSdk\Entity\SubMerchantInfo;
use Wirecard\PaymentSdk\Transaction\WeChatTransaction;
use Wirecard\PaymentSdk\Transaction\Transaction;

/**
 * Payment method implementation for WeChat QR Pay.
 *
 * @since 1.3.0
 */
class WeChatQrPayPaymentMethod extends PaymentMethod
{
    /**
     * @inheritdoc
     *
     * @since 1.3.0
     */
    protected static $_sName = 'wechat-qrpay';

    /**
     * @inheritdoc
     *
     * @return Config
     *
     * @since 1.3.0
     */
    public function getConfig()
    {
        $oConfig = parent::getConfig();

        $oPaymentMethodConfig = new PaymentMethodConfig(
            WeChatTransaction::NAME,
            $this->_oPayment->oxpayments__wdoxidee_maid->value,
            $this->_oPayment->oxpayments__wdoxidee_secret->value
        );

        $oConfig->add($oPaymentMethodConfig);

        return $oConfig;
    }

    /**
     * Get the current transaction to be processed
     *
     * @return Transaction
     *
     * @since 1.3.0
     */
    public function getTransaction()
    {
        return new WeChatTransaction();
    }

    /**
     * @inheritdoc
     *
     * @param Transaction $oTransaction
     * @param Order       $oOrder
     *
     * @since 1.3.0
     */
    public function addMandatoryTransactionData(&$oTransaction, $oOrder)
    {
        $oSubMerchantInfo = new SubMerchantInfo();
        $oSubMerchantInfo->setMerchantId('12152566'); // TODO where do we get this ID from?
        $oSubMerchantInfo->setMerchantName(Helper::getShop()->oxshops__oxtitleprefix->value);

        $oTransaction->setSubMerchantInfo($oSubMerchantInfo);
        $oTransaction->setOrderDetail(Helper::getDescriptor($oOrder->getId()));
    }

    /**
     * @inheritdoc
     *
     * @return array
     *
     * @since 1.3.0
     */
    public function getConfigFields()
    {
        $aAdditionalFields = [
            'descriptor' => [
                'type'  => 'select',
                'field' => 'oxpayments__wdoxidee_descriptor',
                'options' => [
                    '1' => Helper::translate('wd_yes'),
                    '0' => Helper::translate('wd_no'),
                ],
                'title' => Helper::translate('wd_config_descriptor'),
                'description' => Helper::translate('wd_config_descriptor_desc'),
            ],
            'additionalInfo' => [
                'type'  => 'select',
                'field' => 'oxpayments__wdoxidee_additional_info',
                'options' => [
                    '1' => Helper::translate('wd_yes'),
                    '0' => Helper::translate('wd_no'),
                ],
                'title' => Helper::translate('wd_config_additional_info'),
                'description' => Helper::translate('wd_config_additional_info_desc'),
            ],
            'deleteCanceledOrder' => [
                'type' => 'select',
                'field' => 'oxpayments__wdoxidee_delete_canceled_order',
                'options' => [
                    '1' => Helper::translate('wd_yes'),
                    '0' => Helper::translate('wd_no'),
                ],
                'title' => Helper::translate('wd_config_delete_cancel_order'),
                'description' => Helper::translate('wd_config_delete_cancel_order_desc'),
            ],
            'deleteFailedOrder' => [
                'type' => 'select',
                'field' => 'oxpayments__wdoxidee_delete_failed_order',
                'options' => [
                    '1' => Helper::translate('wd_yes'),
                    '0' => Helper::translate('wd_no'),
                ],
                'title' => Helper::translate('wd_config_delete_failure_order'),
                'description' => Helper::translate('wd_config_delete_failure_order_desc'),
            ],
            'allowedCurrencies' => [
                'type' => 'multiselect',
                'field' => 'oxpayments__allowed_currencies',
                'options' => PaymentMethodHelper::getCurrencyOptions(),
                'title' => Helper::translate('wd_config_allowed_currencies'),
                'description' => Helper::translate('wd_config_allowed_currencies_desc'),
                'required' => true,
            ],
        ];

        return parent::getConfigFields() + $aAdditionalFields;
    }

    /**
     * @inheritdoc
     *
     * @return array
     *
     * @since 1.3.0
     */
    public function getPublicFieldNames()
    {
        return array_merge(
            parent::getPublicFieldNames(),
            [
                'descriptor',
                'additionalInfo',
                'deleteCanceledOrder',
                'deleteFailedOrder',
                'allowedCurrencies',
            ]
        );
    }

    /**
     * @inheritdoc
     *
     * @return array
     *
     * @since 1.3.0
     */
    public function getMetaDataFieldNames()
    {
        return [
            'allowed_currencies',
        ];
    }
}
