<?php
declare(strict_types=1);

namespace App\Infrastructure\Framework\Providers;

use App\Domain\Repositories\UserRepositoryInterface;
use App\Infrastructure\Persistence\UserEloquentORMRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        array_map(fn($i) => $this->app->bind(array_key_first($i), array_values($i)[0]),[
            [UserRepositoryInterface::class => UserEloquentORMRepository::class],
        ]);
    }
}