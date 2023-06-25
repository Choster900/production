<style>
    #global {
        height: auto;
        width: auto;
        /*border: 1px solid #ddd;*/
        /*background: #f1f1f1;*/
        overflow-y: scroll;
    }

    .variables {
        border-collapse: collapse;
        border-radius: 1em;
        overflow: hidden;

    }

    .variables thead th {
        padding: 1em;
        background: #9aa5b4;
        border-bottom: 2px solid white;
        font-weight: revert;
        color: #1f314e;

    }

    .variables tbody td {
        padding: 1em;
        background: #d2d7de;
        border-bottom: 2px solid white;
        font-weight: revert;
        color: #1f314e;
    }

    .variables body {
        margin: 1.5em;
    }

    .variables thead tr th {
        border: 1px solid white;
        width: 175px;
        text-align: center;
    }

    .variables tbody tr td {
        border: 1px solid white;
        text-align: center;
    }

    .iputs-producto-inspeccionado {
        background-color: transparent;
        border: none;
        height: 22px;
        width: 75px;
        text-align: center
    }

    .titulos-variables {
        font-size: 17pt;
    }
</style>
<div class="row container" id="global">
    <div class="div-img-test col-12">
    <span class="titulos-variables">Variables</span>
        <button class="popup button-info">
            <img src="/produccion2/resources/generales/img/icons/Actualiza-variables.png" id="btnGetPreviousInfo" data-id="<?= $impresion_proceso[0]->id ?>" style="width: 35px;" class="img-info">
        </button>
    </div>
    <table class="variables">
        <thead>
            <tr>
                <th>PH</th>
                <th>COND</th>
                <th>ALC</th>
                <th>TEM</th>
                <th>VIS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input class="iputs-producto-inspeccionado rdo-input" id="txtPh" type="text" value="<?= $impresion_proceso[0]->ph ?>" data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="ph">
                </td>
                <td>
                    <input class="iputs-producto-inspeccionado rdo-input" id="txtCond"  type="text" value="<?= $impresion_proceso[0]->cond ?>" data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="cond">
                </td>
                <td>
                    <input class="iputs-producto-inspeccionado rdo-input" id="txtAlc"  type="text" value="<?= $impresion_proceso[0]->alc ?>" data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="alc">
                </td>
                <td>
                    <input class="iputs-producto-inspeccionado rdo-input" id="txtTem"  type="text" value="<?= $impresion_proceso[0]->tem ?>" data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="tem">
                </td>
                <td>
                    <input class="iputs-producto-inspeccionado rdo-input" id="txtVis"  type="text"  value="<?= $impresion_proceso[0]->vis ?>" data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="vis">
                </td>
            </tr>
        </tbody>
    </table>
    <br>
</div>
<div class="row container" id="global">
    <span class="titulos-variables">Porcentaje de agua por unidad</span>
    <table class="variables">
        <thead>
            <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input class="iputs-producto-inspeccionado rdo-input" type="text" value="<?= $impresion_proceso[0]->proc_01 ?>" data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_01">
                </td>
                <td>
                    <input class="iputs-producto-inspeccionado rdo-input" type="text" value="<?= $impresion_proceso[0]->proc_02 ?>" data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_02">
                </td>
                <td>
                    <input class="iputs-producto-inspeccionado rdo-input" type="text" value="<?= $impresion_proceso[0]->proc_03 ?>" data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_03">
                </td>
                <td>
                    <input class="iputs-producto-inspeccionado rdo-input" type="text" value="<?= $impresion_proceso[0]->proc_04 ?>" data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_04">
                </td>
                <td>
                    <input class="iputs-producto-inspeccionado rdo-input" type="text" value="<?= $impresion_proceso[0]->proc_05 ?>" data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_05">
                </td>
                <td>
                    <input class="iputs-producto-inspeccionado rdo-input" type="text" value="<?= $impresion_proceso[0]->proc_06  ?>" data-tabla-name="detalle_fcc011" data-id="<?= $impresion_proceso[0]->id ?>" data-name="proc_06">
                </td>
            </tr>
        </tbody>
    </table>
    <br>
</div>