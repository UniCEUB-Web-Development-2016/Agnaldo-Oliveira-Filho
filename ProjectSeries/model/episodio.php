<?php

class episodio
{
    private $idt_episodio;
    private $cod_temporada;
    private $cod_diretor;
    private $nme_episodio;
    private $duracao;
    private $dta_lancamento;
    private $sinopse;
    private $link_trailer;

    public function __construct($idt_episodio, $cod_temporada, $cod_diretor, $nme_episodio, $duracao, $dta_lancamento, $sinopse, $link_trailer)
    {
        $this->idt_episodio = $idt_episodio;
        $this->cod_temporada = $cod_temporada;
        $this->cod_diretor = $cod_diretor;
        $this->nme_episodio = $nme_episodio;
        $this->duracao = $duracao;
        $this->dta_lancamento = $dta_lancamento;
        $this->sinopse = $sinopse;
        $this->link_trailer = $link_trailer;
    }

    public function getIdtEpisodio()
    {
        return $this->idt_episodio;
    }

    public function setIdtEpisodio($idt_episodio)
    {
        $this->idt_episodio = $idt_episodio;
    }

    public function getCodTemporada()
    {
        return $this->cod_temporada;
    }

    public function setCodTemporada($cod_temporada)
    {
        $this->cod_temporada = $cod_temporada;
    }

    public function getCodDiretor()
    {
        return $this->cod_diretor;
    }

    public function setCodDiretor($cod_diretor)
    {
        $this->cod_diretor = $cod_diretor;
    }

    public function getNmeEpisodio()
    {
        return $this->nme_episodio;
    }

    public function setNmeEpisodio($nme_episodio)
    {
        $this->nme_episodio = $nme_episodio;
    }

    public function getDuracao()
    {
        return $this->duracao;
    }

    public function setDuracao($duracao)
    {
        $this->duracao = $duracao;
    }

    public function getDtaLancamento()
    {
        return $this->dta_lancamento;
    }

    public function setDtaLancamento($dta_lancamento)
    {
        $this->dta_lancamento = $dta_lancamento;
    }

    public function getSinopse()
    {
        return $this->sinopse;
    }

    public function setSinopse($sinopse)
    {
        $this->sinopse = $sinopse;
    }

    public function getLinkTrailer()
    {
        return $this->link_trailer;
    }

    public function setLinkTrailer($link_trailer)
    {
        $this->link_trailer = $link_trailer;
    }




}

