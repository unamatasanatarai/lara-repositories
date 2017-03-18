ServiceProvider
```
//config/app.php
App\Providers\RepositoryServiceProvider::class,
```

The Provider
```
<?php

namespace App\Providers;

use App\Repositories\Contracts\RealestateRepositoryInterface;
use App\Repositories\RealestateRepository;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(RealestateRepositoryInterface::class, RealestateRepository::class);
    }
}

```


Model

```
<?php

namespace App\Repositories;

use App\Realestate;
use App\Repositories\Contracts\RealestateRepositoryInterface;
use Unamatasanatarai\Repositories\Abstracts\EloquentRepository;

class RealestateRepository extends EloquentRepository implements RealestateRepositoryInterface
{

    protected $model = Realestate::class;

}
```

Controller
```
    public function save(Request $request, RealestateRepositoryInterface $repo)
    {
        dd($repo->create([]));
```
