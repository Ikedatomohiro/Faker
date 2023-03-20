<?php

namespace Faker\Test\Provider\ja_JP;

use Faker\Provider\ja_JP\Company;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class CompanyTest extends TestCase
{
    public function testCompanyPrefix(): void
    {
        self::assertEquals('有限会社', $this->faker->companyPrefix);
    }

    protected function getProviders(): iterable
    {
        yield new Company($this->faker);
    }
}
