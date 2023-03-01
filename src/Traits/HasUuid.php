<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Concerns\HasUuids;

trait HasUuid
{
    use HasUuids;

    // https://gist.github.com/bolechen/ca98c08ba8574d93954bdcc3e9006e3f?permalink_comment_id=2972403

    public function uniqueIds(): array
    {
        return ['uuid'];
    }

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public static function findByUuid($uuid)
    {
        return self::where('uuid', $uuid)->first();
    }

    public static function findByUuidOrFail($uuid)
    {
        return self::where('uuid', $uuid)->sole();
    }

    public function scopeWithUuid($query, $uuid)
    {
        return $query->where('uuid', $uuid);
    }

    public function scopeWithUuids($query, array $uuids)
    {
        return $query->whereIn('uuid', $uuids);
    }
}
