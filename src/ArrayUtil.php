<?php

namespace App;

class ArrayUtil implements ArrayUtilInterface
{
    protected $result = [];

    public function decodeData(array $data): array
    {
        $result = [];
        foreach ($data as $key => $value) {
            $current = &$result;
            $keys = explode('.', $key);
            foreach ($keys as $k) {
                $current = &$current[$k];
            }
            $current = $value;
        }

        return $result;
    }

    public function encodeData(array $data): array
    {
        return [];
    }
}
