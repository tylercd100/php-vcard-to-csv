<?php

namespace Tylercd100\VcardToCsv\Converters;

interface Converter
{
    public function convert();
    public function load();
}
