<?php
namespace  App\Traits;

trait Categorizable {

    public function categories() {
        return $this->morphToMany(Category::class, 'categorizable' );
    }

}