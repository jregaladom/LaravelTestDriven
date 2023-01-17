<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\Repository;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RepositoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    use RefreshDatabase;
    public function test_belongsTo_user()
    {
        $repository = Repository::factory()->create();
        $this->assertInstanceOf(User::class, $repository->user);
    }
}
