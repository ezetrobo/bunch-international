<?php 
        /* Info Footer */
        use App\Clases\Contenido\Contenido;
        $xIdTipoContenido = config('parametros.idTipoContenidoFooter');
        $xOffSet = 0;
        $xLimit = 2;
        $xOrderBy = 'orden';
        $xOrderType = 'ASC';
        $oContenidoFooter = new Contenido();
        $oContenidoFooter = $oContenidoFooter->getAll($xIdTipoContenido, $xOffSet, $xLimit, $xOrderBy, $xOrderType);
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-8">
                <div class="bg-form">
                    <iframe src="https://app.fidelitytools.net/resource/suscriptor/?f=NjkzMA&s=NDY4&ididioma=1" frameborder="0"></iframe>
                </div>
            </div>

            @if(!empty($oContenidoFooter))
                @foreach($oContenidoFooter as $key => $xContenidoFooter)
                    <div class="col-xl-4 offset-xl-2 col-lg-5 offset-lg-1 col-md-4 offset-md-0">
                        <div class="info-footer">
                            {!!$xContenidoFooter->descripcion!!}
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <div class="row">
            <div id="sawubona-footer" data-color="blanco"></div>
        </div>
    </div>

    <div class="centrar-img">
        <img src="{{ asset('images/bg-footer.png') }}" alt="">
    </div>
</footer>




<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', '<?= config("main.ID_ANALYTIICS") ?>', 'auto');
ga('send', 'pageview');
</script>