<?php

namespace App\Presenters;

use Nette,
    App\Model;


/**
 * Vip presenter.
 */
class VipPresenter extends BasePresenter
{




    public function renderNewGame()
    {

        if (!isset($this->template->modalNewDistribution)) {
            $this->template->modalNewDistribution = "false";
        }
        if (!isset($this->template->success)) {
            $this->template->success = null;
        }
        if (!isset($this->template->newDistOption)) {
            $this->template->newDistOption = "false";
            $this->template->newDistOptionVal = null;
        }

    }

    public function handleUpdateSnippet () {
        $this->template->modalNewDistribution = 'true'; //show code with popup module
        $this->redrawControl("newDistribution");
    }

    public function handleGetLastDistribution () {
        $row = $this->database->table('distributions')->limit(1)->order('id_distribution DESC')->fetch();
        $this->template->newDistOptionVal = $row->id_distribution;
        $this->template->newDistOption = "<option value='".$row->id_distribution."'>".$row->distribution."</option>";
        if ($this->isAjax()) {
            $this->redrawControl('lastDistriutionJS');
        }
    }


    protected function createComponentPostForm()
    {
        $form = new Nette\Application\UI\Form;
        $form->addText('game', 'Název:', 70, 70);
        $form->addTextArea('description', 'Popis:', 50, 15);
        $form->addText('release_in', 'Rok vydání:', 4, 4)
            ->setType('number');
        $form->addSelect('id_distribution', 'Distributor:', $this->getAllDistributions());
        $form->addMultiSelect('games_genres', 'Žánry:', $this->getAllGenres());
        $form->addCheckbox('is_free', ' Zdarma');
        $form->addCheckbox('is_multiplayer', 'Multiplayer');
        $form->addCheckbox('is_on_pc', 'Pro PC')
            ->setDefaultValue(TRUE);
        $form->addCheckbox('is_on_xbox', 'Pro XBOX')
            ->setDefaultValue(TRUE);
        $form->addCheckbox('is_on_ps', 'Pro PlayStation')
            ->setDefaultValue(TRUE);
        $form->addCheckbox('is_on_wii', 'Pro Wii');
        $form->addCheckbox('is_on_others', 'Pro ostatní konzole');

        $form->addUpload('preview_img', 'Obrázek:');

        $form->addSubmit('Add', 'Přidat');
        $form->onSuccess[] = $this->postFormSucceeded;

        return $form;
    }

    public function postFormSucceeded($form)
    {
        $values = $form->getValues();

        $img_name = $values->preview_img->getTemporaryFile(); //get tmp file location
        $image = Nette\Utils\Image::fromFile($img_name); //creating image object from tmp file
        $image->resize(250, null); // resize to 250px on top&bottom side

        $pathToImage = $this->imageStorage->dir."/games_previews/".Nette\Utils\Strings::random(6).".png"; //creating unique image name
        while ($this->database->table('games')->where('preview_img', $pathToImage)->count() > 0) { //checking
            $pathToImage = $this->imageStorage->dir."/games_previews/".Nette\Utils\Strings::random(6).".png";
        }

        $image->save($pathToImage, 100,  Nette\Utils\Image::PNG); //checking
        $values->preview_img   =  $pathToImage; //replacing image by string path to the file

        $genres = $values->games_genres; //get all selected genres
        unset($values->games_genres); //unset it from array of variables
        //all others variable will be used by insert()
        $post = $this->database->table('games')->insert($values);

        foreach ($genres as $genre) {
            $this->database->table('games_genres')->insert(array(
                "id_game" => $post->id_game,
                "id_genre" => $genre
            ));
        } //inserting all genres to the db

        $this->flashMessage("Hra #".$post->id_game." byla pridana do databazi", 'success');

    }

    protected function createComponentAddNewDistributionForm() {
        $form = new Nette\Application\UI\Form;
        $form->addText('distribution', 'Nazev distribuci:')->required;
        $form->addTextArea('description', 'Popis:');
        $form->addSubmit('add', 'Přidat');
        $form->onSuccess[] = array($this, 'addNewDistributionFormSubmitted');
        return $form;
    }

    public function addNewDistributionFormSubmitted($form) {
        $values = $form->getValues();
        $this->database->table('distributions')->insert($values);
        $this->flashMessage("Příspěvek byl úspěšně publikován.", 'success');
        if ($this->isAjax()) {
            $this->template->success = true;
            $this->redrawControl('newDistributionAdded');
        }
        else {
            //TO-DO: create all form non ajax users
        }
    }

    private function getAllDistributions() { //return array for select id_distribution
        $rows = $this->database->table('distributions');
        $distributions = array();
        foreach ($rows as $row) {
            $distributions[$row->id_distribution] = $row->distribution;
        }
        $distributions['new'] = 'Pridat novou';
        return $distributions;
    }

    private function getAllGenres() {
        $rows = $this->database->table('genres');
        $genres = array();
        foreach ($rows as $row) {
            $genres[$row->id_genre] = $row->genre;
        }
        return $genres;
    }

}