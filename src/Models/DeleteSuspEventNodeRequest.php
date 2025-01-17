<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DeleteSuspEventNodeRequest extends Model
{
    /**
     * @var int
     */
    public $noteId;
    protected $_name = [
        'noteId' => 'NoteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->noteId) {
            $res['NoteId'] = $this->noteId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NoteId'])) {
            $model->noteId = $map['NoteId'];
        }

        return $model;
    }
}
