<?php declare(strict_types=1);
/**
 * This file is part of TwigView.
 *
 ** (c) 2014 Cees-Jan Kiewiet
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WyriHaximus\TwigView\Lib\Twig\Extension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * Class Basic.
 * @package WyriHaximus\TwigView\Lib\Twig\Extension
 */
final class Basic extends AbstractExtension
{
    /**
     * Get declared filters.
     *
     * @return \Twig\TwigFilter[]
     */
    public function getFilters(): array
    {
        return [
            new \Twig_SimpleFilter('debug', 'debug'),
            new \Twig_SimpleFilter('pr', 'pr'),
            new \Twig_SimpleFilter('low', 'low'),
            new \Twig_SimpleFilter('up', 'up'),
            new \Twig_SimpleFilter('count', 'count'),
            new \Twig_SimpleFilter('h', 'h'),
            new \Twig_SimpleFilter('null', function () {
            new TwigFilter('debug', 'debug'),
            new TwigFilter('pr', 'pr'),
            new TwigFilter('env', 'env'),
            new TwigFilter('count', 'count'),
            new TwigFilter('h', 'h'),
            new TwigFilter('null', function () {
                return '';
            }),
        ];
    }

    /**
     * Get extension name.
     *
     * @return string
     */
    public function getName(): string
    {
        return 'basic';
    }
}
