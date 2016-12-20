<?php
/**
 * Created by PhpStorm.
 * User: Matthew
 * Date: 19/12/2016
 * Time: 19:26
 */

namespace App\Controllers;


use App\Core\Controller;
use App\Core\Database;

class NewController extends Controller
{
    public function save()
    {
        $name = $_POST['name'];
        $isImportant = isset($_POST['isImportant']);
        Database::getInstance()->addTodo($name, $isImportant);
    }

    public function index()
    {

        if (isPost()) {
            $this->save();

            // Redirect to prevent form resubmission.
            header('Location: ' . $_SERVER['REQUEST_URI']);
        }

        $todos = Database::getInstance()->getTodos();

        $this->set('todos', $todos);

    }

    public function resolve()
    {
        $id = $_GET['id'];

        Database::getInstance()->updateTodo($id, [
            'resolved_at' => date('Y-m-d H:i:s')
        ]);

        header('Location: /new');

    }

    public function delete()
    {
        $id = $_GET['id'];

        Database::getInstance()->updateTodo($id, [
            'deleted_at' => date('Y-m-d H:i:s')
        ]);

        header('Location: /new');

    }
}