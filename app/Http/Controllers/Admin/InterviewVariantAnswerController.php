<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as Controller;
use App\Models\InterviewVariantAnswer;

class InterviewVariantAnswerController extends Controller
{


    public function store($questionId, $answer)
    {
        $store = new InterviewVariantAnswer;
        $store->question_id = $questionId;
        $store->answer = $answer;
        $store->save();

    }

    public function update($id, $answer, $questionId)
    {
        $update = InterviewVariantAnswer::where('id', $id)->first();
        if (!$update) {
            $this->store($questionId, $answer);
        }
        if (!empty($update)) {
            if ($update->answer != $answer) {
                $update->answer = $answer;
                $update->save();
            }
        }
    }

    public function delete($id)
    {
        InterviewVariantAnswer::destroy($id);
        return back();
    }
}
