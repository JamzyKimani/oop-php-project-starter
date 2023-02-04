<?php
namespace App\Controllers;

use Medoo\Medoo;

class DefaultController
{
	public function home(): string
	{
		$db = container(Medoo::class);
        $user =  $db->select("test", '*',[
            "first_name" => 'james' 
        ]);

		$msg = 'This is the landing page';
		return view('default', compact('msg', 'user'));
	}

	public function contact(): string
	{
        return 'DefaultController -> contact';
	}

	public function companies($id = null): string
	{
        return 'DefaultController -> companies -> id: ' . $id;
	}

    public function notFound(): string
    {
        return 'Page not found';
    }

    public function fatalError(): String
    {
    	return 'Fatal Error, contact system support.';
    }

}