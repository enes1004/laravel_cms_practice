<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    /**
    * @param string|array $roles
    */
    public function authorizeRoles($roles)
    {
      if (is_array($roles)) {
            return $this->hasAnyRole($roles) ||
             abort(401, 'This action is unauthorized.');
           }
      return $this->hasRole($roles) ||
          abort(401, 'This action is unauthorized.');
    }
    /**
    * Check multiple roles
    * @param array $roles
    */
    public function hasAnyRole($roles)
    {
      return null !== $this->roles()->whereIn('name', $roles)->first();
    }
    /**
    * Check one role
    * @param string $role
    */
    public function hasRole($role)
    {
      return null !== $this->roles()->where('name', $role)->first();
    }

    public function services()
    {
        return $this->belongsToMany(Service::class,"user_has_services");
    }

    public function purchases($service_id){
      $service=$this->services()->where('service_id',$service_id)->first();
      return $this->belongsToMany(Product::class,Purchase::class,'user_id','product_id')->withPivot('status')->withTimestamps();
    }

    public function register_service($service_id){
      $this->services()->attach(Service::where('id',$service_id)->first());
      $this->save();
    }
    public function register_product($ids){
      $service=$this->services()->where('service_id',$ids['service_id'])->first();
      $purchase_conn=$this->purchases($ids['service_id']);
      $product=Product::where('id',$ids['product_id'])->first();
      $purchase_conn->attach($product,['service_id'=>$product->service_id]);
      $this->save();
    }
    public function check_and_do_purchase_updates($service_id){
      $service=$this->services()->where('service_id',$service_id)->first();
      $purchase_class=$service->purchase_class();
      $purchases=$purchase_class::where('user_id',$this->id)->get();
      foreach ($purchases as $purchase) {
        $purchase->check_and_do_updates();
      }
    }

    public function is_registered_to($type,$ids){
      switch ($type) {
        case 'service':
          return null !== $this->services()->where("service_id",$ids['service_id'])->first();
          break;
        case 'product':
          return null !== $this->purchases($ids['service_id'])->where("product_id",$ids['product_id'])->first();
          break;

        default:
          // code...
          break;
      }
    }

}
