<?php
/**
 * @author Rizart Dokollari <r.dokollari@linkwi.se>
 * @since  3/27/17
 */

namespace App;

class Model extends \Illuminate\Database\Eloquent\Model
{
    public function getCacheKey()
    {
        return sprintf("%s/%s-%s",
            get_class($this),
            $this->id,
            $this->updated_at->timestamp
        );
    }
}