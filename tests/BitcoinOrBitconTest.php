<?php declare(strict_types=1);

namespace hikari_no_yume\BitcoinOrBitcon;

class BitcoinOrBitconTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @expectedException Exception
     */
    public function testInvalidDates() {
        $bcobc = new BitcoinOrBitcon;
        $bcobc->isUseful("BTC", new \DateTime("2017-10-10"), new \DateTime("2016-01-01"));
    }

    /**
     * @expectedException Exception
     */
    public function testInvalidCurrency() {
        $bcobc = new BitcoinOrBitcon;
        $bcobc->isUseful("", new \DateTime("2016-01-01"), new \DateTime("2018-01-01"));
    }

    public function testCommonCurrencies() {
        $bcobc = new BitcoinOrBitcon;

        $this->assertFalse($bcobc->isUseful("BTC", new \DateTime("2016-01-01"), new \DateTime("2018-01-01")));
        // Alias
        $this->assertFalse($bcobc->isUseful("XBT", new \DateTime("2016-01-01"), new \DateTime("2018-01-01")));

        $this->assertFalse($bcobc->isUseful("LTC", new \DateTime("2016-01-01"), new \DateTime("2018-01-01")));
        $this->assertFalse($bcobc->isUseful("DGC", new \DateTime("2016-01-01"), new \DateTime("2018-01-01")));
        $this->assertFalse($bcobc->isUseful("ETH", new \DateTime("2016-01-01"), new \DateTime("2018-01-01")));
    }
}
