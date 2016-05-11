<?php

/**
 * DropsizeMVCf - extension of the SlimFramework and others tools
 *
 * @author      Isaac Trenado <isaac.trenado@codigolimpio.com>
 * @copyright   2013 Isaac Trenado
 * @link        http://dropsize.codigolimpio.com
 * @license     http://dropsize.codigolimpio.com/license.txt
 * @version     3.0.1
 * @package     DropsizeMVCf
 *
 * DropsizeMVCf - Web publishing software
 * Copyright 2015 by the contributors
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 * 
 * This program incorporates work covered by the following copyright and
 * permission notices:
 * 
 * DropsizeMVCf is (c) 2013, 2015 
 * Isaac Trenado - isaac.trenado@codigolimpio.com -
 * http://www.codigolimpio.com
 * 
 * Wherever third party code has been used, credit has been given in the code's comments.
 *
 * DropsizeMVCf is released under the GPL
 * 
 */

/**
 * Clase que modifica caracteres especiales regresando su correcta conversión para
 * cadenas JSON
 * 
 * @package com.dropsizemvcf
 * @author  Isaac Trenado
 * @since   1.0.0
 */

class UnicodeUtf8Replace {

    private static $larCharsNoAble = array("¡", "¢", "£", "¤", "¥", "§", "¨", "©"
        , "ª", "«", "¬", "®", "¯", "°", "±", "´", "µ", "¶", "·", "¸"
        , "º", "»", "¿", "À", "Á", "Â", "Ã", "Ä", "Å", "Æ", "Ç", "È", "É"
        , "Ê", "Ë", "Ì", "Í", "Î", "Ï", "Ñ", "Ò", "Ó", "Ô", "Õ", "Ö", "Ø"
        , "Ù", "Ú", "Û", "Ü", "ß", "à", "á", "â", "ã", "ä", "å", "æ", "ç"
        , "è", "é", "ê", "ë", "ì", "í", "î", "ï", "ñ", "ò", "ó", "ô", "õ"
        , "ö", "÷", "ø", "ù", "ú", "û", "ü", "ÿ", "—", "/");
    private static $larCharsAble = array("\u00a1", "\u00a2", "\u00a3", "\u00a4"
        , "\u00a5", "\u00a7", "\u00a8", "\u00a9", "\u00aa", "\u00ab"
        , "\u00ac", "\u00ae", "\u00af", "\u00b0", "\u00b1", "\u00b4"
        , "\u00b5", "\u00b6", "\u00b7", "\u00b8", "\u00ba", "\u00bb"
        , "\u00bf", "\u00c0", "\u00c1", "\u00c2", "\u00c3", "\u00c4"
        , "\u00c5", "\u00c6", "\u00c7", "\u00c8", "\u00c9", "\u00ca"
        , "\u00cb", "\u00cc", "\u00cd", "\u00ce", "\u00cf", "\u00d1"
        , "\u00d2", "\u00d3", "\u00d4", "\u00d5", "\u00d6", "\u00d8"
        , "\u00d9", "\u00da", "\u00db", "\u00dc", "\u00df", "\u00e0"
        , "\u00e1", "\u00e2", "\u00e3", "\u00e4", "\u00e5", "\u00e6"
        , "\u00e7", "\u00e8", "\u00e9", "\u00ea", "\u00eb", "\u00ec"
        , "\u00ed", "\u00ee", "\u00ef", "\u00f1", "\u00f2", "\u00f3"
        , "\u00f4", "\u00f5", "\u00f6", "\u00f7", "\u00f8", "\u00f9"
        , "\u00fa", "\u00fb", "\u00fc", "\u00ff", "\u2014", "\/");

    public static function UnicodeReplace($pstString) {

        return $texto = str_replace(self::$larCharsNoAble
                , self::$larCharsAble, utf8_encode($pstString));
    }

}
