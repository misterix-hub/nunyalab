<?php


namespace App\NunyaLab\POJO;


class Partenaire
{
    protected int $id;
    protected string $logo;
    protected string $siteWeb;

    public function __construct(int $id, string $logo, string $siteWeb='')
    {
        $this->id = $id;
        $this->logo = $logo;
        $this->siteWeb = $siteWeb;
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
    public function getLogo(): string
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     */
    public function setLogo(string $logo): void
    {
        $this->logo = $logo;
    }

    /**
     * @return string
     */
    public function getSiteWeb(): string
    {
        return $this->siteWeb;
    }

    /**
     * @param string $siteWeb
     */
    public function setSiteWeb(string $siteWeb): void
    {
        $this->siteWeb = $siteWeb;
    }
}
