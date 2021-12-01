<?php declare(strict_types=1);

namespace KataTests\Unit;

use Kata\TheClass;
use PHPUnit\Framework\TestCase;

final class PasswordValidatorTest extends TestCase
{
    public function test_change_me(): void
    {
        $validator = new TheClass();

        self::assertTrue($validator->changeMe());
    }
}