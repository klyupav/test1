<?php

namespace App;

interface ArrayUtilInterface
{
    public function decodeData(array $data): array;
    public function encodeData(array $data): array;
}
