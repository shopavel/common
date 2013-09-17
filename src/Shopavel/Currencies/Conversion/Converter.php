<?php namespace Shopavel\Currencies\Conversion;

/**
 * Currency converter.
 *
 *     $converter = new Converter;
 *     echo $converter->amount(4.50)->from($gbp)->to($usd)->convert();
 *
 *     foreach (array($gbp, $usd, $jpy) as $currency)
 *     {
 *         echo $converter->to($currency)->convert();
 *     }
 *
 * @author Laurence Roberts <lsjroberts@outlook.com>
 */
class Converter {

    protected $amount;
    protected $from;
    protected $to;

    /**
     * Set the amount to convert.
     * 
     * @param  float $amount
     * 
     * @return Converter
     */
    public function amount($amount)
    {
        $this->amount = (float) $amount;

        return $this;
    }

    /**
     * Set the currency to convert from.
     * 
     * @param  CurrencyInterface $currency
     * 
     * @return Converter
     */
    public function from(CurrencyInterface $currency)
    {
        $this->from = $currency;

        return $this;
    }

    /**
     * Set the currency to convert to.
     * 
     * @param  CurrencyInterface $currency
     * 
     * @return Converter
     */
    public function to(CurrencyInterface $currency)
    {
        $this->to = $currency;

        return $this;
    }

    /**
     * Calculate the converted amount.
     * 
     * @return float
     */
    public function convert()
    {
        $converted = $amount * ($this->from->getRate() / $this->to->getRate());

        return $converted;
    }

}