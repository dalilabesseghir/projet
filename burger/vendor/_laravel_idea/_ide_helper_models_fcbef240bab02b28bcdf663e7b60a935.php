<?php //d9a3b8163754b992672c28ec13bc8714
/** @noinspection all */

namespace App\Models {

    use Database\Factories\CategoryFactory;
    use Database\Factories\CommandeFactory;
    use Database\Factories\CoordoneeFactory;
    use Database\Factories\IngredientFactory;
    use Database\Factories\PanierFactory;
    use Database\Factories\ProduitFactory;
    use Database\Factories\UserFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Models\_IH_Category_C;
    use LaravelIdea\Helper\App\Models\_IH_Category_QB;
    use LaravelIdea\Helper\App\Models\_IH_Commande_C;
    use LaravelIdea\Helper\App\Models\_IH_Commande_QB;
    use LaravelIdea\Helper\App\Models\_IH_Coordonee_C;
    use LaravelIdea\Helper\App\Models\_IH_Coordonee_QB;
    use LaravelIdea\Helper\App\Models\_IH_Ingredient_C;
    use LaravelIdea\Helper\App\Models\_IH_Ingredient_QB;
    use LaravelIdea\Helper\App\Models\_IH_Panier_C;
    use LaravelIdea\Helper\App\Models\_IH_Panier_QB;
    use LaravelIdea\Helper\App\Models\_IH_Produit_C;
    use LaravelIdea\Helper\App\Models\_IH_Produit_QB;
    use LaravelIdea\Helper\App\Models\_IH_User_C;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_C;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    
    /**
     * @property int $id
     * @property string $designation
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Produit_C|Produit[] $produits
     * @property-read int $produits_count
     * @method HasMany|_IH_Produit_QB produits()
     * @method static _IH_Category_QB onWriteConnection()
     * @method _IH_Category_QB newQuery()
     * @method static _IH_Category_QB on(null|string $connection = null)
     * @method static _IH_Category_QB query()
     * @method static _IH_Category_QB with(array|string $relations)
     * @method _IH_Category_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Category_C|Category[] all()
     * @foreignLinks id,\App\Models\Produit,category_id
     * @mixin _IH_Category_QB
     * @method static CategoryFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Category extends Model {}
    
    /**
     * @property int $id
     * @property string|null $reference
     * @property int $user_id
     * @property Carbon|null $date
     * @property string|null $etat
     * @property float|null $prix
     * @property string|null $extraInfo
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Produit_C|Produit[] $produits
     * @property-read int $produits_count
     * @method BelongsToMany|_IH_Produit_QB produits()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Commande_QB onWriteConnection()
     * @method _IH_Commande_QB newQuery()
     * @method static _IH_Commande_QB on(null|string $connection = null)
     * @method static _IH_Commande_QB query()
     * @method static _IH_Commande_QB with(array|string $relations)
     * @method _IH_Commande_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Commande_C|Commande[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @foreignLinks 
     * @mixin _IH_Commande_QB
     * @method static CommandeFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Commande extends Model {}
    
    /**
     * @property int $id
     * @property string $adresse
     * @property string $ville
     * @property string $code_zip
     * @property string $pays
     * @property string $num_tel
     * @property Carbon $date_naissance
     * @property int $user_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Coordonee_QB onWriteConnection()
     * @method _IH_Coordonee_QB newQuery()
     * @method static _IH_Coordonee_QB on(null|string $connection = null)
     * @method static _IH_Coordonee_QB query()
     * @method static _IH_Coordonee_QB with(array|string $relations)
     * @method _IH_Coordonee_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Coordonee_C|Coordonee[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @mixin _IH_Coordonee_QB
     * @method static CoordoneeFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Coordonee extends Model {}
    
    /**
     * @property int $id
     * @property string $nom
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Produit_C|Produit[] $produits
     * @property-read int $produits_count
     * @method BelongsToMany|_IH_Produit_QB produits()
     * @method static _IH_Ingredient_QB onWriteConnection()
     * @method _IH_Ingredient_QB newQuery()
     * @method static _IH_Ingredient_QB on(null|string $connection = null)
     * @method static _IH_Ingredient_QB query()
     * @method static _IH_Ingredient_QB with(array|string $relations)
     * @method _IH_Ingredient_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Ingredient_C|Ingredient[] all()
     * @foreignLinks 
     * @mixin _IH_Ingredient_QB
     * @method static IngredientFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Ingredient extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Produit_C|Produit[] $produits
     * @property-read int $produits_count
     * @method BelongsToMany|_IH_Produit_QB produits()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Panier_QB onWriteConnection()
     * @method _IH_Panier_QB newQuery()
     * @method static _IH_Panier_QB on(null|string $connection = null)
     * @method static _IH_Panier_QB query()
     * @method static _IH_Panier_QB with(array|string $relations)
     * @method _IH_Panier_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Panier_C|Panier[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @foreignLinks 
     * @mixin _IH_Panier_QB
     * @method static PanierFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Panier extends Model {}
    
    /**
     * @property int $id
     * @property string|null $nom
     * @property string $description
     * @property float|null $prix
     * @property string $photos
     * @property int $category_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Category $category
     * @method BelongsTo|_IH_Category_QB category()
     * @property _IH_Commande_C|Commande[] $commandes
     * @property-read int $commandes_count
     * @method BelongsToMany|_IH_Commande_QB commandes()
     * @property _IH_Ingredient_C|Ingredient[] $ingredients
     * @property-read int $ingredients_count
     * @method BelongsToMany|_IH_Ingredient_QB ingredients()
     * @property _IH_Panier_C|Panier[] $paniers
     * @property-read int $paniers_count
     * @method BelongsToMany|_IH_Panier_QB paniers()
     * @method static _IH_Produit_QB onWriteConnection()
     * @method _IH_Produit_QB newQuery()
     * @method static _IH_Produit_QB on(null|string $connection = null)
     * @method static _IH_Produit_QB query()
     * @method static _IH_Produit_QB with(array|string $relations)
     * @method _IH_Produit_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Produit_C|Produit[] all()
     * @ownLinks category_id,\App\Models\Category,id
     * @foreignLinks 
     * @mixin _IH_Produit_QB
     * @method static ProduitFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Produit extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property string $first_name
     * @property string $email
     * @property Carbon|null $email_verified_at
     * @property string $password
     * @property string|null $remember_token
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Commande_C|Commande[] $commandes
     * @property-read int $commandes_count
     * @method HasMany|_IH_Commande_QB commandes()
     * @property Coordonee $coordonee
     * @method HasOne|_IH_Coordonee_QB coordonee()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property Panier $panier
     * @method HasOne|_IH_Panier_QB panier()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property _IH_DatabaseNotification_C|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_User_C|User[] all()
     * @foreignLinks id,\App\Models\Coordonee,user_id|id,\App\Models\Panier,user_id|id,\App\Models\Commande,user_id
     * @mixin _IH_User_QB
     * @method static UserFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class User extends Model {}
}