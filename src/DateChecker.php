<?php
namespace kendo;

use DateTimeInterface;

trait DateChecker
{
    /**
     *
     * @param DateTimeInterface|string $value
     *
     * @return DateTimeInterface|null
     */
    public function fixDate($value)
    {
        if (!empty($value)) {
            if (!($value instanceof DateTimeInterface)) {
                try {
                    $value = new \DateTimeImmutable(strval($value));
                    $value->setTimezone(new \DateTimeZone('GMT'));
                } catch (\Exception $e) {
                }
            }
        }

        return $value;
    }
}
