<?php

namespace Lablog\Stringy\Twig;

use Twig_Environment;
use Twig_Function_Function;
use Twig_Filter_Method;
use Stringy\StaticStringy as Stringy;
use Twig_Extension;

class StringyLoader extends Twig_Extension
{
    public function getName()
    {
        return 'StringyLoader';
    }

    public function getFilters()
    {
        return array(
            'at' => new Twig_Filter_Method($this, 'at'),
            'camelize' => new Twig_Filter_Method($this, 'camelize'),
            'chars' => new Twig_Filter_Method($this, 'chars'),
            'collapseWhitespace' => new Twig_Filter_Method($this, 'collapseWhitespace'),
            'contains' => new Twig_Filter_Method($this, 'contains'),
            'countSubstr' => new Twig_Filter_Method($this, 'countSubstr'),
            'dasherize' => new Twig_Filter_Method($this, 'dasherize'),
            'endsWith' => new Twig_Filter_Method($this, 'endsWith'),
            'ensureLeft' => new Twig_Filter_Method($this, 'ensureLeft'),
            'ensureRight' => new Twig_Filter_Method($this, 'ensureRight'),
            'first' => new Twig_Filter_Method($this, 'first'),
            'humanize' => new Twig_Filter_Method($this, 'humanize'),
            'insert' => new Twig_Filter_Method($this, 'insert'),
            'isAlpha' => new Twig_Filter_Method($this, 'isAlpha'),
            'isAlphanumeric' => new Twig_Filter_Method($this, 'isAlphanumeric'),
            'isBlank' => new Twig_Filter_Method($this, 'isBlank'),
            'isHexadecimal' => new Twig_Filter_Method($this, 'isHexadecimal'),
            'isJson' => new Twig_Filter_Method($this, 'isJson'),
            'isLowercase' => new Twig_Filter_Method($this, 'isLowercase'),
            'isSerialized' => new Twig_Filter_Method($this, 'isSerialized'),
            'isUppercase' => new Twig_Filter_Method($this, 'isUppercase'),
            'last' => new Twig_Filter_Method($this, 'last'),
            'length' => new Twig_Filter_Method($this, 'length'),
            'longestCommonPrefix' => new Twig_Filter_Method($this, 'longestCommonPrefix'),
            'longestCommonSuffix' => new Twig_Filter_Method($this, 'longestCommonSuffix'),
            'longestCommonSubstring' => new Twig_Filter_Method($this, 'longestCommonSubstring'),
            'lowerCaseFirst' => new Twig_Filter_Method($this, 'lowerCaseFirst'),
            'pad' => new Twig_Filter_Method($this, 'pad'),
            'padBoth' => new Twig_Filter_Method($this, 'padBoth'),
            'padLeft' => new Twig_Filter_Method($this, 'padLeft'),
            'padRight' => new Twig_Filter_Method($this, 'padRight'),
            'regexReplace' => new Twig_Filter_Method($this, 'regexReplace'),
            'removeLeft' => new Twig_Filter_Method($this, 'removeLeft'),
            'removeRight' => new Twig_Filter_Method($this, 'removeRight'),
            'replace' => new Twig_Filter_Method($this, 'replace'),
            'reverse' => new Twig_Filter_Method($this, 'reverse'),
            'safeTruncate' => new Twig_Filter_Method($this, 'safeTruncate'),
            'shuffle' => new Twig_Filter_Method($this, 'shuffle'),
            'slugify' => new Twig_Filter_Method($this, 'slugify'),
            'startsWith' => new Twig_Filter_Method($this, 'startsWith'),
            'substr' => new Twig_Filter_Method($this, 'substr'),
            'surround' => new Twig_Filter_Method($this, 'surround'),
            'swapCase' => new Twig_Filter_Method($this, 'swapCase'),
            'tidy' => new Twig_Filter_Method($this, 'tidy'),
            'titleize' => new Twig_Filter_Method($this, 'titleize'),
            'toAscii' => new Twig_Filter_Method($this, 'toAscii'),
            'toLowerCase' => new Twig_Filter_Method($this, 'toLowerCase'),
            'toSpaces' => new Twig_Filter_Method($this, 'toSpaces'),
            'toTabs' => new Twig_Filter_Method($this, 'toTabs'),
            'toUpperCase' => new Twig_Filter_Method($this, 'toUpperCase'),
            'trim' => new Twig_Filter_Method($this, 'trim'),
            'truncate' => new Twig_Filter_Method($this, 'truncate'),
            'underscored' => new Twig_Filter_Method($this, 'underscored'),
            'upperCamelize' => new Twig_Filter_Method($this, 'upperCamelize'),
            'upperCaseFirst' => new Twig_Filter_Method($this, 'upperCaseFirst')
        );
    }

    public function at($string, $position)
    {
        return Stringy::at($string, $position);
    }

    public function camelize($string)
    {
        return Stringy::camelize($string);
    }

    public function chars($string)
    {
        return Stringy::chars($string);
    }

    public function collapseWhitespace($string)
    {
        return Stringy::collapseWhitespace($string);
    }

    public function contains($string, $subString)
    {
        return Stringy::contains($string, $subString);
    }

    public function countSubstr($string, $subString)
    {
        return Stringy::countSubstr($string, $subString);
    }

    public function dasherize($string)
    {
        return Stringy::dasherize($string);
    }

    public function endsWith($string, $ending, $case = true)
    {
        return Stringy::endsWith($string, $ending, $case);
    }

    public function ensureLeft($string, $left)
    {
        return Stringy::ensureLeft($string, $left);
    }

    public function ensureRight($string, $right)
    {
        return Stringy::ensureRight($string, $right);
    }

    public function first($string, $count)
    {
        return Stringy::first($string, $count);
    }

    public function humanize($string)
    {
        return Stringy::humanize($string);
    }

    public function insert($string, $subString, $position)
    {
        return Stringy::insert($string, $subString, $position);
    }

    public function isAlpha($string)
    {
        return Stringy::isAlpha($string);
    }

    public function isAlphanumeric($string)
    {
        return Stringy::isAlphanumeric($string);
    }

    public function isBlank($string)
    {
        return Stringy::isBlank($string);
    }

    public function isHexadecimal($string)
    {
        return Stringy::isHexadecimal($string);
    }

    public function isJson($string)
    {
        return Stringy::isJson($string);
    }

    public function isLowercase($string)
    {
        return Stringy::isLowercase($string);
    }

    public function isSerialized($string)
    {
        return Stringy::isSerialized($string);
    }

    public function isUppercase($string)
    {
        return Stringy::isUppercase($string);
    }

    public function last($string, $position)
    {
        return Stringy::last($string, $position);
    }

    public function length($string)
    {
        return Stringy::length($string);
    }

    public function longestCommonPrefix($string, $otherString)
    {
        return Stringy::longestCommonPrefix($string, $otherString);
    }

    public function longestCommonSuffix($string, $otherString)
    {
        return Stringy::longestCommonSuffix($string, $otherString);
    }

    public function longestCommonSubstring($string, $otherString)
    {
        return Stringy::longestCommonSubstring($string, $otherString);
    }

    public function lowerCaseFirst($string)
    {
        return Stringy::lowerCaseFirst($string);
    }

    public function pad($string, $length, $padString = ' ', $padType = 'right')
    {
        return Stringy::pad($string, $length, $padString, $padType);
    }

    public function padBoth($string, $length, $padString)
    {
        return Stringy::padBoth($string, $length, $padString);
    }

    public function padLeft($string, $length, $padString)
    {
        return Stringy::padLeft($string, $length, $padString);
    }

    public function padRight($string, $length, $padString)
    {
        return Stringy::padRight($string, $length, $padString);
    }

    public function regexReplace($string, $pattern, $replacement, $options = 'msr')
    {
        return Stringy::regexReplace($string, $pattern, $replacement, $options);
    }

    public function removeLeft($string, $subString)
    {
        return Stringy::removeLeft($string, $subString);
    }

    public function removeRight($string, $subString)
    {
        return Stringy::removeRight($string, $subString);
    }

    public function replace($string, $search, $replacement)
    {
        return Stringy::replace($string, $search, $replacement);
    }

    public function reverse($string)
    {
        return Stringy::reverse($string);
    }

    public function safeTruncate($string, $length, $ending = '...')
    {
        return Stringy::safeTruncate($string, $length, $ending);
    }

    public function shuffle($string)
    {
        return Stringy::shuffle($string);
    }

    public function slugify($string, $replacement = '-')
    {
        return Stringy::slugify($string, $replacement);
    }

    public function startsWith($string, $subString)
    {
        return Stringy::startsWith($string, $subString);
    }

    public function substr($string, $start, $length = null)
    {
        return Stringy::substr($string, $start, $length);
    }

    public function surround($string, $surround)
    {
        return Stringy::surround($string, $surround);
    }

    public function swapCase($string)
    {
        return Stringy::swapCase($string);
    }

    public function tidy($string)
    {
        return Stringy::tidy($string);
    }

    public function titleize($string, array $ignore = array())
    {
        return Stringy::titleize($string, $ignore);
    }

    public function toAscii($string)
    {
        return Stringy::toAscii($string);
    }

    public function toLowerCase($string)
    {
        return Stringy::toLowerCase($string);
    }

    public function toSpaces($string, $tabLength = 4)
    {
        return Stringy::toSpaces($string, $tabLength);
    }

    public function toTabs($string, $tabLength = 4)
    {
        return Stringy::toTabs($string, $tabLength);
    }

    public function toUpperCase($string)
    {
        return Stringy::toUpperCase($string);
    }

    public function trim($string)
    {
        return Stringy::trim($string);
    }

    public function truncate($string, $length, $ending = '...')
    {
        return Stringy::truncate($string, $length, $ending);
    }

    public function underscored($string)
    {
        return Stringy::underscored($string);
    }

    public function upperCamelize($string)
    {
        return Stringy::upperCamelize($string);
    }

    public function upperCaseFirst($string)
    {
        return Stringy::upperCaseFirst($string);
    }

}