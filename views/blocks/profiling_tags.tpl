[{*
* Shop System Plugins:
* - Terms of Use can be found under:
* https://github.com/wirecard/oxid-ee/blob/master/_TERMS_OF_USE
* - License can be found under:
* https://github.com/wirecard/oxid-ee/blob/master/LICENSE
*
*}]

[{assign var="oPayment" value=$oView->getPayment()}]

[{if $oPayment->isCustomPaymentMethod()}]

  [{assign var="sDeviceId" value=$oViewConf->getModuleDeviceId($oPayment->oxpayments__wdoxidee_maid)}]

  <script type="text/javascript"
          src="https://h.wirecard.com/fp/tags.js?org_id=6xxznhva&session_id=[{$sDeviceId}]">
  </script>
  <noscript>
    <iframe style="width: 100px; height: 100px; border: 0; position: absolute; top: -5000px;"
            src="https://h.wirecard.com/tags?org_id=6xxznhva&session_id=[{$sDeviceId}]"></iframe>
  </noscript>
[{/if}]

[{$smarty.block.parent}]
