<?php //6d4230e0db09317d9294f451c9efa06e
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Category;
    use App\Models\Commande;
    use App\Models\Coordonee;
    use App\Models\Ingredient;
    use App\Models\Panier;
    use App\Models\Produit;
    use App\Models\User;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method Category|null getOrPut($key, $value)
     * @method Category|$this shift(int $count = 1)
     * @method Category|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Category|$this pop(int $count = 1)
     * @method Category|null pull($key, \Closure $default = null)
     * @method Category|null last(callable $callback = null, \Closure $default = null)
     * @method Category|$this random(callable|int|null $number = null)
     * @method Category|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Category|null get($key, \Closure $default = null)
     * @method Category|null first(callable $callback = null, \Closure $default = null)
     * @method Category|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Category|null find($key, $default = null)
     * @method Category[] all()
     */
    class _IH_Category_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Category[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Category_QB whereId($value)
     * @method _IH_Category_QB whereDesignation($value)
     * @method _IH_Category_QB whereCreatedAt($value)
     * @method _IH_Category_QB whereUpdatedAt($value)
     * @method Category baseSole(array|string $columns = ['*'])
     * @method Category create(array $attributes = [])
     * @method _IH_Category_C|Category[] cursor()
     * @method Category|null|_IH_Category_C|Category[] find($id, array|string $columns = ['*'])
     * @method _IH_Category_C|Category[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Category|_IH_Category_C|Category[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Category|_IH_Category_C|Category[] findOrFail($id, array|string $columns = ['*'])
     * @method Category|_IH_Category_C|Category[] findOrNew($id, array|string $columns = ['*'])
     * @method Category first(array|string $columns = ['*'])
     * @method Category firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Category firstOrCreate(array $attributes = [], array $values = [])
     * @method Category firstOrFail(array|string $columns = ['*'])
     * @method Category firstOrNew(array $attributes = [], array $values = [])
     * @method Category firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Category forceCreate(array $attributes)
     * @method _IH_Category_C|Category[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Category_C|Category[] get(array|string $columns = ['*'])
     * @method Category getModel()
     * @method Category[] getModels(array|string $columns = ['*'])
     * @method _IH_Category_C|Category[] hydrate(array $items)
     * @method Category make(array $attributes = [])
     * @method Category newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Category[]|_IH_Category_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Category[]|_IH_Category_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Category sole(array|string $columns = ['*'])
     * @method Category updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Category_QB extends _BaseBuilder {}
    
    /**
     * @method Commande|null getOrPut($key, $value)
     * @method Commande|$this shift(int $count = 1)
     * @method Commande|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Commande|$this pop(int $count = 1)
     * @method Commande|null pull($key, \Closure $default = null)
     * @method Commande|null last(callable $callback = null, \Closure $default = null)
     * @method Commande|$this random(callable|int|null $number = null)
     * @method Commande|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Commande|null get($key, \Closure $default = null)
     * @method Commande|null first(callable $callback = null, \Closure $default = null)
     * @method Commande|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Commande|null find($key, $default = null)
     * @method Commande[] all()
     */
    class _IH_Commande_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Commande[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Commande_QB whereId($value)
     * @method _IH_Commande_QB whereReference($value)
     * @method _IH_Commande_QB whereUserId($value)
     * @method _IH_Commande_QB whereEtat($value)
     * @method _IH_Commande_QB wherePrix($value)
     * @method _IH_Commande_QB whereExtrainfo($value)
     * @method _IH_Commande_QB whereCreatedAt($value)
     * @method _IH_Commande_QB whereUpdatedAt($value)
     * @method Commande baseSole(array|string $columns = ['*'])
     * @method Commande create(array $attributes = [])
     * @method _IH_Commande_C|Commande[] cursor()
     * @method Commande|null|_IH_Commande_C|Commande[] find($id, array|string $columns = ['*'])
     * @method _IH_Commande_C|Commande[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Commande|_IH_Commande_C|Commande[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Commande|_IH_Commande_C|Commande[] findOrFail($id, array|string $columns = ['*'])
     * @method Commande|_IH_Commande_C|Commande[] findOrNew($id, array|string $columns = ['*'])
     * @method Commande first(array|string $columns = ['*'])
     * @method Commande firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Commande firstOrCreate(array $attributes = [], array $values = [])
     * @method Commande firstOrFail(array|string $columns = ['*'])
     * @method Commande firstOrNew(array $attributes = [], array $values = [])
     * @method Commande firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Commande forceCreate(array $attributes)
     * @method _IH_Commande_C|Commande[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Commande_C|Commande[] get(array|string $columns = ['*'])
     * @method Commande getModel()
     * @method Commande[] getModels(array|string $columns = ['*'])
     * @method _IH_Commande_C|Commande[] hydrate(array $items)
     * @method Commande make(array $attributes = [])
     * @method Commande newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Commande[]|_IH_Commande_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Commande[]|_IH_Commande_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Commande sole(array|string $columns = ['*'])
     * @method Commande updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Commande_QB extends _BaseBuilder {}
    
    /**
     * @method Coordonee|null getOrPut($key, $value)
     * @method Coordonee|$this shift(int $count = 1)
     * @method Coordonee|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Coordonee|$this pop(int $count = 1)
     * @method Coordonee|null pull($key, \Closure $default = null)
     * @method Coordonee|null last(callable $callback = null, \Closure $default = null)
     * @method Coordonee|$this random(callable|int|null $number = null)
     * @method Coordonee|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Coordonee|null get($key, \Closure $default = null)
     * @method Coordonee|null first(callable $callback = null, \Closure $default = null)
     * @method Coordonee|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Coordonee|null find($key, $default = null)
     * @method Coordonee[] all()
     */
    class _IH_Coordonee_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Coordonee[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Coordonee_QB whereId($value)
     * @method _IH_Coordonee_QB whereAdresse($value)
     * @method _IH_Coordonee_QB whereVille($value)
     * @method _IH_Coordonee_QB whereCodeZip($value)
     * @method _IH_Coordonee_QB wherePays($value)
     * @method _IH_Coordonee_QB whereNumTel($value)
     * @method _IH_Coordonee_QB whereDateNaissance($value)
     * @method _IH_Coordonee_QB whereUserId($value)
     * @method _IH_Coordonee_QB whereCreatedAt($value)
     * @method _IH_Coordonee_QB whereUpdatedAt($value)
     * @method Coordonee baseSole(array|string $columns = ['*'])
     * @method Coordonee create(array $attributes = [])
     * @method _IH_Coordonee_C|Coordonee[] cursor()
     * @method Coordonee|null|_IH_Coordonee_C|Coordonee[] find($id, array|string $columns = ['*'])
     * @method _IH_Coordonee_C|Coordonee[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Coordonee|_IH_Coordonee_C|Coordonee[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Coordonee|_IH_Coordonee_C|Coordonee[] findOrFail($id, array|string $columns = ['*'])
     * @method Coordonee|_IH_Coordonee_C|Coordonee[] findOrNew($id, array|string $columns = ['*'])
     * @method Coordonee first(array|string $columns = ['*'])
     * @method Coordonee firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Coordonee firstOrCreate(array $attributes = [], array $values = [])
     * @method Coordonee firstOrFail(array|string $columns = ['*'])
     * @method Coordonee firstOrNew(array $attributes = [], array $values = [])
     * @method Coordonee firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Coordonee forceCreate(array $attributes)
     * @method _IH_Coordonee_C|Coordonee[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Coordonee_C|Coordonee[] get(array|string $columns = ['*'])
     * @method Coordonee getModel()
     * @method Coordonee[] getModels(array|string $columns = ['*'])
     * @method _IH_Coordonee_C|Coordonee[] hydrate(array $items)
     * @method Coordonee make(array $attributes = [])
     * @method Coordonee newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Coordonee[]|_IH_Coordonee_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Coordonee[]|_IH_Coordonee_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Coordonee sole(array|string $columns = ['*'])
     * @method Coordonee updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Coordonee_QB extends _BaseBuilder {}
    
    /**
     * @method Ingredient|null getOrPut($key, $value)
     * @method Ingredient|$this shift(int $count = 1)
     * @method Ingredient|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Ingredient|$this pop(int $count = 1)
     * @method Ingredient|null pull($key, \Closure $default = null)
     * @method Ingredient|null last(callable $callback = null, \Closure $default = null)
     * @method Ingredient|$this random(callable|int|null $number = null)
     * @method Ingredient|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Ingredient|null get($key, \Closure $default = null)
     * @method Ingredient|null first(callable $callback = null, \Closure $default = null)
     * @method Ingredient|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Ingredient|null find($key, $default = null)
     * @method Ingredient[] all()
     */
    class _IH_Ingredient_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Ingredient[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Ingredient_QB whereId($value)
     * @method _IH_Ingredient_QB whereNom($value)
     * @method _IH_Ingredient_QB whereCreatedAt($value)
     * @method _IH_Ingredient_QB whereUpdatedAt($value)
     * @method Ingredient baseSole(array|string $columns = ['*'])
     * @method Ingredient create(array $attributes = [])
     * @method _IH_Ingredient_C|Ingredient[] cursor()
     * @method Ingredient|null|_IH_Ingredient_C|Ingredient[] find($id, array|string $columns = ['*'])
     * @method _IH_Ingredient_C|Ingredient[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Ingredient|_IH_Ingredient_C|Ingredient[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Ingredient|_IH_Ingredient_C|Ingredient[] findOrFail($id, array|string $columns = ['*'])
     * @method Ingredient|_IH_Ingredient_C|Ingredient[] findOrNew($id, array|string $columns = ['*'])
     * @method Ingredient first(array|string $columns = ['*'])
     * @method Ingredient firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Ingredient firstOrCreate(array $attributes = [], array $values = [])
     * @method Ingredient firstOrFail(array|string $columns = ['*'])
     * @method Ingredient firstOrNew(array $attributes = [], array $values = [])
     * @method Ingredient firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Ingredient forceCreate(array $attributes)
     * @method _IH_Ingredient_C|Ingredient[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Ingredient_C|Ingredient[] get(array|string $columns = ['*'])
     * @method Ingredient getModel()
     * @method Ingredient[] getModels(array|string $columns = ['*'])
     * @method _IH_Ingredient_C|Ingredient[] hydrate(array $items)
     * @method Ingredient make(array $attributes = [])
     * @method Ingredient newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Ingredient[]|_IH_Ingredient_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Ingredient[]|_IH_Ingredient_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Ingredient sole(array|string $columns = ['*'])
     * @method Ingredient updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Ingredient_QB extends _BaseBuilder {}
    
    /**
     * @method Panier|null getOrPut($key, $value)
     * @method Panier|$this shift(int $count = 1)
     * @method Panier|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Panier|$this pop(int $count = 1)
     * @method Panier|null pull($key, \Closure $default = null)
     * @method Panier|null last(callable $callback = null, \Closure $default = null)
     * @method Panier|$this random(callable|int|null $number = null)
     * @method Panier|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Panier|null get($key, \Closure $default = null)
     * @method Panier|null first(callable $callback = null, \Closure $default = null)
     * @method Panier|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Panier|null find($key, $default = null)
     * @method Panier[] all()
     */
    class _IH_Panier_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Panier[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Panier_QB whereId($value)
     * @method _IH_Panier_QB whereUserId($value)
     * @method _IH_Panier_QB whereCreatedAt($value)
     * @method _IH_Panier_QB whereUpdatedAt($value)
     * @method Panier baseSole(array|string $columns = ['*'])
     * @method Panier create(array $attributes = [])
     * @method _IH_Panier_C|Panier[] cursor()
     * @method Panier|null|_IH_Panier_C|Panier[] find($id, array|string $columns = ['*'])
     * @method _IH_Panier_C|Panier[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Panier|_IH_Panier_C|Panier[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Panier|_IH_Panier_C|Panier[] findOrFail($id, array|string $columns = ['*'])
     * @method Panier|_IH_Panier_C|Panier[] findOrNew($id, array|string $columns = ['*'])
     * @method Panier first(array|string $columns = ['*'])
     * @method Panier firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Panier firstOrCreate(array $attributes = [], array $values = [])
     * @method Panier firstOrFail(array|string $columns = ['*'])
     * @method Panier firstOrNew(array $attributes = [], array $values = [])
     * @method Panier firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Panier forceCreate(array $attributes)
     * @method _IH_Panier_C|Panier[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Panier_C|Panier[] get(array|string $columns = ['*'])
     * @method Panier getModel()
     * @method Panier[] getModels(array|string $columns = ['*'])
     * @method _IH_Panier_C|Panier[] hydrate(array $items)
     * @method Panier make(array $attributes = [])
     * @method Panier newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Panier[]|_IH_Panier_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Panier[]|_IH_Panier_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Panier sole(array|string $columns = ['*'])
     * @method Panier updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Panier_QB extends _BaseBuilder {}
    
    /**
     * @method Produit|null getOrPut($key, $value)
     * @method Produit|$this shift(int $count = 1)
     * @method Produit|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Produit|$this pop(int $count = 1)
     * @method Produit|null pull($key, \Closure $default = null)
     * @method Produit|null last(callable $callback = null, \Closure $default = null)
     * @method Produit|$this random(callable|int|null $number = null)
     * @method Produit|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Produit|null get($key, \Closure $default = null)
     * @method Produit|null first(callable $callback = null, \Closure $default = null)
     * @method Produit|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Produit|null find($key, $default = null)
     * @method Produit[] all()
     */
    class _IH_Produit_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Produit[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Produit_QB whereId($value)
     * @method _IH_Produit_QB whereNom($value)
     * @method _IH_Produit_QB whereDescription($value)
     * @method _IH_Produit_QB wherePrix($value)
     * @method _IH_Produit_QB wherePhotos($value)
     * @method _IH_Produit_QB whereCategoryId($value)
     * @method _IH_Produit_QB whereCreatedAt($value)
     * @method _IH_Produit_QB whereUpdatedAt($value)
     * @method Produit baseSole(array|string $columns = ['*'])
     * @method Produit create(array $attributes = [])
     * @method _IH_Produit_C|Produit[] cursor()
     * @method Produit|null|_IH_Produit_C|Produit[] find($id, array|string $columns = ['*'])
     * @method _IH_Produit_C|Produit[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Produit|_IH_Produit_C|Produit[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Produit|_IH_Produit_C|Produit[] findOrFail($id, array|string $columns = ['*'])
     * @method Produit|_IH_Produit_C|Produit[] findOrNew($id, array|string $columns = ['*'])
     * @method Produit first(array|string $columns = ['*'])
     * @method Produit firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Produit firstOrCreate(array $attributes = [], array $values = [])
     * @method Produit firstOrFail(array|string $columns = ['*'])
     * @method Produit firstOrNew(array $attributes = [], array $values = [])
     * @method Produit firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Produit forceCreate(array $attributes)
     * @method _IH_Produit_C|Produit[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Produit_C|Produit[] get(array|string $columns = ['*'])
     * @method Produit getModel()
     * @method Produit[] getModels(array|string $columns = ['*'])
     * @method _IH_Produit_C|Produit[] hydrate(array $items)
     * @method Produit make(array $attributes = [])
     * @method Produit newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Produit[]|_IH_Produit_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Produit[]|_IH_Produit_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Produit sole(array|string $columns = ['*'])
     * @method Produit updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Produit_QB extends _BaseBuilder {}
    
    /**
     * @method User|null getOrPut($key, $value)
     * @method User|$this shift(int $count = 1)
     * @method User|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method User|$this pop(int $count = 1)
     * @method User|null pull($key, \Closure $default = null)
     * @method User|null last(callable $callback = null, \Closure $default = null)
     * @method User|$this random(callable|int|null $number = null)
     * @method User|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method User|null get($key, \Closure $default = null)
     * @method User|null first(callable $callback = null, \Closure $default = null)
     * @method User|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method User|null find($key, $default = null)
     * @method User[] all()
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @return User[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_User_QB whereId($value)
     * @method _IH_User_QB whereName($value)
     * @method _IH_User_QB whereFirstName($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB whereEmailVerifiedAt($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method User baseSole(array|string $columns = ['*'])
     * @method User create(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User|null|_IH_User_C|User[] find($id, array|string $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User|_IH_User_C|User[] findOrFail($id, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array|string $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array|string $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_User_QB extends _BaseBuilder {}
}