<?php
namespace App\Http\Controllers;
use App\Clases\Contenido\Contenido;

class HomeController extends Controller {
	/**
	 * Muestra la aplicacion dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index() {
        /* Slider Header */
        $xIdTipoContenido = config('parametros.idTipoContenidoSlideHeader');
        $xOffSet = 0;
        $xLimit = 1;
        $xOrderBy = 'orden';
        $xOrderType = 'ASC';
        $oTipoContenidoSlideHeader = new Contenido();
        $oTipoContenidoSlideHeader = $oTipoContenidoSlideHeader->getAll($xIdTipoContenido, $xOffSet, $xLimit, $xOrderBy, $xOrderType);

		/* Imagen Header */
        $xIdTipoContenido = config('parametros.idTipoContenidoHeader');
        $xOffSet = 0;
        $xLimit = 1;
        $xOrderBy = 'orden';
        $xOrderType = 'ASC';
        $oContenidoHeader = new Contenido();
        $oContenidoHeader = $oContenidoHeader->getAll($xIdTipoContenido, $xOffSet, $xLimit, $xOrderBy, $xOrderType);

        /* Info */
        $xIdTipoContenido = config('parametros.idTipoContenidoInfo');
        $xOffSet = 0;
        $xLimit = 1;
        $xOrderBy = 'orden';
        $xOrderType = 'ASC';
        $oContenidoInfo = new Contenido();
        $oContenidoInfo = $oContenidoInfo->getAll($xIdTipoContenido, $xOffSet, $xLimit, $xOrderBy, $xOrderType);

        /* Contenedores */
        $xIdTipoContenido = config('parametros.idTipoContenido');
        $xOffSet = 0;
        $xLimit = 2;
        $xOrderBy = 'orden';
        $xOrderType = 'ASC';
        $oContenido = new Contenido();
        $oContenido = $oContenido->getAll($xIdTipoContenido, $xOffSet, $xLimit, $xOrderBy, $xOrderType);

		return view('home.index', compact('oTipoContenidoSlideHeader','oContenidoHeader','oContenidoInfo','oContenido'));
	}
}