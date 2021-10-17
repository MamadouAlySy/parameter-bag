<?php

declare (strict_types = 1);

namespace MamadouAlySy;

class ParameterBag
{
    protected array $items;

    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    public function all(): array
    {
        return $this->items;
    }

    public function add(string $key, mixed $value): void
    {
        $this->items[$key] = $value;
    }

    public function contains(string $key): bool
    {
        return array_key_exists($key, $this->items);
    }

    public function get(string $key, mixed $default = null): mixed
    {
        return $this->contains($key) ? $this->items[$key] : $default;
    }

    public function remove(string $key): void
    {
        unset($this->items[$key]);
    }

    public function flush(string $key): mixed
    {
        $value = $this->get($key);
        $this->remove($key);

        return $value;
    }

    public function getCount(): int
    {
        return count($this->items);
    }
}
