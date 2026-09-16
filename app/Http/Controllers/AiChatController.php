<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\AiKnowledge;

class AiChatController extends Controller
{
    public function manage()
    {
        $knowledges = AiKnowledge::latest()->get();
        return view('add-ai-knowledge', compact('knowledges'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'keyword' => 'required|string|max:255',
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        AiKnowledge::create([
            'keyword' => strtolower(trim($request->keyword)),
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->back()->with('success', 'Data AI Knowledge berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $knowledge = AiKnowledge::findOrFail($id);
        $knowledge->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }

    public function ask(Request $request)
    {
        $query = $request->input('message', '');

        if (empty($query)) {
            return response()->json(['answer' => 'Silakan ketik pertanyaan Anda.']);
        }

        $apiKey = env('GEMINI_API_KEY');

        if (!$apiKey) {
            return response()->json(['answer' => 'Error: GEMINI_API_KEY belum terbaca di .env']);
        }

        // Mengambil data dari database
        $knowledges = AiKnowledge::all();
        $context = "";

        if ($knowledges->isNotEmpty()) {
            $context = "Gunakan data berikut sebagai referensi utama:\n";
            foreach ($knowledges as $k) {
                $context .= "- {$k->question} : {$k->answer}\n";
            }
        }

        // Prompt baru yang lebih pintar dan dilarang kaku
        $prompt = "Kamu adalah Coach AI, asisten pelatih basket yang asik dan ramah dari Eagles Basketball Academy. \n"
            . $context
            . "\nATURAN KETAT:\n"
            . "1. Jawab santai, singkat, dan jangan seperti robot.\n"
            . "2. JANGAN PERNAH mengatakan 'teks informasi belum terlampir', 'konteks tidak ada', atau bahasa kaku semacamnya.\n"
            . "3. Jika pertanyaan user TIDAK ADA di data referensi, jawab dengan natural bahwa kamu belum memegang informasi pastinya dan arahkan user untuk bertanya ke Admin Eagles.\n\n"
            . "Pertanyaan user: " . $query;

        try {
            // MENGGUNAKAN GEMINI-3.6-FLASH SESUAI ERROR GOOGLE
            $response = Http::withoutVerifying()->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-3.6-flash:generateContent?key={$apiKey}", [
                'contents' => [
                    ['parts' => [['text' => $prompt]]]
                ]
            ]);

            if ($response->successful()) {
                $aiAnswer = $response->json('candidates.0.content.parts.0.text');
                return response()->json(['answer' => str_replace('*', '', $aiAnswer)]);
            }

            $errorDetail = $response->json('error.message') ?? $response->body();
            return response()->json(['answer' => 'Error Google API: ' . $errorDetail]);

        } catch (\Exception $e) {
            return response()->json(['answer' => 'Error Sistem: ' . $e->getMessage()]);
        }
    }
}