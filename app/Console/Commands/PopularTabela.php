<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App;

class PopularTabela extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:popular';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'preenche as tabelas';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $arrayCategorias [] = "Jogos";
        $arrayCategorias [] = "Carregadores";
        $arrayCategorias [] = "Eletrodomesticos";
        $arrayCategorias [] = "Milicos";
        $arrayCategorias [] = "Pederneiras";
                
        foreach ($arrayCategorias as $cat){
        $categoria = new App\Categoria();
        $categoria->nomcat = "$cat";
        $categoria->save();  
        }
        
        
        //cliente um
        $arrayCliente [0]['nome'] = "Rodriguinho";
        $arrayCliente [0]['cpf'] = "cpf 1";
        $arrayCliente [0]['endereco'] = "rua 1";
        $arrayCliente [0]['bairro'] = "bairro 1";
        $arrayCliente [0]['numero'] = 1;
        $arrayCliente [0]['cidade'] = "bruxxque";
        $arrayCliente [0]['estado'] = "sc";
        $arrayCliente [0]['telefone'] = "999999991";
        
        $arrayCliente [1]['nome'] = "clebinho";
        $arrayCliente [1]['cpf'] = "cpf 2";
        $arrayCliente [1]['endereco'] = "rua 2";
        $arrayCliente [1]['bairro'] = "bairro 2";
        $arrayCliente [1]['numero'] = 2;
        $arrayCliente [1]['cidade'] = "bruxxque";
        $arrayCliente [1]['estado'] = "sc";
        $arrayCliente [1]['telefone'] = "99999992";
        
        $arrayCliente [2]['nome'] = "cleidisson";
        $arrayCliente [2]['cpf'] = "cpf 3";
        $arrayCliente [2]['endereco'] = "rua 3";
        $arrayCliente [2]['bairro'] = "bairro 3";
        $arrayCliente [2]['numero'] = 3;
        $arrayCliente [2]['cidade'] = "bruxxque";
        $arrayCliente [2]['estado'] = "sc";
        $arrayCliente [2]['telefone'] = "99999993";
        
        $arrayCliente [3]['nome'] = "jertrudes";
        $arrayCliente [3]['cpf'] = "cpf 4";
        $arrayCliente [3]['endereco'] = "rua 4";
        $arrayCliente [3]['bairro'] = "bairro 4";
        $arrayCliente [3]['numero'] = 4;
        $arrayCliente [3]['cidade'] = "bruxxque";
        $arrayCliente [3]['estado'] = "sc";
        $arrayCliente [3]['telefone'] = "99999994";
        
        $arrayCliente [4]['nome'] = "claudovoma";
        $arrayCliente [4]['cpf'] = "cpf 5";
        $arrayCliente [4]['endereco'] = "rua 5";
        $arrayCliente [4]['bairro'] = "bairro 5";
        $arrayCliente [4]['numero'] = 5;
        $arrayCliente [4]['cidade'] = "bruxxque";
        $arrayCliente [4]['estado'] = "sc";
        $arrayCliente [4]['telefone'] = "99999995";
       
        
        foreach($arrayCliente as $cli){
            $cliente = new App\cliente();
            $cliente->nomcli = $cli['nome'];
            $cliente->cpfcli = $cli['cpf'];
            $cliente->endcli = $cli['endereco'];
            $cliente->baicli = $cli['bairro'];
            $cliente->numcli = $cli['numero'];
            $cliente->cidcli = $cli['cidade'];
            $cliente->estcli = $cli['estado'];
            $cliente->telcli = $cli['telefone'];
            $cliente->save();
        }
        
        $arrayProduto [0]['produto'] = "nunchacos";
        $arrayProduto [0]['descricao'] = "Pensa num produtox baita pra por na baia";
        $arrayProduto [0]['valor'] = 100;
        $arrayProduto [0]['catalogo'] = 1;

        $arrayProduto [1]['produto'] = "tixan ipe";
        $arrayProduto [1]['descricao'] = "pra deixar aquela sua roupa xerosinha";
        $arrayProduto [1]['valor'] = 20;
        $arrayProduto [1]['catalogo'] = 2;
        
        $arrayProduto [2]['produto'] = "power ranger de estimacao";
        $arrayProduto [2]['descricao'] = "uma suprema protecao com direito a faiscas e explosoes";
        $arrayProduto [2]['valor'] = 2500;
        $arrayProduto [2]['catalogo'] = 3;
        
        $arrayProduto [3]['produto'] = "boi da cara preta";
        $arrayProduto [3]['descricao'] = "pra levar o menino pro capeta";
        $arrayProduto [3]['valor'] = 30;
        $arrayProduto [3]['catalogo'] = 4;
        
        $arrayProduto [4]['produto'] = "deivid";
        $arrayProduto [4]['descricao'] = "pelamor de deus nao aguento mais esse maluco";
        $arrayProduto [4]['valor'] = 00;
        $arrayProduto [4]['catalogo'] = 5;
        
        foreach($arrayProduto as $pro){
            $produto = new App\Produto();
            $produto->nompro = $pro['produto'];
            $produto->despro = $pro['descricao'];
            $produto->vlrpro = $pro['valor'];
            $produto->codcat = $pro['catalogo'];
            $produto->save();
        
    }
}
}
