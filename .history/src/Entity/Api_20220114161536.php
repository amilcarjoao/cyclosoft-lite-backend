<?php

namespace App\Entity;

use App\Repository\ApiRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ApiRepository::class)
 */
class Api
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $signal_COURANT_inds01;

    /**
     * @ORM\Column(type="integer")
     */
    private $signal_COURANT_inds02;

    /**
     * @ORM\Column(type="integer")
     */
    private $signal_TEMPERAT_inds01;

    /**
     * @ORM\Column(type="integer")
     */
    private $signal_TEMPERAT_inds02;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSignalCOURANTInds01(): ?int
    {
        return $this->signal_COURANT_inds01;
    }

    public function setSignalCOURANTInds01(int $signal_COURANT_inds01): self
    {
        $this->signal_COURANT_inds01 = $signal_COURANT_inds01;

        return $this;
    }

    public function getSignalCOURANTInds02(): ?int
    {
        return $this->signal_COURANT_inds02;
    }

    public function setSignalCOURANTInds02(int $signal_COURANT_inds02): self
    {
        $this->signal_COURANT_inds02 = $signal_COURANT_inds02;

        return $this;
    }

    public function getSignalTEMPERATInds01(): ?int
    {
        return $this->signal_TEMPERAT_inds01;
    }

    public function setSignalTEMPERATInds01(int $signal_TEMPERAT_inds01): self
    {
        $this->signal_TEMPERAT_inds01 = $signal_TEMPERAT_inds01;

        return $this;
    }

    public function getSignalTEMPERATInds02(): ?int
    {
        return $this->signal_TEMPERAT_inds02;
    }

    public function setSignalTEMPERATInds02(int $signal_TEMPERAT_inds02): self
    {
        $this->signal_TEMPERAT_inds02 = $signal_TEMPERAT_inds02;

        return $this;
    }
    public
}
