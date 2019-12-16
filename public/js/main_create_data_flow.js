     /*
    * Sum intputs irrigation system
    */
   function sumIrrigationInputs(){
        var totalResultIrrigation = 0;

        $('.data_sis_riego').each(function(){
            if (isNaN(parseFloat($(this).val()))) {
                totalResultIrrigation += 0;
            } else {
                totalResultIrrigation += parseFloat($(this).val());
            }
        });
            document.getElementById('result_irrigation').innerHTML = totalResultIrrigation;
    }

$(document).ready(function(){
    /*
    * Create inputs automatically by input select n_pediod
    */
    var n_period = $('#input_periodos').change(function(){
    $( "#content_table_cash" ).empty();
        document.getElementById('result_irrigation').innerHTML = 0;
        for(var i=1; i <= n_period.val(); i++){
            $( "#content_table_cash" ).append('<tr><th>'+i+'</th> <th><input class="form-control form-control-sm data_sis_riego" onkeyup="sumIrrigationInputs()" type="number" name="sis_riego_p_'+i+'"/></th> <th><input class="form-control form-control-sm" type="number" name="inv_cul_p_'+i+'"></th> <th><input class="form-control form-control-sm" type="number" name="energia_p_'+i+'"></th> <th><input class="form-control form-control-sm" type="number" name="mantenimiento_p_'+i+'"></th> <th><input class="form-control form-control-sm" type="number" name="ingreso_p_'+i+'"></th> <th><input class="form-control form-control-sm" type="number" name="liquidacion_p_'+i+'"></th> <th><input class="form-control form-control-sm" type="number" name="flujo_periodo_p_'+i+'"></th> <th><input class="form-control form-control-sm" type="number" name="acumulado_p_'+i+'"></th></tr>');
        }  
    });
});