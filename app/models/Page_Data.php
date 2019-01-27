<?php

class Page_Data
{

  public $title = "";
  public $content = "";
  public $css = "";
  public $embeddedCss = "";
  public $js = "";

  public function addCss($href)
  {
    $this->css .= "<link href='$href' rel='stylesheet'>";
  }

  public function addJs($src)
  {
    $this->js .= "<script src='$src'></script>";
  }
}
