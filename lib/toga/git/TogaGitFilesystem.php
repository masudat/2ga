<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TogaGitFilesystem
 *
 * @author hy
 */
class TogaGitFilesystem extends TogaFilesystem
{
  //Under construction :-}
  public function gitAdd()
  {
    //$res = exec("git add ,'$path'");
    $res = exec("git add .");
    return $res."\n";
  }
}

