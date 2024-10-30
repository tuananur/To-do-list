<?php  

namespace App\Http\Requests;  

use Illuminate\Foundation\Http\FormRequest;  

class TodoRequest extends FormRequest  
{  
    public function authorize()  
    {  
        return true; // İzin ver  
    }  

    public function rules()  
    {  
        return [  
            'title' => 'required|string|max:255',  
            'description' => 'required|string',  
            'completed' => 'nullable|boolean', // 'boolean' şeklinde düzenleyebilirsiniz  
        ];  
    }  

    public function messages()  
    {  
        return [  
            'title.required' => 'Todo başlığı zorunludur.',  
            'description.required' => 'Todo açıklaması zorunludur.',  
            // Diğer özelleştirilmiş hata mesajları  
        ];  
    }  
}