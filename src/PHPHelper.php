<?php declare(strict_types=1);

namespace App;

class PHPHelper
{
    static function getValueByKey($searchKey, array $arr, array $result = []): array
    {
        if (isset($arr[$searchKey])) {
            $result[] = $arr[$searchKey];
        }

        foreach ($arr as $param) {
            if (is_array($param)) {
                $result = self::getValueByKey($searchKey, $param, $result);
            }
        }

        return $result;
    }
}