<?php

namespace MamadouAlySy;

class Bag implements BagInterface
{
    /**
     * @var array<mixed>
     */
    protected array $items;

    /**
     * @param array<mixed> $items
     */
    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    /**
     * @inheritDoc
     */
    public function all(): array
    {
        return $this->items;
    }

    /**
     * @inheritDoc
     */
    public function add(string $key, mixed $value): void
    {
        $this->items[$key] = $value;
    }

    /**
     * @inheritDoc
     */
    public function contains(string $key): bool
    {
        return array_key_exists($key, $this->items);
    }

    /**
     * @inheritDoc
     */
    public function get(string $key, mixed $default = null): mixed
    {
        return $this->contains($key) ? $this->items[$key] : $default;
    }

    /**
     * @inheritDoc
     */
    public function remove(string $key): void
    {
        unset($this->items[$key]);
    }

    /**
     * @inheritDoc
     */
    public function count(): int
    {
        return count($this->items);
    }

    /**
     * @inheritDoc
     */
    public function clear(): void
    {
        $this->items = [];
    }
}
