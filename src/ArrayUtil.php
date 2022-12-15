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
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $this->encodeArray($value, [$key]);
            } else {
                $this->result[$key] = $value;
            }
        }

        return $this->result;
    }

    protected function encodeArray(array $data, array $keys): void
    {
        foreach ($data as $key => $value) {
            $tmp = $keys;
            $tmp[] = $key;
            $k = implode('.', $tmp);
            $keys[$k] = $key;
            if (is_array($value)) {
                $this->encodeArray($value, $keys);
            } else {
                $this->result[$k] = $value;
            }
            unset($keys[$k]);
        }
    }
}
