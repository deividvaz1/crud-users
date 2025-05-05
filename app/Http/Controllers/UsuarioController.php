<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();
        //especificando a view home
        return view('site.home', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'cpf' => 'required|unique:users,cpf',
            'data_nascimento' => 'required|date_format:d/m/Y',
            'telefone' => 'required',
            'password' => 'required|string|min:6|confirmed', // laravel tem parametros de confirmação de senha
        ]); //tava dando erro na criação por conta dessa confirmação do laravel

        // carbon para o formato de data no banco de dados
        $data_nascimento = \Carbon\Carbon::createFromFormat('d/m/Y', $request->data_nascimento)->format('Y-m-d');

        // como o laravel já usa o PDO pelo eloquent, tive que refazer a conexao pra se adequar ao que o desafio pede
        try {
            $pdo = DB::connection()->getPdo();

            $stmt = $pdo->prepare('
                INSERT INTO users (name, email, cpf, data_nascimento, telefone, password)
                VALUES (:name, :email, :cpf, :data_nascimento, :telefone, :password)
            ');

            $stmt->execute([
                ':name' => $request->name,
                ':email' => $request->email,
                ':cpf' => $request->cpf,
                ':data_nascimento' => $data_nascimento,
                ':telefone' => $request->telefone,
                ':password' => bcrypt($request->password),
            ]);

            return redirect()->route('usuarios.index');
        } catch (\PDOException $e) {
            return back()->withErrors(['error' => 'Erro ao cadastrar usuário: ' . $e->getMessage()]);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    //método pra procurar o usuário no banco e fazer a att
    public function edit(string $id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('site.details', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:users,email,{$id}",
            'cpf' => "required|unique:users,cpf,{$id}",
            'data_nascimento' => 'required|date',
            'telefone' => 'required',
            'password' => 'nullable|string|min:6', // senha é opcional
        ]);

        try {
            $pdo = DB::connection()->getPdo();

            // sql update USAndo PDO para manipulação
            $sql = '
                UPDATE users
                SET name = :name, email = :email, cpf = :cpf, data_nascimento = :data_nascimento, telefone = :telefone';

            $params = [
                ':name' => $request->name,
                ':email' => $request->email,
                ':cpf' => $request->cpf,
                ':data_nascimento' => $request->data_nascimento,
                ':telefone' => $request->telefone,
                ':id' => $id,
            ];

            if (!empty($request->password)) {
                $sql .= ', password = :password';
                $params[':password'] = bcrypt($request->password);
            }

            $sql .= ' WHERE id = :id';

            $stmt = $pdo->prepare($sql);
            $stmt->execute($params);

            return redirect()->route('usuarios.index')->with('success', 'Usuário atualizado com sucesso!');
        } catch (\PDOException $e) {
            return back()->withErrors(['error' => 'Erro ao atualizar usuário: ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            DB::table('users')->where('id', $id)->delete();
            return redirect()->route('site.index')->with('success', 'Usuário excluído com sucesso!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Erro ao excluir usuário: ' . $e->getMessage()]);
        }
    }
}
