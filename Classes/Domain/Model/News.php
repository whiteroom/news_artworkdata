<?php

namespace Whiteroom\NewsArtworkdata\Domain\Model;

class News extends \GeorgRinger\News\Domain\Model\News {

    /**
     * @var string
     */
    protected $txNewsArtworkdata;

    /**
     * @return string
     */
    public function get()
    {
        return $this->txNewsArtworkdataUid;
    }

    /**
     * @return string
     */
    public function getArtworkdataUid()
    {
        return $this->txNewsArtworkdataUid;
    }

    /**
     * @param string $txNewsArtworkdataUid
     */
    public function setTxNewsArtworkdataUid($txNewsArtworkdataUid)
    {
        $this->txNewsArtworkdataUid = $txNewsArtworkdataUid;
    }

}
