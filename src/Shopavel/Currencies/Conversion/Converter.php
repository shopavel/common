<?php namespace Shopavel\Currencies\Conversion;

class Converter {

    public function convert(CurrencyInterface $from, CurrencyInterface $to, $amount)
    {
        return $amount * ((1 / $from->rate) / (1 / $to->rate));
    }

    public function convertFromBase(CurrencyInterface $to, $amount)
    {
        return $amount * (1 / $to->rate);
    }

}