<?php
/*
 * This file is a part of the Ant Path Matcher library.
 *
 * (c) Dragonfly Development Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$loader = require dirname(__DIR__).'/vendor/autoload.php';
$loader->add('dflydev\\tests\\util\\antPathMatcher', 'tests');

if (class_exists('PHPUnit\Framework\TestCase') && ! class_exists('PHPUnit_Framework_TestCase')) {
    class_alias('PHPUnit\Framework\TestCase', 'PHPUnit_Framework_TestCase');
}
