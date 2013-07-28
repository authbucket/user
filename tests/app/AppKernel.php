<?php

/**
 * This file is part of the pantarei/user package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\Common\Cache\ApcCache;
use Doctrine\Common\DataFixtures\Executor\ORMExecutor;
use Doctrine\Common\DataFixtures\Loader;
use Doctrine\Common\DataFixtures\Purger\ORMPurger;
use Doctrine\Common\Persistence\PersistentObject;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\ORM\Tools\SchemaTool;
use Doctrine\ORM\Tools\Setup;
use Pantarei\User\Provider\UserServiceProvider;
use Pantarei\User\Tests\Entity\ModelManagerFactory;
use Silex\Application;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\FormServiceProvider;
use Silex\Provider\SecurityServiceProvider;
use Silex\Provider\SessionServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;
use Silex\WebTestCase as SilexWebTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\PlaintextPasswordEncoder;

$app = new Application();

$app->register(new DoctrineServiceProvider());
$app->register(new FormServiceProvider());
$app->register(new SecurityServiceProvider());
$app->register(new SessionServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new UrlGeneratorServiceProvider());
$app->register(new UserServiceProvider());

// Return an instance of Doctrine ORM entity manager.
$app['pantarei_user.orm'] = $app->share(function ($app) {
    $conn = $app['dbs']['default'];
    $event_manager = $app['dbs.event_manager']['default'];

    $driver = new AnnotationDriver(new AnnotationReader(), array(__DIR__ . '/../src/Pantarei/User/Tests/Entity'));

    $config = Setup::createConfiguration(false);
    $config->setMetadataDriverImpl($driver);
    $config->setMetadataCacheImpl(new ApcCache());
    $config->setQueryCacheImpl(new ApcCache());

    return EntityManager::create($conn, $config, $event_manager);
});

// Fake lib dev, simply use plain text encoder.
$app['security.encoder.digest'] = $app->share(function ($app) {
    return new PlaintextPasswordEncoder();
});

// Add model managers from ORM.
$app['pantarei_user.model_manager.factory'] = $app->share(function($app) {
    return new ModelManagerFactory($app['pantarei_user.orm'], $app['pantarei_user.model']);
});
