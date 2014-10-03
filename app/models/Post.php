<?php

class Post extends Eloquent {

    /**
     * The relationship to get the post author
     */
    public function author()
    {
        return $this-belongsTo('User', 'author_id');
    }

}
