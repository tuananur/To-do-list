<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::paginate(5); // Sayfa başına 5 kayıt
        return view('index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Doğrulama kurallarını belirleyin
        $request->validate([
            "title" => "required|string|max:255", // title zorunlu, string ve maksimum 255 karakter
            "description" => "required|string", // description zorunlu, string
            
        ]);

        Todo::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('index')->with('success', 'Todo başarıyla eklendi!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $todo = Todo::findOrFail($id);
        return view('edit', compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $todo = Todo::findOrFail($id); // ID ile Todo'yu bul
        return view('edit', compact('todo')); // Düzenleme sayfasına gönder
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "title" => "required|string|max:255", // title zorunlu, string ve maksimum 255 karakter
            "description" => "nullable|string", // description isteğe bağlı, string
        ]);

        $todo = Todo::findOrFail($id);
        $todo->update([
            'title' => $request->title,
            'description' => $request->description,
            'completed' => $request->has('completed') ? 1 : 0, // Checkbox durumunu kontrol et
        ]);

        return redirect()->route('index')->with('success', 'Todo başarıyla güncellendi.');
    }

    public function destroy($id)
    {
        $todo = Todo::find($id);
        if ($todo) {
            $todo->delete();
            return redirect()->route('index')->with('success', 'Todo başarıyla silindi.');
        }
        return redirect()->route('index')->with('error', 'Todo bulunamadı.');
    }
}
?>
