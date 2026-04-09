<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pet extends Model
{
    use HasFactory;

    private const IMAGES_BY_KIND = [
        'cat' => ['cat1.jpg', 'cat2.jpg', 'cat3.jpg', 'cat4.jpg', 'cat5.jpg', 'cat6.jpg', 'cat7.jpg'],
        'dog' => ['dog1.jpg', 'dog2.jpg', 'dog3.jpg'],
        'bird' => ['bird1.jpg', 'bird2pigeon.jpg'],
        'pig' => ['pig1.jpg', 'pig3.jpg'],
    ];

    /**
     * Demo/stock image filename for a pet kind, rotating by index.
     */
    public static function pickImagePathForKind(string $kind, int $index): string
    {
        $files = self::IMAGES_BY_KIND[$kind] ?? [];
        if ($files === []) {
            return 'no-image.png';
        }

        return $files[$index % count($files)];
    }

    /**
     * Random demo/stock image filename for a pet kind (factories).
     */
    public static function pickRandomImagePathForKind(string $kind): string
    {
        $files = self::IMAGES_BY_KIND[$kind] ?? [];
        if ($files === []) {
            return 'no-image.png';
        }

        return $files[array_rand($files)];
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'image',
        'kind',
        'weight',
        'age',
        'breed',
        'location',
        'description',
        'active',
        'adopted'
    ];

    //Relationships
    // Pet has one adoption
    public function adoption(){
        return $this->hasOne(Adoption::class);
    }

    public function scopenames($pets, $q)
    {
        if (trim((string) $q)) {
            $pets->where('name', 'LIKE', "%$q%")
                  ->orWhere('breed', 'LIKE', "%$q%");
        }
    }
}
