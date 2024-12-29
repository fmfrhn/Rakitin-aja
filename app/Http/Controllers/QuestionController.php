<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\Recommendation;
use App\Models\QuestionCategory;

class QuestionController extends Controller
{
    public function index()
    {
        return view('questioncategory', [
            'question_categories' => QuestionCategory::all()
        ]);
    }

    public function showQuestionCategory(Request $request)
    {
        $result_question = Question::where('category_id', $request->k_id)->with('answer')->get();
        session(['total_score' => 0]);
        session(['data_question' => $result_question]);
        return redirect()->route('category.question.show', ['q_id' => 0]);
    }

    public function showQuestion(Request $request, $q_id)
    {


        $questions = session('data_question');
        $total_score = session('total_score');
        // dd($questions[0]->answer);
        //mencari total pertanyan
        $total_question = $questions->count();

        if ($total_question == $q_id) {
            return redirect()->route('result.sparepart', [
                'total_score' => $total_score
            ]);
        }

        $q = $questions[$q_id];

        // dd($q->answer);
        return view('questions', [
            'question' => $q,
            'next_question_id' => $q_id + 1,
            'total_score' => session('total_score')
        ]);
    }

    public function answerCalculation(Request $request)
    {
        $next_index = $request->next_index;
        // Validasi input jika diperlukan
        $request->validate([
            'bobot_jawaban' => 'required|numeric',
        ]);

        // Tangkap nilai bobot_jawaban
        $bobot_jawaban = $request->bobot_jawaban;
        $current_score = session('total_score');
        $total_score = $current_score + $bobot_jawaban;
        session(['total_score' => $total_score]);
        // dd($bobot_jawaban, $current_score, $total_score);

        return redirect()->route('category.question.show', ['q_id' => $next_index]);
    }

    public function recommendation()
    {

        $total_score = session('total_score');
        $questions = session('data_question');
        $total_question = $questions->count();

        $mid_end = ($total_question * 2) / 3;
        $low_end = $total_question / 3;

        if ($total_score <= $mid_end) {
            $computers = Recommendation::where('tipe_spesifikasi', 'high')->get();
        }

        if ($total_score <= $low_end) {
            $computers = Recommendation::where('tipe_spesifikasi', 'mid')->get();
        } else {
            $computers = Recommendation::where('tipe_spesifikasi', 'low')->get();
        }
        // dd($rekomendasi->toArray());
        session(['result' => $computers]);

        return redirect()->route('result');

    }

    public function result()
    {

        $computers = session('result');

        return view('result', [
            'computers' => $computers
        ]);
    }
}
