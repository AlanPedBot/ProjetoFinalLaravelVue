<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'session_id'];
    public function rules()
    {
        return [
            'name' => 'required|unique:books,name,' . $this->id . '',
            'session_id' => 'required'
        ];
    }
    public function feedback()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'name.unique' => 'O nome do livro já existe'
        ];
    }
}
