<?php
/**
 * Shop System Plugins:
 * - Terms of Use can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/_TERMS_OF_USE
 * - License can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/LICENSE
 */

use Wirecard\Oxid\Controller\Admin\ModuleSupport;
use Wirecard\Oxid\Core\Helper;

class ModuleSupportTest extends \Wirecard\Test\WdUnitTestCase
{
    /**
     * @var ModuleSupport
     */
    private $_moduleSupport;

    protected function setUp()
    {
        $this->_moduleSupport = oxNew(ModuleSupport::class);
        parent::setUp();
    }

    protected function failOnLoggedExceptions()
    {
        // don't fail on logged exception -> mailer is not instantiated
        $this->exceptionLogHelper->clearExceptionLogFile();
    }

    public function testRender()
    {
        $this->_moduleSupport->render();

        $this->assertArraySubset([
            'oxid' => -1,
            'contactEmail' => null,
            'defaultEmail' => 'info@myoxideshop.com',
            'isOurModule' => false,
        ], $this->_moduleSupport->getViewData());
    }

    /**
     * @dataProvider sendSupportEmailActionWithoutParamsProvider
     */
    public function testSendSupportEmailActionWithoutParams($sContaninsKey)
    {
        $this->_moduleSupport->sendSupportEmailAction();
        $this->assertArrayHasKey($sContaninsKey, $this->_moduleSupport->getViewData());
    }

    public function sendSupportEmailActionWithoutParamsProvider()
    {
        return [
            "contains alertMessage" => ['alertMessage'],
            "contains alertType" => ['alertType'],
        ];
    }

    /**
     * @dataProvider sendSupportEmailActionWithParamsProvider
     */
    public function testSendSupportEmailActionWithParams($sText, $sFromEmail, $sReplyEmail, $sErrorText)
    {
        $this->_moduleSupport->setEditObjectId(Helper::MODULE_ID);
        $this->setRequestParameter('module_support_text', $sText);
        $this->setRequestParameter('module_support_email_from', $sFromEmail);
        $this->setRequestParameter('module_support_email_reply', $sReplyEmail);

        $this->_moduleSupport->sendSupportEmailAction();

        $this->assertEquals($sErrorText, $this->_moduleSupport->getViewData()['alertMessage']);
    }

    public function sendSupportEmailActionWithParamsProvider()
    {
        return [
            // this will end up in a flaky test depending on the email settings of the test server
            // 'correct params' => ['support text', 'from@email.com', 'reply@email.com', Helper::translate('wd_support_send_error')],
            //'correct params without reply email' => ['support text', 'from@email.com', null, Helper::translate('wd_support_send_error')],
            'incorrect "from" email' => ['support text', 'from', 'reply@email.com', Helper::translate('wd_enter_valid_email_error')],
            'incorrect "reply to" email' => ['support text', 'from@email.com', 'reply', Helper::translate('wd_enter_valid_email_error')],
            'no body failure' => [null, 'from@email.com', 'reply@email.com', Helper::translate('wd_message_empty_error')],
        ];
    }

    public function testAddDataFromForm()
    {
        $this->setRequestParameter('module_support_text', 'abcd');
        $this->setRequestParameter('module_support_email_reply', 'reply@test.com');
        $this->setRequestParameter('module_support_email_from', 'from@test.com');

        $this->_moduleSupport = $this->_getAnonymousModuleSupport();

        $aInput = [];

        $aExpected = [
            'body' => 'abcd',
            'replyTo' => 'reply@test.com',
            'from' => 'from@test.com',
        ];

        $this->_moduleSupport->publicAddDataFromForm($aInput);

        $this->assertEquals($aExpected, $aInput);
    }

    public function testAddShopData()
    {
        $this->_moduleSupport = $this->_getAnonymousModuleSupport();

        $aInput = [];

        $aExpectedKeys = [
            'modules',
            'module',
            'shopVersion',
            'shopEdition',
            'phpVersion',
            'system',
            'subject',
            'recipient',
            'payments',
        ];

        $this->_moduleSupport->publicAddShopData($aInput);

        $this->assertEquals($aExpectedKeys, array_keys($aInput));
    }

    private function _getAnonymousModuleSupport()
    {
        $cModuleSupport = new class() extends ModuleSupport
        {
            public function publicAddDataFromForm(&$aEmailData)
            {
                return parent::_addDataFromForm($aEmailData);
            }

            public function publicAddShopData(&$aEmailData)
            {
                return parent::_addShopData($aEmailData);
            }
        };

        return $cModuleSupport;
    }
}
