<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(
  /** Global Envrionment Settings */
  '*' => array(
    /** General */
    'appId' => null,
    'cacheDuration' => 'P1D',
    'cacheMethod' => 'file',
    'craftEnv' => CRAFT_ENVIRONMENT,
    'customAsciiCharMappings' => array(),
    'defaultCookeDomain' => '',
    'defaultSearchTerms' => array(
      'attribute' => null,
      'exact' => false,
      'exclude' => false,
      'subLeft' =>false,
      'subRight' => false
    ),
    'devMode' => false,
    'defaultWeekStartDay' => 0,
    'isSystemOn' => null,
    'logDumpMethod' => 'var_export',
    'overridePhpSessionLocation' => false,
    'phpMaxMemoryLimit' => '512M',
    'phpSessionName' => 'CraftSessionId',
    'runTasksAutomatically' => true,
    'searchIgnoreWords' => array('the', 'and'),
    'sendPoweredByHeader' => false,
    'siteName' => null,
    'siteUrl' => getenv('CRAFTENV_SITE_URL'),
    'timezone' => 'America/Winnipeg',
    'translationDebugOutput' => false,
    'useCompressedJs' => true,
    'useWriteFileLock' => 'auto',
    'useXSendFile' => false,

    /** Security */
    'csrfTokenName' => 'CRAFT_CSRF_TOKEN',
    'defaultFilePermissions' => 0664,
    'defaultFolderPermissions' => 0775,
    'defaultTokenDuratin' => 'P1D',
    'enableCsrfProtection' => false,
    'preventUserEnumeration' => false,
    'tokenParam' => 'token',
    'useSslTokenizedUrls' => 'auto',
    'useSecureCookies' => 'auto',
    'validateUnsafeRequestParams' => false,
    'validationKey' => null,

    /** Updates */
    'allowAutoUpdates' => true,
    'backupDbOnUpdate' => true,
    'restoreDbOnUpdateFaillure' => true,
    'showBetaUpdates' => false,

    /** URLs */
    'actionTrigger' => 'actions',
    'addTrailingSlashesToUrls' => false,
    'allowUppercaseInSlug' => false,
    'baseCpUrl' => null,
    'cpTrigger' => getenv('CRAFTENV_CP_TRIGGER'),
    'limitAutoSlugsToAscii' => false,
    'maaxSlugIncrement' => 100,
    'omitScriptNameInUrls' => 'auto',
    'pageTrigger' => 'p',
    'resourceTrigger' => 'cpresources',
    'siteUrl' => getenv('CRAFTENV_SITE_URL'),
    'slugWordSeparator' => '-',
    'usePathInfo' => 'auto',

    /** Templating */
    'cacheElementQueries' => true,
    'defaultTemplateExtensions' => array('html', 'twig'),
    'enableTemplateCaching' => true,
    'errorTemplatePrefix' => '',
    'indexTemplateFilenames' => array('index'),
    'privateTemplateTrigger' => '_',
    'suppressTemplateErrors' => false,

    /** Users */
    'activateAccountFailurePath' => null,
    'activateAccountSuccessPath' => null,
    'autoLoginAfterAccountActivation' => false,
    'blowfishHashCost' => 13,
    'cooldownDuration' => 'PT5M',
    'defaultCpLanguage' => null,
    'deferPublicRegistrationPassword' => false,
    'elevatedSessionDuration' => 'PT5M',
    'invalidLoginWindowDuration' => 'PT1H',
    'invalidUserTokenPath' => '',
    'loginPath' => 'login',
    'logoutPath' => 'logout',
    'maxInvalidLogins' => 5,
    'postCpLoginRedirect' => 'dashboard',
    'postLoginRedirect' => '',
    'purgePendingUsersDuration' => false,
    'rememberUsernameDuration' => 'P1Y',
    'rememberedUserSessionDuration' => 'P2W',
    'requireMatchingUserAgentForSession' => true,
    'requireUserAgentAndIpForSession' => true,
    'setPasswordPath' => 'setpassword',
    'setPasswordSuccessPath' => '',
    'testToEmailAddress' => null,
    'useEmailAsUsername' => false,
    'userSessionDuration' => 'PT1H',
    'verificationCodeDuration' => 'P1D',

    /** Assets */
    'allowedFileExtensions' => '7z, aiff, asf, avi, bmp, csv, doc, docx, fla, flv, gif, gz, gzip, htm, html, jpeg, jpg, js, mid, mov, mp3, mp4, m4a, m4v, mpc, mpeg, mpg, ods, odt, ogg, ogv, pdf, png, potx, pps, ppsm, ppsx, ppt, pptm, pptx, ppz, pxd, qt, ram, rar, rm, rmi, rmvb, rtf, sdc, sitd, svg, swf, sxc, sxw, tar, tgz, tif, tiff, txt, vob, vsd, wav, webm, wma, wmv, xls, xlsx, zip',
    'convertFilenamesToAscii' => false,
    'defaultImageQuality' => 75,
    'extraAllowedFileExtensions' => '',
    'filenameWordSeparator' => '-',
    'generateTransformsBeforePageLoad' => false,
    'imageDriver' => null,
    'maxCachedCloudImageSize' => 2000,
    'maxUploadFileSize' => 16777216,
    'preserveImageColorProfiles' => true,
    'rotateImagesOnUploadByExifData' => true,

    /** Tags */
    'allowSimilarTags' => false,
  ),

  /** Development Mode Settings */
  'local' => array(
    'devMode' => true,
    /** Cache */
    'cacheDuration' => 'PT1S',
    'cacheElementQueries' => false,
    'enableTemplateCaching' => false,
    'maxCachedCloudImageSize' => 0,
    'useCompressedJs' => false,
    /** Debug */
    'translationDebugOutput' => false,
    'suppressTemplateErrors' => false,
    /** Memory */
    'phpMaxMemoryLimit' => '768M',
    /** Timers */
    'invalidLoginWindowDuration' => 'PT1S',
    /** Updates */
    'showBetaUpdates' => true,

    /** Envrionment Variables */
    'environmentVariables' => array(
      'basePath' => getenv('CRAFTENV_BASE_URL'),
      'baseUrl' => getenv('CRAFTENV_BASE_PATH'),
    ),
  ),

  /** Staging Mode Settings */
  'staging' => array(
    'devMode' => true,
    /** Cache */
    'cacheDuration' => 'PT1S',
    'cacheElementQueries' => false,
    'enableTemplateCaching' => false,
    'maxCachedCloudImageSize' => 0,
    'useCompressedJs' => false,
    /** Debug */
    'translationDebugOutput' => true,
    'suppressTemplateErrors' => false,
    /** Memory */
    'phpMaxMemoryLimit' => '768M',
    /** Timers */
    'invalidLoginWindowDuration' => 'PT1S',
    /** Updates */
    'showBetaUpdates' => true,

    /** Envrionment Variables */
    'environmentVariables' => array(
      'basePath' => getenv('CRAFTENV_BASE_URL'),
      'baseUrl' => getenv('CRAFTENV_BASE_PATH'),
    ),
  ),

  /** Production Mode Settings */
  'production' => array(
    'devMode' => false,

    /** Envrionment Variables */
    'environmentVariables' => array(
      'basePath' => getenv('CRAFTENV_BASE_URL'),
      'baseUrl' => getenv('CRAFTENV_BASE_PATH'),
    ),
  ),
);
