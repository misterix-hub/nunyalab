<?php


namespace App\NunyaLab\POJO;


class Gallerie
{
    protected int $id;
    protected string $fichier;
    protected string $description;
    protected string $typeFichier;

    public function __construct(int $id, string $fichier, $typeFichier, $description='')
    {
        $this->id = $id;
        $this->fichier = $fichier;
        $this->typeFichier = $typeFichier;
        $this->description = $description;
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
    public function getFichier(): string
    {
        return $this->fichier;
    }

    /**
     * @param string $fichier
     */
    public function setFichier(string $fichier): void
    {
        $this->fichier = $fichier;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getTypeFichier(): string
    {
        return $this->typeFichier;
    }

    /**
     * @param string $typeFichier
     */
    public function setTypeFichier(string $typeFichier): void
    {
        $this->typeFichier = $typeFichier;
    }
}
