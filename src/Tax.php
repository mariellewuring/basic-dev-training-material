<?php

class Tax
{
    protected $taxRates = [
        'nl' => 21,
        'de' => 19,
        'be' => 23
    ];

    /**
     * @param string $country
     * @return float
     */
    public function rateByCountry(string $country)
    {
        return $this->taxRates[$country] ?? 0 ;
    }

    /**
     * @param float $price
     * @param string $country
     * @return float
     */
    public function taxAmount(float $price, string $country)
    {
        return $price * ($this->rateByCountry($country) / 100);
    }
}