<?php

namespace App\Validation;

use Phalcon\Validation;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\File as FileValidator;

class FileValidation extends Validation
{
    public function initialize(){

    // $this->add(
    //     'file',
    //     new PresenceOf(
    //         [
    //             'message' => 'File harus diupload',
    //         ]
    //     )
    // );

    $this->add(
        'file',
        new FileValidator(
            [
                "maxSize"              => "2M",
                "messageSize"          => ":field exceeds the max filesize (:max)",
                "allowedTypes"         => [
                    "image/jpeg",
                    "image/png",
                    "application/pdf"
                ],
                "messageType"          => "Tipe file yang bisa diupload adalah :types",
            ]
        )
    );
    }
}

?>