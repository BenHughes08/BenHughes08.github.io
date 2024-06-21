<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


class Articles 
{


    static function find($id) {

        foreach (Articles::get() as $currentArticle => $article) {
            if ($article['id'] === $id) {
                return $article;
            }
        }
        
        return null;
    }

    static function get() : array {
        return [
            [
                'image' => 'https://mdbcdn.b-cdn.net/img/new/standard/nature/051.jpg',
                'title' => 'I miss the sun',
                'date' => '13.01.2022',
                'author' => 'Anna Maria Doe',
                'id' => '1',
            ],
            [
                'image' => 'https://mdbcdn.b-cdn.net/img/new/standard/nature/044.jpg',
                'title' => 'Adventure in the desert',
                'date' => '12.01.202',
                'author' => 'by Mark Equel',
                'id' => '2',
            ],
            [
                'image' => 'https://mdbcdn.b-cdn.net/img/new/standard/nature/045.jpg',
                'title' => 'Lonely mountain',
                'date' => '10.01.2022',
                'author' => 'Bilbo baggins',
                'id' => '3',
            ],
            [
                'image' => 'https://mdbcdn.b-cdn.net/img/new/standard/nature/047.jpg',
                'title' => 'Lets go!',
                'date' => '09.01.2022',
                'author' => 'Halley Frank',
                'id' => '4',
            ],  
            [
                'image' => 'https://mdbcdn.b-cdn.net/img/new/standard/nature/028.jpg',
                'title' => 'A hut in the mountains',
                'date' => '07.01.2022',
                'author' => 'David Beak',
                'id' => '5',
            ],
            [
                'image' => 'https://mdbcdn.b-cdn.net/img/new/standard/nature/049.jpg',
                'title' => 'Beautiful waterfall',
                'date' => '04.01.2022',
                'author' => 'Joe Svan',
                'id' => '6',
            ],
        ];
        
    }

}


class Staff
{

    static function find($id) {

        foreach (Staff::get() as $currentStaff => $team) {
            if ($team['id'] === $id) {
                return $team;
            }
        }
        
        return null;
    }

    static function get() : array {
        return [
            [
                'picture' => 'https://mdbcdn.b-cdn.net/img/new/avatars/2.jpg',
                'name' => 'John Doe',
                'id' => '1',
                'job' => 'Co-founder',
            ],
            [
                'picture' => 'https://mdbcdn.b-cdn.net/img/new/avatars/5.jpg',
                'name' => 'Lisa Ferrol',
                'id' => '2',
                'job' => 'Web designer',
            ],
            [
                'picture' => 'https://mdbcdn.b-cdn.net/img/new/avatars/6.jpg',
                'name' => 'Maria Smith',
                'id' => '3',
                'job' => 'Senior consultant',
            ],
            [
                'picture' => 'https://mdbcdn.b-cdn.net/img/new/avatars/7.jpg',
                'name' => 'Agatha Bevos',
                'id' => '4',
                'job' => 'Co-founder',
            ],
            [
                'picture' => 'https://mdbcdn.b-cdn.net/img/new/avatars/8.jpg',
                'name' => 'Darren Randolph',
                'id' => '5',
                'job' => 'Marketing expert',
            ],
            [
                'picture' => 'https://mdbcdn.b-cdn.net/img/new/avatars/9.jpg',
                'name' => 'Soraya Letto',
                'id' => '6',
                'job' => 'SEO expert',
            ],
            [
                'picture' => 'https://mdbcdn.b-cdn.net/img/new/avatars/10.jpg',
                'name' => 'Maliha Welch',
                'id' => '7',
                'job' => 'Web designer',
            ],
            [
                'picture' => 'https://mdbcdn.b-cdn.net/img/new/avatars/11.jpg',
                'name' => 'Zeynep Dudley',
                'id' => '8',
                'job' => 'Web developer',
            ],
            [
                'picture' => 'https://mdbcdn.b-cdn.net/img/new/avatars/12.jpg',
                'name' => 'Avaya Hills',
                'id' => '9',
                'job' => 'Copywritter',
            ],
            [
                'picture' => 'https://mdbcdn.b-cdn.net/img/new/avatars/13.jpg',
                'name' => 'Thierry Fischer',
                'id' => '10',
                'job' => 'Senior consultant',
            ],
            [
                'picture' => 'https://mdbcdn.b-cdn.net/img/new/avatars/14.jpg',
                'name' => 'Aisling Sheldon',
                'id' => '11',
                'job' => 'Senior developer',
            ],
            [
                'picture' => 'https://mdbcdn.b-cdn.net/img/new/avatars/15.jpg',
                'name' => 'Ayat Black',
                'id' => '12',
                'job' => 'Web designer',
            ],
        ]; 
    }
}




Route::get('/', function () {
    return view('welcome');
});

Route::get('/task1', function () {
    return view('task1');
});

Route::get('/task2', function () {
    return view('task2');
});

Route::get('/blog/{id}', function ($id) {
    $result = Articles::find($id);
    return view('post' ,[
        'article' => $result
    ]);
});

Route::get('/staff/{id}', function ($id) {
    $result = Staff::find($id);
    return view('members' ,[
        'team' => $result
    ]);
});

Route::get('/blog', function () {
    return response()->view('blog', [
        'articles' => Articles::get(),
        'teams' => Staff::get()
    ]);
});


Route::get('/task4', function () {
    return view('task4');
});

Route::get('/task4b', function () {
    return view('task4b');
});

