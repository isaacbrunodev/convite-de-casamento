namespace App\Http\Livewire;

use Livewire\Component;

class ConfirmarPresenca extends Component
{
    public $nome = '';
    public $temAcompanhantes = false;
    public $numeroAcompanhantes = 0;

    public function setAcompanhantes($valor)
    {
        $this->temAcompanhantes = $valor;
        if (!$valor) {
            $this->numeroAcompanhantes = 0;
        }
    }

    public function setNumeroAcompanhantes($numero)
    {
        if ($numero >= 1 && $numero <= 3) {
            $this->numeroAcompanhantes = $numero;
        }
    }

    public function confirmar()
    {
        $this->validate([
            'nome' => 'required|min:3',
            'numeroAcompanhantes' => 'required|integer|min:0|max:3'
        ]);

        // Lógica para salvar a confirmação
        session()->flash('message', 'Presença confirmada com sucesso!');
        
        $this->reset();
    }

    public function render()
    {
        return view('livewire.confirmar-presenca');
    }
} 