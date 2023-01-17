<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Collection;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_hasmay_repositories()
    {
        $user = new User();
        $this->assertInstanceOf(Collection::class, $user->repositories);
    }
}
