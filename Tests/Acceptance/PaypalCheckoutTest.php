<?php
/**
 * Shop System Plugins:
 * - Terms of Use can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/_TERMS_OF_USE
 * - License can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/LICENSE
 */

namespace Wirecard\Oxid\Tests\Acceptance;

use Wirecard\Oxid\Model\PaymentMethod\PaypalPaymentMethod;

/**
 * Acceptance tests for the PayPal checkout flow.
 */
class PaypalCheckoutTest extends CheckoutTestCase
{
    /**
     * Catch possible A/B tests
     *
     * @inheritdoc
     */
    protected $retryTimes = 1;

    public function getPaymentMethodName()
    {
        return PaypalPaymentMethod::getName();
    }

    public function testCheckoutForPurchase()
    {
        $this->setPaymentActionPurchase();
        $this->goThroughCheckout();
        $this->goThroughExternalFlow();
        $this->waitForRedirectConfirmation();

        $this->assertPaymentSuccessful();
    }

    public function testCheckoutForAuthorize()
    {
        $this->setPaymentActionAuthorize();
        $this->goThroughCheckout();
        $this->goThroughExternalFlow();
        $this->waitForRedirectConfirmation();

        $this->assertPaymentSuccessful();
    }

    private function goThroughExternalFlow()
    {
        $this->waitForElement($this->getLocator('external.paypal.email'), self::WAIT_TIME_EXTERNAL);
        $this->type(
            $this->getLocator('external.paypal.email'),
            $this->getConfig('payments.paypal.email')
        );

        if ($this->isVisible($this->getLocator('external.paypal.password')))
        {
            $this->type(
                $this->getLocator('external.paypal.password'),
                getenv('PAYPAL_PASSWORD')
            );
        }
        else {
            $this->click($this->getLocator('external.paypal.login'));
        }
        $this->waitForItemAppear($this->getLocator('external.paypal.password'), self::WAIT_TIME_EXTERNAL);
        $this->type(
            $this->getLocator('external.paypal.password'),
            getenv('PAYPAL_PASSWORD')
        );
        $this->click($this->getLocator('external.paypal.login'));

        try {
            $this->waitForElement($this->getLocator('external.paypal.acceptCookies'), self::WAIT_TIME_EXTERNAL);
            $this->clickAndWait($this->getLocator('external.paypal.acceptCookies'), 3);
        } catch (\Exception $e) {
        }

        $this->waitForElement($this->getLocator('external.paypal.payNow'), self::WAIT_TIME_EXTERNAL);
        $this->clickAndWait($this->getLocator('external.paypal.payNow'), 3);
    }
}
