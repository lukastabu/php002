<?php

namespace Ganykla\Controllers;

use Ganykla\App;
use App\DB\JsonDb;


class HomeController
{

    public function index()
    {
        return App::view('home', ['title' => 'Ganykla']);
    }

    public function list()
    {
        // $users = JsonDb::get()->showAll();
        $db = new JsonDb('gyvunai');
        $users = $db->showAll();
        // echo '<pre>';
        // print_r($users);
        return App::view('list', ['title' => 'Ganykla', 'users' => $users]);
    }

    public function keep()
    {
        $unit = [];
        $unit = [
            'animals' => ($_POST['animals'] ?? 0),
            'svoris' => ($_POST['svoris'] ?? 0)
        ];
        JsonDb::get()->create($unit);
        return App::redirect('list');
    }

    public function deleteUnit(string $id)
    {
        JsonDb::get()->delete($id);
        return App::redirect('list');
    }
    public function toAdd(string $id)
    {
        $users = JsonDb::get()->show($id);
        return App::view('edit', ['title' => 'Ganykla', 'users' => $users]);
    }
    public function add(string $id)
    {
        if ($_POST['add'] <=0 ) {
            return App::redirect("edit/$id");
        }
        $duomenys = JsonDb::get()->show($id);
        $duomenys['svoris'] = $_POST['add'];
        JsonDb::get()->update($id, $duomenys);
        return App::redirect('list');
    }
}