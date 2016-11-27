<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use quizzes\QuizQuestion;
use quizzes\QuizQuestionChoice;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder {

    public function run()
    {
        DB::table('quiz_questions')->delete();
        DB::table('quiz_question_choices')->delete();


            // QUESTION 1
            $question = QuizQuestion::create([
                'question' => 'Koliko imate godina?',
                'category' => 'pop',
            ]);
            QuizQuestionChoice::create([
                'quiz_question_id' => $question->id,
                'choice' => 'Iznad 60',
                'points' => -100,
            ]);
            QuizQuestionChoice::create([
                'quiz_question_id' => $question->id,
                'choice' => 'Između 18 i 60',
                'points' => 0,
            ]);
            QuizQuestionChoice::create([
                'quiz_question_id' => $question->id,
                'choice' => 'Manje od 18 godina',
                'points' => -100,
            ]);
            // QUESTION 2
            $question = QuizQuestion::create([
                'question' => 'Kolika je vaša tjelesna težina?',
                'category' => 'pop',
            ]);
            QuizQuestionChoice::create([
                'quiz_question_id' => $question->id,
                'choice' => 'Iznad 55kg',
                'points' => 0,
            ]);
            QuizQuestionChoice::create([
                'quiz_question_id' => $question->id,
                'choice' => 'Ispod 55kg',
                'points' => -100,
            ]);
            // QUESTION 3
            $question = QuizQuestion::create([
                'question' => 'Kada ste zadnji put darivali krv?',
                'category' => 'pop',
            ]);
            QuizQuestionChoice::create([
                'quiz_question_id' => $question->id,
                'choice' => 'Nisam nikad darivao/la krv',
                'points' => 0,
            ]);
            QuizQuestionChoice::create([
                'quiz_question_id' => $question->id,
                'choice' => 'Muško sam, i darivao sam krv prije više od 3 mjeseca',
                'points' => 0,
            ]);
            QuizQuestionChoice::create([
                'quiz_question_id' => $question->id,
                'choice' => 'Muško sam, i darivao sam krv prije manje od 3 mjeseca',
                'points' => -100,
            ]);
            QuizQuestionChoice::create([
                'quiz_question_id' => $question->id,
                'choice' => 'Žensko sam, i darivala sam krv prije više od 4 mjeseca',
                'points' => 0,
            ]);
            QuizQuestionChoice::create([
                'quiz_question_id' => $question->id,
                'choice' => 'Žensko sam, i darivala sam krv prije manje od 4 mjeseca',
                'points' => -100,
            ]);
            // QUESTION 4
            $question = QuizQuestion::create([
                'question' => 'Jeste li trenutno bolesni, ili pak uzimate lijekove?',
                'category' => 'pop',
            ]);
            QuizQuestionChoice::create([
                'quiz_question_id' => $question->id,
                'choice' => 'Nisam bolestan/na i ne uzimam lijekove',
                'points' => 0,
            ]);
            QuizQuestionChoice::create([
                'quiz_question_id' => $question->id,
                'choice' => 'Bolestan/sna sam i/ili uzimam lijekove.',
                'points' => -100,
            ]);
            // QUESTION 5
            $question = QuizQuestion::create([
                'question' => 'Bolujete li od teških kroničnih bolesti (dišnog ili probavnog sustava, bolesti srca i krvnih žila, zloćudnih bolesti, bolesti jetre, AIDS-a, šećerne bolesti, živčanih i duševnih bolesti)?',
                 'category' => 'pop',
            ]);
            QuizQuestionChoice::create([
                'quiz_question_id' => $question->id,
                'choice' => 'Ne bolujem od teških kroničnih bolesti',
                'points' => 0,
            ]);
            QuizQuestionChoice::create([
                'quiz_question_id' => $question->id,
                'choice' => 'Bolujem od neke teške kronične bolesti',
                'points' => -100,
            ]);
            // QUESTION 6
            $question = QuizQuestion::create([
                'question' => 'Jeste li ovisnik o alkoholu ili drogama?',
                 'category' => 'pop',
            ]);
            QuizQuestionChoice::create([
                'quiz_question_id' => $question->id,
                'choice' => 'Nisam ovisan/na o navedenim supstancama',
                'points' => 0,
            ]);
            QuizQuestionChoice::create([
                'quiz_question_id' => $question->id,
                'choice' => 'Ovisan sam o nekoj o navedenih supstanca',
                'points' => -100,
            ]);
            // QUESTION 7
            $question = QuizQuestion::create([
                'question' => 'Jeste li bili liječeni protiv, ili izloženi povećanom riziku od spolnih bolesti? (spolni odnos s prostitutkama, često mjenjanje seksualnih partnera, uzimanje droge intravenskim putem, HIV pozitivne osobe, muškarci koji su imali seksualne odnose s drugim muškarcima)',
                'category' => 'pop',
            ]);
            QuizQuestionChoice::create([
                'quiz_question_id' => $question->id,
                'choice' => 'Ne spadam u navedene skupine',
                'points' => 0,
            ]);
            QuizQuestionChoice::create([
                'quiz_question_id' => $question->id,
                'choice' => 'Spadam u neku od navedenih skupina',
                'points' => -100,
            ]);
        }


}
