<?php //989ed0f2d9d0cc1dcbd8c8c8c3f83897
/** @noinspection all */

namespace LaravelIdea\Helper\Illuminate\Notifications {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Notifications\DatabaseNotificationCollection;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method DatabaseNotification|null getOrPut($key, $value)
     * @method DatabaseNotification|$this shift(int $count = 1)
     * @method DatabaseNotification|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method DatabaseNotification|$this pop(int $count = 1)
     * @method DatabaseNotification|null pull($key, \Closure $default = null)
     * @method DatabaseNotification|null last(callable $callback = null, \Closure $default = null)
     * @method DatabaseNotification|$this random(callable|int|null $number = null)
     * @method DatabaseNotification|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method DatabaseNotification|null get($key, \Closure $default = null)
     * @method DatabaseNotification|null first(callable $callback = null, \Closure $default = null)
     * @method DatabaseNotification|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method DatabaseNotification|null find($key, $default = null)
     * @method DatabaseNotification[] all()
     * @mixin DatabaseNotificationCollection
     */
    class _IH_DatabaseNotification_C extends _BaseCollection {
        /**
         * @param int $size
         * @return DatabaseNotification[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method DatabaseNotification baseSole(array|string $columns = ['*'])
     * @method DatabaseNotification create(array $attributes = [])
     * @method _IH_DatabaseNotification_C|DatabaseNotification[] cursor()
     * @method DatabaseNotification|null|_IH_DatabaseNotification_C|DatabaseNotification[] find($id, array|string $columns = ['*'])
     * @method _IH_DatabaseNotification_C|DatabaseNotification[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method DatabaseNotification|_IH_DatabaseNotification_C|DatabaseNotification[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DatabaseNotification|_IH_DatabaseNotification_C|DatabaseNotification[] findOrFail($id, array|string $columns = ['*'])
     * @method DatabaseNotification|_IH_DatabaseNotification_C|DatabaseNotification[] findOrNew($id, array|string $columns = ['*'])
     * @method DatabaseNotification first(array|string $columns = ['*'])
     * @method DatabaseNotification firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DatabaseNotification firstOrCreate(array $attributes = [], array $values = [])
     * @method DatabaseNotification firstOrFail(array|string $columns = ['*'])
     * @method DatabaseNotification firstOrNew(array $attributes = [], array $values = [])
     * @method DatabaseNotification firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method DatabaseNotification forceCreate(array $attributes)
     * @method _IH_DatabaseNotification_C|DatabaseNotification[] fromQuery(string $query, array $bindings = [])
     * @method _IH_DatabaseNotification_C|DatabaseNotification[] get(array|string $columns = ['*'])
     * @method DatabaseNotification getModel()
     * @method DatabaseNotification[] getModels(array|string $columns = ['*'])
     * @method _IH_DatabaseNotification_C|DatabaseNotification[] hydrate(array $items)
     * @method DatabaseNotification make(array $attributes = [])
     * @method DatabaseNotification newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|DatabaseNotification[]|_IH_DatabaseNotification_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|DatabaseNotification[]|_IH_DatabaseNotification_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DatabaseNotification sole(array|string $columns = ['*'])
     * @method DatabaseNotification updateOrCreate(array $attributes, array $values = [])
     * @method _IH_DatabaseNotification_QB read()
     * @method _IH_DatabaseNotification_QB unread()
     */
    class _IH_DatabaseNotification_QB extends _BaseBuilder {}
}
