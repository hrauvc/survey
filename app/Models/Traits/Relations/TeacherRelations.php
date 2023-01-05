<?php

namespace App\Models\Traits\Relations;

// use \Znck\Eloquent\Traits\BelongsToThrough; // Docs: https://github.com/staudenmeir/belongs-to-through
// use \Staudenmeir\EloquentHasManyDeep\HasRelationships; // Docs: https://github.com/staudenmeir/eloquent-has-many-deep

trait TeacherRelations
{
	
    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }

    public function classroom()
    {
    	return $this->hasMany('App\Models\Classroom');
    }

}