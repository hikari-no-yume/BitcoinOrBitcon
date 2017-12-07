<?php declare(strict_types=1);

namespace hikari_no_yume\BitcoinOrBitcon;

interface BitcoinOrBitconInterface
{
    public function isUseful(string $cryptocurrency, \DateTimeInterface $from, \DateTimeInterface $to);
}
