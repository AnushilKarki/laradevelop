<?php

namespace App\Policies;

use App\Shop;
use App\Order;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrderPolicy
{
    use HandlesAuthorization;


    //policy filter so admin can be authorized for all action
    public function before($user,$ability)
    {
        if($user->hasRole('admin'))
        {
            return true;
        }
    }
//let the seller view Shop
    public function browse(User $user)
    {
        return $user->hasRole('Seller');
    }
//let only exact seller to read 

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Shop  $shop
     * @return mixed
     */
    public function read(User $user,Order $order,Shop $shop) 
    { 
        if($shop->user_id == $user->id)
        {
        foreach ($order->shop as $shops) {
            if($shops->shop_id == auth()->user()->shop->id){
            return true;
            }
        }}
        return false;

    }
    
    public function edit(User $user, Order $order,Shop $shop)
    {
        
        if($shop->user_id == $user->id)
        {
        foreach ($order->shop as $shops) {
            if($shops->shop_id == auth()->user()->shop->id){
            return true;
            }
        }}
        return false;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
       
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Shop  $shop
     * @return mixed
     */
    public function update(User $user,Order $order,Shop $shop)
    {
       
        if($shop->user_id == $user->id)
        {
        foreach ($order->shop as $shops) {
            if($shops->shop_id == auth()->user()->shop->id){
            return true;
            }
        }}
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Shop  $shop
     * @return mixed
     */
    public function delete(User $user,Order $order,Shop $shop)
    {
        
        

        if($shop->user_id == $user->id)
        {
        foreach ($order->shop as $shops) {
            if($shops->shop_id == auth()->user()->shop->id){
            return true;
            }
        }}
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Shop  $shop
     * @return mixed
     */
    public function restore(User $user, Shop $shop)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Shop  $shop
     * @return mixed
     */
    public function forceDelete(User $user, Shop $shop)
    {
        //
    }
}
