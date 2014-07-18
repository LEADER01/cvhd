<?php

namespace App\Presenters;

use Nette,
	App\Model;


/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
    /** @var Nette\Database\Context */
    protected $database;

    /** @var ImageStorage */
    protected $imageStorage;

    public function __construct(Nette\Database\Context $database, Model\ImageStorage $storage)
    {
        $this->database = $database;
        $this->imageStorage = $storage;
    }



}
