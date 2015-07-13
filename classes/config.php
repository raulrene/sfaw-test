<?php

class Configurare{
    private $id, $site_logo,$site_background,$site_font_fam, $site_font_size;

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $site_background
     */
    public function setSiteBackground($site_background)
    {
        $this->site_background = $site_background;
    }

    /**
     * @return mixed
     */
    public function getSiteBackground()
    {
        return $this->site_background;
    }

    /**
     * @param mixed $site_font_fam
     */
    public function setSiteFontFam($site_font_fam)
    {
        $this->site_font_fam = $site_font_fam;
    }

    /**
     * @return mixed
     */
    public function getSiteFontFam()
    {
        return $this->site_font_fam;
    }

    /**
     * @param mixed $site_font_size
     */
    public function setSiteFontSize($site_font_size)
    {
        $this->site_font_size = $site_font_size;
    }

    /**
     * @return mixed
     */
    public function getSiteFontSize()
    {
        return $this->site_font_size;
    }

    /**
     * @param mixed $site_logo
     */
    public function setSiteLogo($site_logo)
    {
        $this->site_logo = $site_logo;
    }

    /**
     * @return mixed
     */
    public function getSiteLogo()
    {
        return $this->site_logo;
    }


}


?>