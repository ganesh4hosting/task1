<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Symfony extends Controller
{
    /*
    $repositories = $client->api('user')->repositories('Symfony');*/

    public function getRepos()
    {
        $client = new \Github\Client();
        $repositories = $client->api('user')->repositories('Symfony');

        $RepoNameArr = array();

        foreach($repositories as $val)
        {
            $RepoNameArr[] = $val['full_name'];
        }

        return view('welcome', ['repoArr' => $RepoNameArr]);
    }
}
