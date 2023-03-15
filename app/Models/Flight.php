<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Flight extends Model
{
    /**
     * FLIGHT ATTRIBUTES
     * $this->attributes['id'] - int - contains the flight primary key (id)
     * $this->attributes['name'] - string - contains the flight name
     * $this->attributes['type'] - enum - contains the flight type
     * $this->attributes['price'] - int - contains the flight price
    */

    protected $fillable = ['name','type', 'price'];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setId(int $id) : void
    {
        $this->attributes['id'] = $id;
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name) : void
    {
        $this->attributes['name'] = $name;
    }

    public function getType(): string
    {
        return $this->attributes['type'];
    }

    public function setType(string $type) : void
    {
        $this->attributes['type'] = $type;
    }

    public function getPrice(): int
    {
        return $this->attributes['price'];
    }

    public function setPrice(int $price) : void
    {
        $this->attributes['price'] = $price;
    }

    public function getCreatedAt(): string
    {
        return $this->attributes['created_at'];
    }

    public function getUpdatedAt(): string
    {
        return $this->attributes['updated_at'];
    }

      // Validators
    public static function validate(Request $request): void
    {
        $request->validate([
            'name' => 'required|min:3|max:10',
            'type' => 'required',
            'price' => 'required|numeric|gte:1'
        ]);
    }
}
