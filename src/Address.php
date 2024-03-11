<?php

namespace FlyingLuscas\ViaCEP;

class Address
{
    /**
     * Address zip code.
     *
     * @var string
     */
    public $zipCode;

    /**
     * Address street name.
     *
     * @var string
     */
    public $street;

    /**
     * Address complement.
     *
     * @var string|null
     */
    public $complement;

    /**
     * Address neighborhood.
     *
     * @var string
     */
    public $neighborhood;

    /**
     * Address city.
     *
     * @var string
     */
    public $city;

    /**
     * Address state.
     *
     * @var string
     */
    public $state;

    /**
     * Address IBGE code.
     *
     * @var int
     */
    public $ibge;

    /**
     * Creates a new address instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->fill($attributes);
    }

    /**
     * Fill address attributes.
     *
     * @param  array  $attributes
     *
     * @return self
     */
    public function fill(array $attributes)
    {
        if ($attributes) {
            $this->zipCode = $attributes['cep'] ?? null;
            $this->street = $attributes['logradouro'] ?? null;
            $this->complement = $attributes['complemento'] ?? null;
            $this->neighborhood = $attributes['bairro'] ?? null;
            $this->city = $attributes['localidade'] ?? null;
            $this->state = $attributes['uf'] ?? null;
            $this->ibge = $attributes['ibge'] ?? null;
        }

        return $this;
    }

    /**
     * Transform address into a JSON.
     *
     * @return string
     */
    public function toJson()
    {
        return json_encode(get_object_vars($this));
    }

    /**
     * Transform address into an array.
     *
     * @return array
     */
    public function toArray()
    {
        return get_object_vars($this);
    }
}
