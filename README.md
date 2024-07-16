### Source Youtube

> https://www.youtube.com/watch?v=SqTdHCTWqks&t=9617s

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

## Relation between tables

# Job model, belongsTo

> public function employer() { return $this->belongsTo(Employer::class); }
> $job->employer, without employer()

# Employer model, hasMany

> public function jobs() {return $this->hasMany(Job::class); }
> $employer->jobs, without jobs()

### Create Tag model, factory, migration

> php artisan make:model Tag -mf

> php artisan migrate:rollback && php artisan migrate

## tags belongsToMany -> foreignPivotKey, relatedPivotKey

> Job.php -> tags() { return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id"); }
> Tag.php -> jobs() { return $this->belongsToMany(Job::class, relatedPivotKey: "job_listing_id" ); }

### Homework : post_tag table

> php artisan make:migration create_post_tag_table
> php artisan migrate

### Laravel Dev Bar

> https://github.com/barryvdh/laravel-debugbar

### Pagination

> paginate, simplePaginate, cursorPaginate
