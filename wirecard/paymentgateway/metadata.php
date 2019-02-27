<?php

/**
 * Metadata version
 */
$metadataVersion = '1.0';

/**
 * Module information
 */
$aModule = array(
    'id'                => 'paymentgateway',
    'title'             => 'Wirecard Oxid EE Paymentgateway',
    'description'       => array(
        'de' => 'Modul für Zahlung mit Wirecard paymentSDK',
        'en' => 'Module for payment with Wirecard paymentSDK'
    ),
    'thumbnail'         => 'wirecard-logo.png',
    'version'           => '1.0.0',
    'author'            => 'Wirecard',
    'url'               => 'https://www.wirecard.com',
    'email'             => 'developer.center@wirecard.com',
    'files'             => array(
        // core
        'OxidEE_Events'         => 'paymentgateway/Core/OxidEE_Events.php'
    ),
    'events'            => array(
        'onActivate'        => 'OxidEE_Events::onActivate',
        'onDeactivate'      => 'OxidEE_Events::onDeactivate'
    )
);