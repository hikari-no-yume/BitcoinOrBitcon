<?php declare(strict_types=1);

namespace hikari_no_yume\BitcoinOrBitcon;

class BitcoinOrBitcon implements BitcoinOrBitconInterface
{
    public function isUseful(string $cryptocurrency, \DateTimeInterface $from, \DateTimeInterface $to) {
        if ($to < $from) {
            throw new \Exception("\$from must predate \$to");
        }

        if (empty($cryptocurrency)) {
            throw new \Exception("Valid cryptocurrency must be specified");
        }

        return USEFUL_CRYPTOCURRENCIES[$cryptocurrency] ?? false;
    }
}
