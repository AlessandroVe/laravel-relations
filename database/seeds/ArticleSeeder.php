<?php

use Illuminate\Database\Seeder;

use App\Author;
use App\Article;

use Faker\Generator as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //popoliamo la tabella Authors

        $listFakeName=[
            'Tiziano',
            'Alessandro',
            'Andrea',
            'Fabiana',
            'Renzo',
            'Benedetta'
        ];

        $listOfAuthorID=[];

        foreach($listFakeName as $name){
            $newAuthor = new Author();
            $newAuthor->name = $name;
            $newAuthor->surname = $faker->words(1,true);
            $newAuthor->description_author = $faker->paragraph(3);
            $newAuthor->save();
            $listOfAuthorID[] = $newAuthor->id;
        }

        // popolare la tabella Articles

        for($i=0;$i<25;$i++){

            $newArticle = new Article();
            $newArticle->title = $faker->sentence();
            $newArticle->description = $faker->paragraph(6);
            $newArticle->image = $faker->imageUrl( 360, 360, 'animals', true);

            $randomKey = array_rand($listOfAuthorID,1);
            $randomAuthor = $listOfAuthorID[$randomKey];
            $newArticle->author_id = $randomAuthor;
            
            $newArticle->save();


        }












    }
}
