<?php



namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

use App\RolUsuario;
use App\User;
use App\Inventario;

class Controller extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function Inventario()
	{

		$inventario = Inventario::all();
		return view('Inventario',[
			'inventario'=>$inventario,
		]);
	}

	public function InventarioStore(Request $request)
	{
		$inventario = Inventario::where('nombre_producto',$request['Nombre'])->first();
		if($inventario == null){
			Inventario::insert([
				'nombre_producto' => $request['Nombre'],
			]);

			return back()->with('msjcreado','eliminado');

		}else{
			return back()->with('msjerror','eliminado');
		}
	}

	public function AgregarProducto(Request $request, $id){

		$inventario = Inventario::where('id',$id)->first();
		return view('AgregarInventario',[
			'inventario'=>$inventario,
		]);
	}

	public function AgregarProductos(Request $request)
	{
        
        

		return back()->with('msjeditado','eliminado');
        
    }
}
