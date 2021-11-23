<?php

declare(strict_types=1);

use Rector\Transform\Rector\Assign\PropertyFetchToMethodCallRector;
use Rector\Transform\ValueObject\PropertyFetchToMethodCall;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\SymfonyPhpConfig\ValueObjectInliner;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(PropertyFetchToMethodCallRector::class)
        ->call('configure', [[
            PropertyFetchToMethodCallRector::PROPERTIES_TO_METHOD_CALLS => ValueObjectInliner::inline([
                new PropertyFetchToMethodCall('Faker\Generator', 'citySuffix', 'citySuffix'),
                new PropertyFetchToMethodCall('Faker\Generator', 'streetSuffix', 'streetSuffix'),
                new PropertyFetchToMethodCall('Faker\Generator', 'buildingNumber', 'buildingNumber'),
                new PropertyFetchToMethodCall('Faker\Generator', 'city', 'city'),
                new PropertyFetchToMethodCall('Faker\Generator', 'streetName', 'streetName'),
                new PropertyFetchToMethodCall('Faker\Generator', 'streetAddress', 'streetAddress'),
                new PropertyFetchToMethodCall('Faker\Generator', 'postcode', 'postcode'),
                new PropertyFetchToMethodCall('Faker\Generator', 'address', 'address'),
                new PropertyFetchToMethodCall('Faker\Generator', 'country', 'country'),
                new PropertyFetchToMethodCall('Faker\Generator', 'latitude', 'latitude'),
                new PropertyFetchToMethodCall('Faker\Generator', 'longitude', 'longitude'),
                new PropertyFetchToMethodCall('Faker\Generator', 'localCoordinates', 'localCoordinates'),
                new PropertyFetchToMethodCall('Faker\Generator', 'randomDigitNotNull', 'randomDigitNotNull'),
                new PropertyFetchToMethodCall('Faker\Generator', 'passthrough', 'passthrough'),
                new PropertyFetchToMethodCall('Faker\Generator', 'randomLetter', 'randomLetter'),
                new PropertyFetchToMethodCall('Faker\Generator', 'randomAscii', 'randomAscii'),
                new PropertyFetchToMethodCall('Faker\Generator', 'randomElements', 'randomElements'),
                new PropertyFetchToMethodCall('Faker\Generator', 'randomElement', 'randomElement'),
                new PropertyFetchToMethodCall('Faker\Generator', 'randomKey', 'randomKey'),
                new PropertyFetchToMethodCall('Faker\Generator', 'shuffle', 'shuffle'),
                new PropertyFetchToMethodCall('Faker\Generator', 'shuffleArray', 'shuffleArray'),
                new PropertyFetchToMethodCall('Faker\Generator', 'shuffleString', 'shuffleString'),
                new PropertyFetchToMethodCall('Faker\Generator', 'numerify', 'numerify'),
                new PropertyFetchToMethodCall('Faker\Generator', 'lexify', 'lexify'),
                new PropertyFetchToMethodCall('Faker\Generator', 'bothify', 'bothify'),
                new PropertyFetchToMethodCall('Faker\Generator', 'asciify', 'asciify'),
                new PropertyFetchToMethodCall('Faker\Generator', 'regexify', 'regexify'),
                new PropertyFetchToMethodCall('Faker\Generator', 'toLower', 'toLower'),
                new PropertyFetchToMethodCall('Faker\Generator', 'toUpper', 'toUpper'),
                new PropertyFetchToMethodCall('Faker\Generator', 'optional', 'optional'),
                new PropertyFetchToMethodCall('Faker\Generator', 'unique', 'unique'),
                new PropertyFetchToMethodCall('Faker\Generator', 'valid', 'valid'),
                new PropertyFetchToMethodCall('Faker\Generator', 'biasedNumberBetween', 'biasedNumberBetween'),
                new PropertyFetchToMethodCall('Faker\Generator', 'hexColor', 'hexColor'),
                new PropertyFetchToMethodCall('Faker\Generator', 'safeHexColor', 'safeHexColor'),
                new PropertyFetchToMethodCall('Faker\Generator', 'rgbColorAsArray', 'rgbColorAsArray'),
                new PropertyFetchToMethodCall('Faker\Generator', 'rgbColor', 'rgbColor'),
                new PropertyFetchToMethodCall('Faker\Generator', 'rgbCssColor', 'rgbCssColor'),
                new PropertyFetchToMethodCall('Faker\Generator', 'rgbaCssColor', 'rgbaCssColor'),
                new PropertyFetchToMethodCall('Faker\Generator', 'safeColorName', 'safeColorName'),
                new PropertyFetchToMethodCall('Faker\Generator', 'colorName', 'colorName'),
                new PropertyFetchToMethodCall('Faker\Generator', 'hslColor', 'hslColor'),
                new PropertyFetchToMethodCall('Faker\Generator', 'hslColorAsArray', 'hslColorAsArray'),
                new PropertyFetchToMethodCall('Faker\Generator', 'company', 'company'),
                new PropertyFetchToMethodCall('Faker\Generator', 'companySuffix', 'companySuffix'),
                new PropertyFetchToMethodCall('Faker\Generator', 'jobTitle', 'jobTitle'),
                new PropertyFetchToMethodCall('Faker\Generator', 'unixTime', 'unixTime'),
                new PropertyFetchToMethodCall('Faker\Generator', 'dateTime', 'dateTime'),
                new PropertyFetchToMethodCall('Faker\Generator', 'dateTimeAD', 'dateTimeAD'),
                new PropertyFetchToMethodCall('Faker\Generator', 'iso8601', 'iso8601'),
                new PropertyFetchToMethodCall('Faker\Generator', 'date', 'date'),
                new PropertyFetchToMethodCall('Faker\Generator', 'time', 'time'),
                new PropertyFetchToMethodCall('Faker\Generator', 'dateTimeBetween', 'dateTimeBetween'),
                new PropertyFetchToMethodCall('Faker\Generator', 'dateTimeInInterval', 'dateTimeInInterval'),
                new PropertyFetchToMethodCall('Faker\Generator', 'dateTimeThisCentury', 'dateTimeThisCentury'),
                new PropertyFetchToMethodCall('Faker\Generator', 'dateTimeThisDecade', 'dateTimeThisDecade'),
                new PropertyFetchToMethodCall('Faker\Generator', 'dateTimeThisYear', 'dateTimeThisYear'),
                new PropertyFetchToMethodCall('Faker\Generator', 'dateTimeThisMonth', 'dateTimeThisMonth'),
                new PropertyFetchToMethodCall('Faker\Generator', 'amPm', 'amPm'),
                new PropertyFetchToMethodCall('Faker\Generator', 'dayOfMonth', 'dayOfMonth'),
                new PropertyFetchToMethodCall('Faker\Generator', 'dayOfWeek', 'dayOfWeek'),
                new PropertyFetchToMethodCall('Faker\Generator', 'month', 'month'),
                new PropertyFetchToMethodCall('Faker\Generator', 'monthName', 'monthName'),
                new PropertyFetchToMethodCall('Faker\Generator', 'year', 'year'),
                new PropertyFetchToMethodCall('Faker\Generator', 'century', 'century'),
                new PropertyFetchToMethodCall('Faker\Generator', 'timezone', 'timezone'),
                new PropertyFetchToMethodCall('Faker\Generator', 'setDefaultTimezone', 'setDefaultTimezone'),
                new PropertyFetchToMethodCall('Faker\Generator', 'getDefaultTimezone', 'getDefaultTimezone'),
                new PropertyFetchToMethodCall('Faker\Generator', 'file', 'file'),
                new PropertyFetchToMethodCall('Faker\Generator', 'randomHtml', 'randomHtml'),
                new PropertyFetchToMethodCall('Faker\Generator', 'imageUrl', 'imageUrl'),
                new PropertyFetchToMethodCall('Faker\Generator', 'image', 'image'),
                new PropertyFetchToMethodCall('Faker\Generator', 'email', 'email'),
                new PropertyFetchToMethodCall('Faker\Generator', 'safeEmail', 'safeEmail'),
                new PropertyFetchToMethodCall('Faker\Generator', 'freeEmail', 'freeEmail'),
                new PropertyFetchToMethodCall('Faker\Generator', 'companyEmail', 'companyEmail'),
                new PropertyFetchToMethodCall('Faker\Generator', 'freeEmailDomain', 'freeEmailDomain'),
                new PropertyFetchToMethodCall('Faker\Generator', 'safeEmailDomain', 'safeEmailDomain'),
                new PropertyFetchToMethodCall('Faker\Generator', 'userName', 'userName'),
                new PropertyFetchToMethodCall('Faker\Generator', 'password', 'password'),
                new PropertyFetchToMethodCall('Faker\Generator', 'domainName', 'domainName'),
                new PropertyFetchToMethodCall('Faker\Generator', 'domainWord', 'domainWord'),
                new PropertyFetchToMethodCall('Faker\Generator', 'tld', 'tld'),
                new PropertyFetchToMethodCall('Faker\Generator', 'url', 'url'),
                new PropertyFetchToMethodCall('Faker\Generator', 'slug', 'slug'),
                new PropertyFetchToMethodCall('Faker\Generator', 'ipv4', 'ipv4'),
                new PropertyFetchToMethodCall('Faker\Generator', 'ipv6', 'ipv6'),
                new PropertyFetchToMethodCall('Faker\Generator', 'localIpv4', 'localIpv4'),
                new PropertyFetchToMethodCall('Faker\Generator', 'macAddress', 'macAddress'),
                new PropertyFetchToMethodCall('Faker\Generator', 'word', 'word'),
                new PropertyFetchToMethodCall('Faker\Generator', 'words', 'words'),
                new PropertyFetchToMethodCall('Faker\Generator', 'sentence', 'sentence'),
                new PropertyFetchToMethodCall('Faker\Generator', 'sentences', 'sentences'),
                new PropertyFetchToMethodCall('Faker\Generator', 'paragraph', 'paragraph'),
                new PropertyFetchToMethodCall('Faker\Generator', 'paragraphs', 'paragraphs'),
                new PropertyFetchToMethodCall('Faker\Generator', 'text', 'text'),
                new PropertyFetchToMethodCall('Faker\Generator', 'boolean', 'boolean'),
                new PropertyFetchToMethodCall('Faker\Generator', 'md5', 'md5'),
                new PropertyFetchToMethodCall('Faker\Generator', 'sha1', 'sha1'),
                new PropertyFetchToMethodCall('Faker\Generator', 'sha256', 'sha256'),
                new PropertyFetchToMethodCall('Faker\Generator', 'locale', 'locale'),
                new PropertyFetchToMethodCall('Faker\Generator', 'countryCode', 'countryCode'),
                new PropertyFetchToMethodCall('Faker\Generator', 'countryISOAlpha3', 'countryISOAlpha3'),
                new PropertyFetchToMethodCall('Faker\Generator', 'languageCode', 'languageCode'),
                new PropertyFetchToMethodCall('Faker\Generator', 'currencyCode', 'currencyCode'),
                new PropertyFetchToMethodCall('Faker\Generator', 'emoji', 'emoji'),
                new PropertyFetchToMethodCall('Faker\Generator', 'creditCardType', 'creditCardType'),
                new PropertyFetchToMethodCall('Faker\Generator', 'creditCardNumber', 'creditCardNumber'),
                new PropertyFetchToMethodCall(
                    'Faker\Generator',
                    'creditCardExpirationDate',
                    'creditCardExpirationDate'
                ),
                new PropertyFetchToMethodCall(
                    'Faker\Generator',
                    'creditCardExpirationDateString',
                    'creditCardExpirationDateString'
                ),
                new PropertyFetchToMethodCall('Faker\Generator', 'creditCardDetails', 'creditCardDetails'),
                new PropertyFetchToMethodCall('Faker\Generator', 'iban', 'iban'),
                new PropertyFetchToMethodCall('Faker\Generator', 'swiftBicNumber', 'swiftBicNumber'),
                new PropertyFetchToMethodCall('Faker\Generator', 'name', 'name'),
                new PropertyFetchToMethodCall('Faker\Generator', 'firstName', 'firstName'),
                new PropertyFetchToMethodCall('Faker\Generator', 'firstNameMale', 'firstNameMale'),
                new PropertyFetchToMethodCall('Faker\Generator', 'firstNameFemale', 'firstNameFemale'),
                new PropertyFetchToMethodCall('Faker\Generator', 'lastName', 'lastName'),
                new PropertyFetchToMethodCall('Faker\Generator', 'title', 'title'),
                new PropertyFetchToMethodCall('Faker\Generator', 'titleMale', 'titleMale'),
                new PropertyFetchToMethodCall('Faker\Generator', 'titleFemale', 'titleFemale'),
                new PropertyFetchToMethodCall('Faker\Generator', 'phoneNumber', 'phoneNumber'),
                new PropertyFetchToMethodCall('Faker\Generator', 'e164PhoneNumber', 'e164PhoneNumber'),
                new PropertyFetchToMethodCall('Faker\Generator', 'imei', 'imei'),
                new PropertyFetchToMethodCall('Faker\Generator', 'realText', 'realText'),
                new PropertyFetchToMethodCall('Faker\Generator', 'realTextBetween', 'realTextBetween'),
                new PropertyFetchToMethodCall('Faker\Generator', 'macProcessor', 'macProcessor'),
                new PropertyFetchToMethodCall('Faker\Generator', 'linuxProcessor', 'linuxProcessor'),
                new PropertyFetchToMethodCall('Faker\Generator', 'userAgent', 'userAgent'),
                new PropertyFetchToMethodCall('Faker\Generator', 'chrome', 'chrome'),
                new PropertyFetchToMethodCall('Faker\Generator', 'firefox', 'firefox'),
                new PropertyFetchToMethodCall('Faker\Generator', 'safari', 'safari'),
                new PropertyFetchToMethodCall('Faker\Generator', 'opera', 'opera'),
                new PropertyFetchToMethodCall('Faker\Generator', 'internetExplorer', 'internetExplorer'),
                new PropertyFetchToMethodCall('Faker\Generator', 'windowsPlatformToken', 'windowsPlatformToken'),
                new PropertyFetchToMethodCall('Faker\Generator', 'macPlatformToken', 'macPlatformToken'),
                new PropertyFetchToMethodCall('Faker\Generator', 'linuxPlatformToken', 'linuxPlatformToken'),
                new PropertyFetchToMethodCall('Faker\Generator', 'uuid', 'uuid'),
            ]),
        ],
        ]);
};
