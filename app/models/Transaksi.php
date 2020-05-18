<?php

class Transaksi extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $nama;

    /**
     *
     * @var string
     */
    public $kategori;

    /**
     *
     * @var string
     */
    public $namabarang;

    /**
     *
     * @var integer
     */
    public $jumlah;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("charity");
        $this->setSource("transaksi");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Transaksi[]|Transaksi|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Transaksi|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
