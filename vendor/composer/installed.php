<?php return array(
    'root' => array(
        'name' => 'rollbar/rollbar-php-wordpress',
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'reference' => 'faf289258fbb6d2b9a35c359fd9730b95b68506f',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => false,
    ),
    'versions' => array(
        'michelf/php-markdown' => array(
            'pretty_version' => '2.0.0',
            'version' => '2.0.0.0',
            'reference' => 'eb176f173fbac58a045aff78e55f833264b34e71',
            'type' => 'library',
            'install_path' => __DIR__ . '/../michelf/php-markdown',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'monolog/monolog' => array(
            'pretty_version' => '1.27.1',
            'version' => '1.27.1.0',
            'reference' => '904713c5929655dc9b97288b69cfeedad610c9a1',
            'type' => 'library',
            'install_path' => __DIR__ . '/../monolog/monolog',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/log' => array(
            'pretty_version' => '1.1.4',
            'version' => '1.1.4.0',
            'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/log',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/log-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '1.0.0',
            ),
        ),
        'rollbar/rollbar' => array(
            'pretty_version' => 'v1.8.1',
            'version' => '1.8.1.0',
            'reference' => '8a57ad9574d85bd818eaedfc8049fdcb16795f31',
            'type' => 'library',
            'install_path' => __DIR__ . '/../rollbar/rollbar',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'rollbar/rollbar-php-wordpress' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'faf289258fbb6d2b9a35c359fd9730b95b68506f',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);