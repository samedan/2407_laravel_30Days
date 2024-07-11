## Talwind free componenents

> https://tailwindui.com/components/application-ui/application-shells/stacked

## Add Model & Migration

> php artisan make:model Post -m

## Tinker

> php artisan tinker

## Employer Model / Table / Migration

> php artisan make:model Employer -m
> php artisan make:model Employer -f
> create_jobs_listings_table -> $table->foreignIdFor(\App\Models\Employer::class);

## Create Fake data with Factory

> php artisan tinker
> App\Models\Job::factory(300)->create()
