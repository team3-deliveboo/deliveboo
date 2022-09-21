<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class Slug
{
    public function createSlugUser($name, $id = 0)
    {
        $slug = Str::slug($name);
        $allSlugs = $this->getRelatedSlugsUser($slug, $id);

        if (!$allSlugs->contains('slug', $slug)) {
            return $slug;
        }
        throw new \Exception('Non posso creare questo slug, scegli un altro nome.');
    }

    protected function getRelatedSlugsUser($slug, $id = 0)
    {
        return User::select('slug')->where('slug', 'like', $slug . '%')
            ->where('id', '<>', $id)
            ->get();
    }
}
