<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;

class PostPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function update(User $user, Post $post): bool
    {
        //
        return $user->id === $post->user_id;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function delate(User $user, Post $post): bool
    {
        //
        return $user->id === $post->user_id;
    }
}
