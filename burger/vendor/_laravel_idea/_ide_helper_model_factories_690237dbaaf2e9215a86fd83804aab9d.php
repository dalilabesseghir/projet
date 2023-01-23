<?php //b2f259aa496bbc1d8d9258773f0c53bf
/** @noinspection all */

namespace Database\Factories {

    use Illuminate\Database\Eloquent\Factories\Factory;
    
    /**
     * @method $this hasProduits(int $count = 1, $attributes = [])
     */
    class CategoryFactory extends Factory {}
    
    /**
     * @method $this hasProduits(int $count = 1, $attributes = [])
     * @method $this forUser($attributes = [])
     */
    class CommandeFactory extends Factory {}
    
    /**
     * @method $this forUser($attributes = [])
     */
    class CoordoneeFactory extends Factory {}
    
    /**
     * @method $this hasProduits(int $count = 1, $attributes = [])
     */
    class IngredientFactory extends Factory {}
    
    /**
     * @method $this hasProduits(int $count = 1, $attributes = [])
     * @method $this forUser($attributes = [])
     */
    class PanierFactory extends Factory {}
    
    /**
     * @method $this forCategory($attributes = [])
     * @method $this hasCommandes(int $count = 1, $attributes = [])
     * @method $this hasIngredients(int $count = 1, $attributes = [])
     * @method $this hasPaniers(int $count = 1, $attributes = [])
     */
    class ProduitFactory extends Factory {}
    
    /**
     * @method $this hasCommandes(int $count = 1, $attributes = [])
     * @method $this forCoordonee($attributes = [])
     * @method $this hasNotifications(int $count = 1, $attributes = [])
     * @method $this forPanier($attributes = [])
     * @method $this hasReadNotifications(int $count = 1, $attributes = [])
     * @method $this hasUnreadNotifications(int $count = 1, $attributes = [])
     */
    class UserFactory extends Factory {}
}