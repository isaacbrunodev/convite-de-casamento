namespace App\Http\Controllers;

use App\Models\Convidado;
use Illuminate\Http\Request;

class ConvidadoController extends Controller
{
    public function index()
    {
        return view('confirmar_presenca');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'quantidade_acompanhantes' => 'required|integer|min:0',
            'mensagem' => 'nullable|string'
        ]);

        $validatedData['confirmado'] = true;

        Convidado::create($validatedData);

        return redirect()->back()->with('success', 'Presença confirmada com sucesso!');
    }

    public function buscarNomes(Request $request)
    {
        $termo = $request->get('termo');
        
        $nomes = Convidado::where('nome', 'LIKE', "%{$termo}%")
            ->where('confirmado', false)
            ->pluck('nome');

        return response()->json($nomes);
    }
} 