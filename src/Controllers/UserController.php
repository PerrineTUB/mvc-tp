<?php

namespace Guirod\MvcTp\Controllers;

use Guirod\MvcTp\Controller;
use Guirod\MvcTp\Models\User;

class UserController extends Controller {
    public function index() {
        $this->render('user/index', ['users' => User::findAll()]);
    }

    public function view(array $params) {
        $user = User::findById((int)$params['id']);

        $this->render(
            'user/view',
            [
                'user' => $user,
                'citation' => [
                    'quote' => "Lorsqu'une porte du bonheur se ferme, une autre s'ouvre ; mais parfois on observe si longtemps celle qui est fermée qu'on ne voit pas celle qui vient de s'ouvrir à nous.",
                    'author' => 'Helen Keller'
                ],
            ]
        );
    }

    public function add() {
        $isSubmit = isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['adresse']) && isset($_POST['psd']);

        if ($isSubmit) {
            $user = new User();
            $user->nom = htmlspecialchars($_POST['nom']);
            $user->prenom =  htmlspecialchars($_POST['prenom']);
            $user->email = htmlspecialchars($_POST['email']);
            $user->adresse = htmlspecialchars($_POST['adresse']);
            $user->passwordHash = password_hash(htmlspecialchars($_POST['psd']), PASSWORD_DEFAULT);

            $user->save();

            $this->view(['id' => $user->id]);
        } else {
            $this->render('user/add');
        }
    }

    public function deleteUser($id) {
        $isSubmit = isset($_POST['id']);

        if ($isSubmit) {
            $user = User::findById((int)$id['id']);
            $user->deleteUser($user->id);
            $this->index();
        }
    }

    public function change() {
    }

    public function viewAllAjax() {
        $this->renderJson(User::findAll());
    }
}
