<?php
/**
 * Created by PhpStorm.
 * User: Litovkin
 * Date: 7/16/14
 * Time: 11:24 PM
 */

namespace App\Model;

use Nette,
    Nette\Utils\Strings;



class ImageStorage extends Nette\Object
{
    public $dir;

    public function __construct($dir)
    {
        $this->dir = $dir;
    }

    public function save($file, $contents)
    {
        file_put_contents($this->dir . '/' . $file, $contents);
    }
}