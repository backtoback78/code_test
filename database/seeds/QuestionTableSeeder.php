<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('questions')->insert([  
        
        [
         	'title' => 'Prise de bec',
         		'abstract' => 'Montrez ce que vous valez sur MySQL',
                'content' => 'Quelle est la couleur du manteau blanc de Poupi le clown ?',             
          
         ],


         [     
         		'title' => 'Gazole ou Essence',
         		'abstract' => 'Testez vos compétences sur PHP',
         		'content' => "Bob l'eponge a combien de trou dans son corps ?",            

         ],


         [
         		'title' => 'Jean Galfione',
         		'abstract' => 'Testez vos compétences sur PHP',
         		'content' => "Mamadou est il  bien rentré à la maison hier soir ?",             
          
         ],


         [

         		'title' => 'Ordure ménagère',
         		'abstract' => 'Montrez ce que vous valez sur MySQL',
         		'content' => 'Ou est le balais de Madame Doubtfire ?',
         ],
         
       ]);
   
	}


}