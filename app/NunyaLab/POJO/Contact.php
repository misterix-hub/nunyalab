<?php


namespace App\NunyaLab\POJO;


class Contact
{
    protected int $id;
    protected string $icone;
    protected string $label;
    protected string $contact;

    public function __construct(int $id, string $label, string $contact, string $icone='')
    {
        $this->id = $id;
        $this->icone = $icone;
        $this->label = $label;
        $this->contact = $contact;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getIcone(): string
    {
        return $this->icone;
    }

    /**
     * @param string $icone
     */
    public function setIcone(string $icone): void
    {
        $this->icone = $icone;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getContact(): string
    {
        return $this->contact;
    }

    /**
     * @param string $contact
     */
    public function setContact(string $contact): void
    {
        $this->contact = $contact;
    }
}
