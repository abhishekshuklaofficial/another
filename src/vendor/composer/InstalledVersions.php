<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;








class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.0.0+no-version-set',
    'version' => '1.0.0.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => '__root__',
  ),
  'versions' => 
  array (
    '__root__' => 
    array (
      'pretty_version' => '1.0.0+no-version-set',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'composer/ca-bundle' => 
    array (
      'pretty_version' => '1.3.1',
      'version' => '1.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4c679186f2aca4ab6a0f1b0b9cf9252decb44d0b',
    ),
    'composer/composer' => 
    array (
      'pretty_version' => '2.3.5',
      'version' => '2.3.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '50c47b1f907cfcdb8f072b88164d22b527557ae1',
    ),
    'composer/metadata-minifier' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c549d23829536f0d0e984aaabbf02af91f443207',
    ),
    'composer/package-versions-deprecated' => 
    array (
      'pretty_version' => '1.11.99.5',
      'version' => '1.11.99.5',
      'aliases' => 
      array (
      ),
      'reference' => 'b4f54f74ef3453349c24a845d22392cd31e65f1d',
    ),
    'composer/pcre' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e300eb6c535192decd27a85bc72a9290f0d6b3bd',
    ),
    'composer/semver' => 
    array (
      'pretty_version' => '3.3.2',
      'version' => '3.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '3953f23262f2bff1919fc82183ad9acb13ff62c9',
    ),
    'composer/spdx-licenses' => 
    array (
      'pretty_version' => '1.5.6',
      'version' => '1.5.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a30d487169d799745ca7280bc90fdfa693536901',
    ),
    'composer/xdebug-handler' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ced299686f41dce890debac69273b47ffe98a40c',
    ),
    'dealerdirect/phpcodesniffer-composer-installer' => 
    array (
      'pretty_version' => 'v0.7.2',
      'version' => '0.7.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '1c968e542d8843d7cd71de3c5c9c3ff3ad71a1db',
    ),
    'doctrine/annotations' => 
    array (
      'pretty_version' => '1.13.2',
      'version' => '1.13.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '5b668aef16090008790395c02c893b1ba13f7e08',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c268e882d4dbdd85e36e4ad69e02dc284f89d229',
    ),
    'firebase/php-jwt' => 
    array (
      'pretty_version' => 'v6.1.1',
      'version' => '6.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e67638d067a537731e3f9c03e097c7c1b1f31fe8',
    ),
    'friendsofphp/php-cs-fixer' => 
    array (
      'pretty_version' => 'v3.8.0',
      'version' => '3.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cbad1115aac4b5c3c5540e7210d3c9fba2f81fa3',
    ),
    'grogy/php-parallel-lint' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'guzzlehttp/guzzle' => 
    array (
      'pretty_version' => '7.4.2',
      'version' => '7.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac1ec1cd9b5624694c3a40be801d94137afb12b4',
    ),
    'guzzlehttp/promises' => 
    array (
      'pretty_version' => '1.5.1',
      'version' => '1.5.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fe752aedc9fd8fcca3fe7ad05d419d32998a06da',
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '2.2.1',
      'version' => '2.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c94a94f120803a18554c1805ef2e539f8285f9a2',
    ),
    'jakub-onderka/php-parallel-lint' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'jean85/pretty-package-versions' => 
    array (
      'pretty_version' => '1.6.0',
      'version' => '1.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1e0104b46f045868f11942aea058cd7186d6c303',
    ),
    'justinrainbow/json-schema' => 
    array (
      'pretty_version' => '5.2.12',
      'version' => '5.2.12.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ad87d5a5ca981228e0e205c2bc7dfb8e24559b60',
    ),
    'league/container' => 
    array (
      'pretty_version' => '4.2.0',
      'version' => '4.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '375d13cb828649599ef5d48a339c4af7a26cd0ab',
    ),
    'mongodb/mongodb' => 
    array (
      'pretty_version' => '1.12.0',
      'version' => '1.12.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e4a7594ac4b31635fa77455c4038a7013024ba28',
    ),
    'nunomaduro/phpinsights' => 
    array (
      'pretty_version' => 'v2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '854c214968b27c65590d8ea68797434bcf83e6c1',
    ),
    'ocramius/package-versions' => 
    array (
      'replaced' => 
      array (
        0 => '1.11.99',
      ),
    ),
    'orno/di' => 
    array (
      'replaced' => 
      array (
        0 => '~2.0',
      ),
    ),
    'paragonie/random_compat' => 
    array (
      'pretty_version' => 'v9.99.100',
      'version' => '9.99.100.0',
      'aliases' => 
      array (
      ),
      'reference' => '996434e5492cb4c3edcb9168db6fbb1359ef965a',
    ),
    'paragonie/sodium_compat' => 
    array (
      'pretty_version' => 'v1.17.1',
      'version' => '1.17.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac994053faac18d386328c91c7900f930acadf1e',
    ),
    'php-cs-fixer/diff' => 
    array (
      'pretty_version' => 'v2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '29dc0d507e838c4580d018bd8b5cb412474f7ec3',
    ),
    'php-http/async-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '*',
      ),
    ),
    'php-http/client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '*',
      ),
    ),
    'php-parallel-lint/php-parallel-lint' => 
    array (
      'pretty_version' => 'v1.3.2',
      'version' => '1.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '6483c9832e71973ed29cf71bd6b3f4fde438a9de',
    ),
    'phploc/phploc' => 
    array (
      'pretty_version' => '7.0.2',
      'version' => '7.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'af0d5fc84f3f7725513ba59cdcbe670ac2a4532a',
    ),
    'phpstan/phpdoc-parser' => 
    array (
      'pretty_version' => '1.4.5',
      'version' => '1.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '129a63b3bc7caeb593c224c41f420675e63cfefc',
    ),
    'phpstan/phpstan' => 
    array (
      'pretty_version' => '1.6.3',
      'version' => '1.6.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '6128620b98292e0b69ea6d799871d77163681c8e',
    ),
    'phpunit/php-file-iterator' => 
    array (
      'pretty_version' => '3.0.6',
      'version' => '3.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
    ),
    'psr/cache' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
    ),
    'psr/cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.0|3.0',
      ),
    ),
    'psr/container' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
    ),
    'psr/container-implementation' => 
    array (
      'provided' => 
      array (
        0 => '^1.0',
      ),
    ),
    'psr/event-dispatcher' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-client' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
    ),
    'psr/http-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-factory' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
    ),
    'psr/http-factory-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fe5ea303b0887d5caefd3d431c3e61ad47037001',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0|3.0',
      ),
    ),
    'psr/simple-cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
    ),
    'psr/simple-cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0|3.0',
      ),
    ),
    'ralouphie/getallheaders' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '120b605dfeb996808c31b6477290a714d356e822',
    ),
    'react/promise' => 
    array (
      'pretty_version' => 'v2.9.0',
      'version' => '2.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '234f8fd1023c9158e2314fa9d7d0e6a83db42910',
    ),
    'sebastian/cli-parser' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '442e7c7e687e42adc03470c7b668bc4b2402c0b2',
    ),
    'sebastian/version' => 
    array (
      'pretty_version' => '3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6c1022351a901512170118436c764e473f6de8c',
    ),
    'seld/jsonlint' => 
    array (
      'pretty_version' => '1.9.0',
      'version' => '1.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '4211420d25eba80712bff236a98960ef68b866b7',
    ),
    'seld/phar-utils' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9f3452c93ff423469c0d56450431562ca423dcee',
    ),
    'slevomat/coding-standard' => 
    array (
      'pretty_version' => '7.1',
      'version' => '7.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b521bd358b5f7a7d69e9637fd139e036d8adeb6f',
    ),
    'squizlabs/php_codesniffer' => 
    array (
      'pretty_version' => '3.6.2',
      'version' => '3.6.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '5e4e71592f69da17871dba6e80dd51bce74a351a',
    ),
    'symfony/cache' => 
    array (
      'pretty_version' => 'v6.0.8',
      'version' => '6.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e9a4e9229f078d93f2c492ea30c3f010373312b7',
    ),
    'symfony/cache-contracts' => 
    array (
      'pretty_version' => 'v3.0.1',
      'version' => '3.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '1c0a181c9ee221afe4fa55b2d13fc63c5ae14348',
    ),
    'symfony/cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.1|2.0|3.0',
      ),
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v6.0.8',
      'version' => '6.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '0d00aa289215353aa8746a31d101f8e60826285c',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v3.0.1',
      'version' => '3.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '26954b3d62a6c5fd0ea8a2a00c0353a14978d05c',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v6.0.3',
      'version' => '6.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '6472ea2dd415e925b90ca82be64b8bc6157f3934',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v3.0.1',
      'version' => '3.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '7bc61cc2db649b4637d331240c5346dcc7708051',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.0|3.0',
      ),
    ),
    'symfony/filesystem' => 
    array (
      'pretty_version' => 'v6.0.7',
      'version' => '6.0.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '6c9e4c41f2c51dfde3db298594ed9cba55dbf5ff',
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v6.0.8',
      'version' => '6.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'af7edab28d17caecd1f40a9219fc646ae751c21f',
    ),
    'symfony/http-client' => 
    array (
      'pretty_version' => 'v6.0.8',
      'version' => '6.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd347895193283e08b4c3ebf2f2974a1df3e1f670',
    ),
    'symfony/http-client-contracts' => 
    array (
      'pretty_version' => 'v3.0.1',
      'version' => '3.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f7525778c712be78ad5b6ca31f47fdcfd404c280',
    ),
    'symfony/http-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '3.0',
      ),
    ),
    'symfony/options-resolver' => 
    array (
      'pretty_version' => 'v6.0.3',
      'version' => '6.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '51f7006670febe4cbcbae177cbffe93ff833250d',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.25.0',
      'version' => '1.25.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '30885182c981ab175d4d034db0f6f469898070ab',
    ),
    'symfony/polyfill-intl-grapheme' => 
    array (
      'pretty_version' => 'v1.25.0',
      'version' => '1.25.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '81b86b50cf841a64252b439e738e97f4a34e2783',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.25.0',
      'version' => '1.25.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8590a5f561694770bdcd3f9b5c69dde6945028e8',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.25.0',
      'version' => '1.25.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0abb51d2f102e00a4eefcf46ba7fec406d245825',
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.25.0',
      'version' => '1.25.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cc5db0e22b3cb4111010e48785a97f670b350ca5',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.25.0',
      'version' => '1.25.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '4407588e0d3f1f52efb65fbe92babe41f37fe50c',
    ),
    'symfony/polyfill-php81' => 
    array (
      'pretty_version' => 'v1.25.0',
      'version' => '1.25.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5de4ba2d41b15f9bd0e19b2ab9674135813ec98f',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v6.0.8',
      'version' => '6.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd074154ea8b1443a96391f6e39f9e547b2dd01b9',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v3.0.1',
      'version' => '3.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e517458f278c2131ca9f262f8fbaf01410f2c65c',
    ),
    'symfony/stopwatch' => 
    array (
      'pretty_version' => 'v6.0.5',
      'version' => '6.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f2c1780607ec6502f2121d9729fd8150a655d337',
    ),
    'symfony/string' => 
    array (
      'pretty_version' => 'v6.0.8',
      'version' => '6.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac0aa5c2282e0de624c175b68d13f2c8f2e2649d',
    ),
    'symfony/var-exporter' => 
    array (
      'pretty_version' => 'v6.0.8',
      'version' => '6.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '74b272979a490747c6775b0228d06cf246306a99',
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}

if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}








public static function getRawData()
{
@trigger_error('getRawData only returns the first dataset loaded, which may not be what you expect. Use getAllRawData() instead which returns all datasets for all autoloaders present in the process.', E_USER_DEPRECATED);

return self::$installed;
}







public static function getAllRawData()
{
return self::getInstalled();
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}





private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
