namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Convidado extends Model
{
    protected $table = 'convidados';
    
    protected $fillable = [
        'nome',
        'confirmado',
        'quantidade_acompanhantes',
        'mensagem'
    ];

    protected $casts = [
        'confirmado' => 'boolean',
        'quantidade_acompanhantes' => 'integer'
    ];
} 