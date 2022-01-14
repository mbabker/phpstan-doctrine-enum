<?php declare(strict_types=1);

namespace App\Entity;

use App\EventType;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Event
{
    /**
     * @phpstan-var positive-int|null
     */
    #[ORM\Column(nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    private ?int $id = null;

    #[ORM\Column(enumType: EventType::class)]
    public EventType $type;

    public function __construct()
    {
        // TODO - Move these assignments back to the property once https://github.com/doctrine/orm/issues/9371 is fixed
        $this->type = EventType::LIVE;
    }

    /**
     * @phpstan-return positive-int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
}
