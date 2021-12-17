<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use stdClass;

class GetWithdrawSourceResponse implements \JsonSerializable
{
    /**
     * @var string
     */
    private $sourceId;

    /**
     * @var string
     */
    private $type;

    /**
     * @param string $sourceId
     * @param string $type
     */
    public function __construct(string $sourceId, string $type)
    {
        $this->sourceId = $sourceId;
        $this->type = $type;
    }

    /**
     * Returns Source Id.
     */
    public function getSourceId(): string
    {
        return $this->sourceId;
    }

    /**
     * Sets Source Id.
     *
     * @required
     * @maps source_id
     */
    public function setSourceId(string $sourceId): void
    {
        $this->sourceId = $sourceId;
    }

    /**
     * Returns Type.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     *
     * @required
     * @maps type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return mixed
     */
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['source_id'] = $this->sourceId;
        $json['type']      = $this->type;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
